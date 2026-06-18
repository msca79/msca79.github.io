<?php
/**
 * build.php
 * Bejárja a html/pdf/txt fájlokat, és SQLite adatbázisba indexeli őket.
 *
 * Használat:
 *   php build.php              → indexelés (csak újak / változottak)
 *   php build.php delete=true  → adatbázis törlése, majd teljes újraindexelés
 *   HTTP: build.php?delete=true
 */

define('DB_PATH',              __DIR__ . '/search_index.sqlite');
define('WWW_DIR',             realpath(__DIR__ . '/..'));
define('SUPPORTED_EXTENSIONS', ['html', 'htm', 'txt', 'pdf', 'php']);
define('INDEX_PATHS', [
    WWW_DIR . DIRECTORY_SEPARATOR . 'altalanos',
    WWW_DIR . DIRECTORY_SEPARATOR . 'elet',
    WWW_DIR . DIRECTORY_SEPARATOR . 'files',
    WWW_DIR . DIRECTORY_SEPARATOR . 'gimnazium',
    WWW_DIR . DIRECTORY_SEPARATOR . 'iskolankrol',
    WWW_DIR . DIRECTORY_SEPARATOR . 'tamogato',
    WWW_DIR . DIRECTORY_SEPARATOR . 'ugyintezes',
]);

// ---------------------------------------------------------------------------
// Paraméter kezelés (CLI + HTTP)
// ---------------------------------------------------------------------------
$params = [];
if (php_sapi_name() === 'cli') {
    $raw = implode('&', array_slice($argv, 1));
    parse_str(ltrim($raw, '?'), $params);
} else {
    $params = $_GET;
    header('Content-Type: text/plain; charset=utf-8');
}

$deleteFirst = ($params['delete'] ?? '') === 'true';

if ($deleteFirst && file_exists(DB_PATH)) {
    unlink(DB_PATH);
    echo "Adatbázis törölve.\n";
}

// ---------------------------------------------------------------------------
// SQLite kapcsolat
// ---------------------------------------------------------------------------
try {
    $pdo = new PDO('sqlite:' . DB_PATH);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("SQLite hiba: " . $e->getMessage() . "\n");
}

