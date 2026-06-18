<?php
/**
 * search.php
 * Keres az SQLite indexben.
 *
 * Paraméter: ?q=keresőszó
 * Válasz:    JSON
 *
 * Jellemzők:
 *  - ékezet-érzéketlen
 *  - kis/nagybetű érzéketlen
 *  - Levenshtein fuzzy bővítés az indexelt szókészletből
 *  - fallback LIKE ha a fuzzy sem hoz eredményt
 *  - találati sorrend: hány eredeti keresőszóra van találat
 */

header('Content-Type: application/json; charset=utf-8');

define('DB_PATH', __DIR__ . '/search_index.sqlite');

// Levenshtein: 1 eltérés per ennyi karakter szóhossz
define('LEVENSHTEIN_RATIO', 3);
// Maximálisan megengedett Levenshtein távolság
define('LEVENSHTEIN_MAX', 3);
// Ennél rövidebb szavakat nem bővítünk fuzzy-val
define('MIN_WORD_LEN', 4);
// Snippet környezet karakterben
define('SNIPPET_CONTEXT', 120);

// ---------------------------------------------------------------------------
// Bemenet
// ---------------------------------------------------------------------------
$query = trim($_GET['q'] ?? '');

if ($query === '') {
    echo json_encode(['error' => 'A "q" paraméter kötelező.', 'results' => []], JSON_UNESCAPED_UNICODE);
    exit;
}

if (!file_exists(DB_PATH)) {
    echo json_encode(['error' => 'Az index nem létezik. Futtasd először a build.php-t.', 'results' => []], JSON_UNESCAPED_UNICODE);
    exit;
}

// ---------------------------------------------------------------------------
// SQLite
// ---------------------------------------------------------------------------
try {
    $pdo = new PDO('sqlite:' . DB_PATH);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo json_encode(['error' => 'SQLite hiba: ' . $e->getMessage(), 'results' => []], JSON_UNESCAPED_UNICODE);
    exit;
}

// ---------------------------------------------------------------------------
// Dokumentumok betöltése
// ---------------------------------------------------------------------------
$rows = $pdo->query("SELECT path, title, content, normalized FROM pages")
            ->fetchAll(PDO::FETCH_ASSOC);

// ---------------------------------------------------------------------------
// Szókészlet felépítése az indexből
// normalized_alak => [eredeti_alak1, eredeti_alak2, ...]
// ---------------------------------------------------------------------------
$vocabulary = buildVocabulary($rows);

// ---------------------------------------------------------------------------
// Keresőszavak tokenizálása + fuzzy bővítés
// ---------------------------------------------------------------------------
$originalWords = tokenize($query);
$expandedMap   = expandWithFuzzy($originalWords, $vocabulary);
// Minden keresési alak egy lapos listában
$allSearchWords = array_values(array_unique(array_merge(...array_values($expandedMap))));

// ---------------------------------------------------------------------------
// Keresés a dokumentumokban (fuzzy)
// ---------------------------------------------------------------------------
$results = searchInRows($rows, $originalWords, $allSearchWords);

// ---------------------------------------------------------------------------
// Fallback: LIKE ha fuzzy sem hozott semmit
// ---------------------------------------------------------------------------
if (empty($results)) {
    $likeWords = [];
    foreach ($originalWords as $w) {
        $likeWords[] = normalizeText($w);
        foreach (($expandedMap[$w] ?? []) as $expanded) {
            $likeWords[] = normalizeText($expanded);
        }
    }
    $likeWords = array_values(array_unique($likeWords));

    $conditions = array_fill(0, count($likeWords), "normalized LIKE ?");
    $params     = array_map(fn($w) => "%$w%", $likeWords);

    $stmt = $pdo->prepare(
        "SELECT path, title, content, normalized FROM pages WHERE " . implode(' OR ', $conditions)
    );
    $stmt->execute($params);
    $likeRows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $results = searchInRows($likeRows, $originalWords, $allSearchWords);
}

// ---------------------------------------------------------------------------
// Rendezés: előbb az eredeti szavakra talált, azon belül az összes találat
// ---------------------------------------------------------------------------
usort($results, function ($a, $b) {
    if ($b['orig_match_count'] !== $a['orig_match_count']) {
        return $b['orig_match_count'] - $a['orig_match_count'];
    }
    return $b['match_count'] - $a['match_count'];
});

// ---------------------------------------------------------------------------
// Kimenet
// ---------------------------------------------------------------------------
$output = array_map(fn($r) => [
    'path'          => $r['path'],
    'title'         => $r['title'],
    'snippet'       => $r['snippet'],
    'matched_words' => $r['matched_words'],
    'match_count'   => $r['match_count'],
], $results);

