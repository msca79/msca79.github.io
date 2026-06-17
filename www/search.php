<?php
/**
 * search.php
 * on-the-fly kereső
 * formátuma: search.php?q=
 */

$query = trim($_GET['q'] ?? '');
$results = [];

if ($query !== '') {
    // Rekurzív bejárás az almappákban is
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator(__DIR__, RecursiveDirectoryIterator::SKIP_DOTS)
    );

    $files = [];
    foreach ($iterator as $fileInfo) {
        if ($fileInfo->isFile() && strtolower($fileInfo->getExtension()) === 'html') {
            $files[] = $fileInfo->getPathname();
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

            // Projekt gyökeréhez képesti relatív útvonal a kattintható linkhez
            $relativePath = ltrim(str_replace('\\', '/', substr($file, strlen(__DIR__))), '/');

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