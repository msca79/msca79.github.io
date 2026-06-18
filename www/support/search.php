<?php
/**
 * search.php
 * on-the-fly kereső
 * formátuma: search.php?q=
 */

$query = trim($_GET['q'] ?? '');
$results = [];

if ($query !== '') {
    $projectRoot = dirname(__DIR__); // www mappa
    $searchDirs = [
        $projectRoot . DIRECTORY_SEPARATOR . 'altalanos',
        $projectRoot . DIRECTORY_SEPARATOR . 'elet',
        $projectRoot . DIRECTORY_SEPARATOR . 'files',
        $projectRoot . DIRECTORY_SEPARATOR . 'gimnazium',
        $projectRoot . DIRECTORY_SEPARATOR . 'iskolankrol',
        $projectRoot . DIRECTORY_SEPARATOR . 'tamogato',
        $projectRoot . DIRECTORY_SEPARATOR . 'ugyintezes',
    ];

    $files = [];
    foreach ($searchDirs as $dir) {
        if (!is_dir($dir)) continue;

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS)
        );

        foreach ($iterator as $fileInfo) {
            $ext = strtolower($fileInfo->getExtension());
            if ($fileInfo->isFile() && ($ext === 'html' || $ext === 'php')) {
                // Ne keressük önmagunkat vagy a support mappát, ha benne lenne (bár nincs a listában)
                $files[] = $fileInfo->getPathname();
            }
        }
    }

    foreach ($files as $file) {
        $html = file_get_contents($file);
        $text = strip_tags($html);

        if (mb_stripos($text, $query) !== false) {
            // Cím kinyerése
            preg_match('/<title>(.*?)<\/title>/is', $html, $titleMatch);
            $title = $titleMatch[1] ?? basename($file);

            // Kontextus (találat körüli ~150 karakter)
            $pos = mb_stripos($text, $query);
            $start = max(0, $pos - 75);
            $snippet = mb_substr($text, $start, 150);
            $snippet = preg_replace('/\s+/', ' ', $snippet); // whitespace tisztítás

            // Projekt gyökeréhez (www) képesti relatív útvonal a kattintható linkhez
            $relativePath = ltrim(str_replace('\\', '/', substr($file, strlen($projectRoot))), '/');

            $results[] = [
                'file'    => $relativePath,
                'title'   => htmlspecialchars($title),
                'snippet' => htmlspecialchars($snippet),
            ];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Keresés</title>
</head>
<body>
    <form method="get">
        <input type="search" name="q" value="<?= htmlspecialchars($query) ?>" placeholder="Keresés...">
        <button type="submit">Keres</button>
    </form>

    <?php if ($query !== ''): ?>
        <p><?= count($results) ?> találat erre: <strong><?= htmlspecialchars($query) ?></strong></p>
        <?php foreach ($results as $r): ?>
            <div>
                <a href="<?= htmlspecialchars($r['file']) ?>" target="_blank">
                    <strong><?= $r['title'] ?></strong>
                </a>
                <div><small><?= htmlspecialchars($r['file']) ?></small></div>
                <p>...<?= $r['snippet'] ?>...</p>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>