echo json_encode([
    'query'    => $query,
    'expanded' => $expandedMap,
    'total'    => count($output),
    'results'  => $output,
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

// ===========================================================================
// Segédfüggvények
// ===========================================================================

/**
 * Dokumentumokban keres, visszaadja a találatokat.
 */
function searchInRows(array $rows, array $originalWords, array $allSearchWords): array
{
    $results = [];

    foreach ($rows as $row) {
        $normContent  = $row['normalized'] ?? normalizeText($row['content'] . ' ' . $row['title']);
        $matchedWords = [];
        $snippets     = [];

        foreach ($allSearchWords as $word) {
            $normWord = normalizeText($word);
            if ($normWord === '') continue;

            if (mb_strpos($normContent, $normWord) !== false) {
                $matchedWords[] = $word;
                $snippets[]     = extractSnippet($row['content'], $normWord, $normContent);
            }
        }

        if (empty($matchedWords)) continue;

        // Hány eredeti keresőszóra van találat
        $origMatchCount = 0;
        foreach ($originalWords as $ow) {
            $normOw = normalizeText($ow);
            foreach ($matchedWords as $mw) {
                if (normalizeText($mw) === $normOw) {
                    $origMatchCount++;
                    break;
                }
            }
        }

        $results[] = [
            'path'             => $row['path'],
            'title'            => $row['title'] ?: basename($row['path']),
            'matched_words'    => array_values(array_unique($matchedWords)),
            'match_count'      => count(array_unique($matchedWords)),
            'orig_match_count' => $origMatchCount,
            'snippet'          => highlightWords(implode(' … ', array_filter(array_unique($snippets))), $matchedWords),
        ];
    }

    return $results;
}

/**
 * Kiemeli a szavakat a szövegben <b> tagekkel.
 */
function highlightWords(string $text, array $words): string
{
    if (empty($words)) return $text;

    // Rendezés hossz szerint csökkenőbe, hogy a hosszabb szavak ne rontsák el a rövidebbeket (pl. "alma" vs "al")
    usort($words, fn($a, $b) => mb_strlen($b) - mb_strlen($a));

    foreach ($words as $word) {
        $quoted = preg_quote($word, '/');
        // Keresés ékezet-érzéketlen módon nem egyszerű PHP-ban regex-el, 
        // de mivel a $words-ban benne vannak a szövegben TÉNYLEGESEN megtalált alakok is (hála a searchInRows-nak),
        // ezért egy egyszerű kis/nagybetű érzéketlen csere is elég lehet.
        // Viszont vigyázni kell, hogy ne cseréljük le a már behelyezett <b> tageket.
        
        $text = preg_replace_callback(
            '/(?<!<b>)' . $quoted . '(?!(?:<\/b>))/iu',
            fn($m) => '<b>' . $m[0] . '</b>',
            $text
        );
    }
    return $text;
}

/**
 * Szókészlet felépítése: normalized => [eredeti alakok]
 */
function buildVocabulary(array $rows): array
{
    $vocab = [];
    foreach ($rows as $row) {
        $combined = $row['content'] . ' ' . $row['title'];
        $words    = preg_split('/[\s\p{P}]+/u', $combined, -1, PREG_SPLIT_NO_EMPTY);
        foreach ($words as $w) {
            if (mb_strlen($w) < MIN_WORD_LEN) continue;
            $norm  = normalizeText($w);
            $lower = mb_strtolower($w, 'UTF-8');
            if (!isset($vocab[$norm])) $vocab[$norm] = [];
            if (!in_array($lower, $vocab[$norm], true)) {
                $vocab[$norm][] = $lower;
            }
        }
    }
    return $vocab;
}

/**
 * Levenshtein alapú fuzzy bővítés.
 * Visszatér: ['eredeti_szó' => ['eredeti_szó', 'fuzzy1', ...]]
 */
function expandWithFuzzy(array $words, array $vocabulary): array
{
    $result = [];
    foreach ($words as $word) {
        $normWord = normalizeText($word);
        $wordLen  = mb_strlen($normWord);
        $expanded = [$word];

        if ($wordLen < MIN_WORD_LEN) {
            $result[$word] = $expanded;
            continue;
        }

        $maxDist = min((int) floor($wordLen / LEVENSHTEIN_RATIO), LEVENSHTEIN_MAX);

        foreach ($vocabulary as $normVocab => $origForms) {
            if (abs(mb_strlen($normVocab) - $wordLen) > $maxDist) continue;
            if ($normVocab === $normWord) continue;

            if (levenshtein($normWord, $normVocab) <= $maxDist) {
                foreach ($origForms as $orig) {
                    $expanded[] = $orig;
                }
            }
        }

        $result[$word] = array_values(array_unique($expanded));
    }
    return $result;
}

/**
 * Szöveg tokenizálása: kisbetűs szavak tömbje.
 */
function tokenize(string $text): array
{
    $text  = mb_strtolower($text, 'UTF-8');
    $words = preg_split('/[\s,;.!?]+/u', trim($text), -1, PREG_SPLIT_NO_EMPTY);
    return array_values(array_filter($words, fn($w) => mb_strlen($w) >= 2));
}

/**
 * Szöveg normalizálása: kisbetű + ékezetek eltávolítása.
 */
function normalizeText(string $text): string
{
    static $map = [
        'á'=>'a','é'=>'e','í'=>'i','ó'=>'o','ö'=>'o','ő'=>'o','ú'=>'u','ü'=>'u','ű'=>'u',
        'Á'=>'a','É'=>'e','Í'=>'i','Ó'=>'o','Ö'=>'o','Ő'=>'o','Ú'=>'u','Ü'=>'u','Ű'=>'u',
        'à'=>'a','â'=>'a','ä'=>'a','ã'=>'a','è'=>'e','ê'=>'e','ë'=>'e',
        'î'=>'i','ï'=>'i','ô'=>'o','õ'=>'o','ù'=>'u','û'=>'u','ç'=>'c','ñ'=>'n',
    ];
    return strtr(mb_strtolower($text, 'UTF-8'), $map);
}

/**
 * Snippet kinyerése a találat köré.
 */
function extractSnippet(string $content, string $normWord, string $normContent): string
{
    $pos = mb_strpos($normContent, $normWord);
    if ($pos === false) return '';

    $start   = max(0, $pos - SNIPPET_CONTEXT);
    $length  = mb_strlen($normWord) + SNIPPET_CONTEXT * 2;
    $snippet = mb_substr($content, $start, $length);

    if ($start > 0) {
        $spacePos = mb_strpos($snippet, ' ');
        if ($spacePos !== false && $spacePos < 20) {
            $snippet = mb_substr($snippet, $spacePos + 1);
        }
        $snippet = '…' . $snippet;
    }

    return trim(preg_replace('/\s+/', ' ', $snippet)) . '…';
}