// ---------------------------------------------------------------------------
// Táblák létrehozása
// ---------------------------------------------------------------------------
$pdo->exec("
    CREATE TABLE IF NOT EXISTS pages (
        id         INTEGER PRIMARY KEY AUTOINCREMENT,
        path       TEXT    NOT NULL UNIQUE,
        title      TEXT,
        content    TEXT    NOT NULL,
        normalized TEXT    NOT NULL,
        indexed_at TEXT    NOT NULL
    );
");

// ---------------------------------------------------------------------------
// Fájlok bejárása
// ---------------------------------------------------------------------------
$indexed = 0;
$skipped = 0;

foreach (INDEX_PATHS as $basePath) {
    if (!is_dir($basePath)) {
        echo "Kihagyva (nem létező mappa): $basePath\n";
        continue;
    }

    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($basePath, RecursiveDirectoryIterator::SKIP_DOTS)
    );

    foreach ($iterator as $file) {
        if (!$file->isFile()) continue;

        $ext = strtolower($file->getExtension());
        if (!in_array($ext, SUPPORTED_EXTENSIONS, true)) continue;

        $realPath = $file->getRealPath();

        // Saját szkriptek és az adatbázis kihagyása
        if ($realPath === realpath(__FILE__))   continue;
        if ($realPath === realpath(DB_PATH))    continue;
        if (basename($realPath) === 'search.php') continue;

        $relativePath = ltrim(
            str_replace(['\\', WWW_DIR], ['/', ''], $realPath),
            '/'
        );

        echo "Indexelés: $relativePath ... ";

        try {
            [$title, $text] = extractContent($realPath, $ext);
        } catch (Exception $e) {
            echo "HIBA: " . $e->getMessage() . "\n";
            $skipped++;
            continue;
        }

        if (trim($text) === '') {
            echo "üres, kihagyva.\n";
            $skipped++;
            continue;
        }

        $normalized = normalizeText($text . ' ' . $title);

        $stmt = $pdo->prepare("
            INSERT INTO pages (path, title, content, normalized, indexed_at)
            VALUES (:path, :title, :content, :normalized, :indexed_at)
            ON CONFLICT(path) DO UPDATE SET
                title      = excluded.title,
                content    = excluded.content,
                normalized = excluded.normalized,
                indexed_at = excluded.indexed_at
        ");
        $stmt->execute([
            ':path'       => $relativePath,
            ':title'      => $title,
            ':content'    => $text,
            ':normalized' => $normalized,
            ':indexed_at' => date('Y-m-d H:i:s'),
        ]);

        echo "OK\n";
        $indexed++;
    }
}

echo "\nKész. Indexelve: $indexed | Kihagyva: $skipped\n";

// ===========================================================================
// Tartalom kinyerés
// ===========================================================================

function extractContent(string $path, string $ext): array
{
    return match($ext) {
        'html', 'htm', 'php' => extractHtml($path),
        'txt'                => extractTxt($path),
        'pdf'                => extractPdf($path),
        default              => ['', ''],
    };
}

function extractHtml(string $path): array
{
    $raw = file_get_contents($path);
    if ($raw === false) throw new Exception("Nem olvasható");

    $raw = toUtf8($raw);

    // PHP tagek és tartalmuk eltávolítása
    $raw = preg_replace('/<\?php.*?\?>/is', ' ', $raw);
    $raw = preg_replace('/<\?.*?\?>/is',    ' ', $raw);
    $raw = preg_replace('/<%.*?%>/is',     ' ', $raw);

    // Title
    $title = '';
    if (preg_match('/<title[^>]*>(.*?)<\/title>/is', $raw, $m)) {
        $title = trim(html_entity_decode(strip_tags($m[1]), ENT_QUOTES | ENT_HTML5, 'UTF-8'));
    }

    // Technikai blokkok eltávolítása
    $raw = preg_replace('/<script[^>]*>.*?<\/script>/is',   ' ', $raw);
    $raw = preg_replace('/<style[^>]*>.*?<\/style>/is',     ' ', $raw);
    $raw = preg_replace('/<noscript[^>]*>.*?<\/noscript>/is',' ', $raw);
    $raw = preg_replace('/<template[^>]*>.*?<\/template>/is',' ', $raw);
    $raw = preg_replace('/<!--.*?-->/s',                     ' ', $raw);
    $raw = preg_replace('/<svg[^>]*>.*?<\/svg>/is',         ' ', $raw);
    $raw = preg_replace('/<math[^>]*>.*?<\/math>/is',       ' ', $raw);

    $raw  = strip_tags($raw);
    $raw  = html_entity_decode($raw, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $text = normalizeWhitespace($raw);

    return [$title, $text];
}

function extractTxt(string $path): array
{
    $raw = file_get_contents($path);
    if ($raw === false) throw new Exception("Nem olvasható");
    return ['', normalizeWhitespace(toUtf8($raw))];
}

function extractPdf(string $path): array
{
    // pdftotext (poppler) ha elérhető
    $which = shell_exec('which pdftotext 2>/dev/null');
    if (trim((string)$which) !== '') {
        $text = shell_exec("pdftotext -enc UTF-8 " . escapeshellarg($path) . " -");
        if ($text !== null) {
            return ['', normalizeWhitespace(toUtf8($text))];
        }
    }

    // Fallback: bináris stream-ekből ASCII kinyerés
    $raw = file_get_contents($path);
    if ($raw === false) throw new Exception("Nem olvasható");

    preg_match_all('/stream(.*?)endstream/s', $raw, $streams);
    $text = '';
    foreach ($streams[1] as $stream) {
        $text .= ' ' . preg_replace('/[^\x20-\x7E\n\r\t]/', ' ', $stream);
    }

    return ['', normalizeWhitespace($text)];
}

// ===========================================================================
// Segédfüggvények
// ===========================================================================

function toUtf8(string $text): string
{
    if (mb_detect_encoding($text, 'UTF-8', true)) return $text;
    return @iconv('ISO-8859-2', 'UTF-8//IGNORE', $text) ?: $text;
}

function normalizeWhitespace(string $text): string
{
    $text = preg_replace('/[ \t]+/', ' ', $text);
    $text = preg_replace('/\n{3,}/', "\n\n", $text);
    return trim($text);
}

function normalizeText(string $text): string
{
    $text = mb_strtolower($text, 'UTF-8');
    static $map = [
        'á'=>'a','é'=>'e','í'=>'i','ó'=>'o','ö'=>'o','ő'=>'o','ú'=>'u','ü'=>'u','ű'=>'u',
        'Á'=>'a','É'=>'e','Í'=>'i','Ó'=>'o','Ö'=>'o','Ő'=>'o','Ú'=>'u','Ü'=>'u','Ű'=>'u',
        'à'=>'a','â'=>'a','ä'=>'a','ã'=>'a','è'=>'e','ê'=>'e','ë'=>'e',
        'î'=>'i','ï'=>'i','ô'=>'o','õ'=>'o','ù'=>'u','û'=>'u','ç'=>'c','ñ'=>'n',
    ];
    return strtr($text, $map);
}