<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Újpesti Csokonai Vitéz Mihály Általános Iskola és Gimnázium' ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Source+Sans+3:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@3.19.0/dist/tabler-icons.min.css">
    <link rel="stylesheet" href="<?= $basePath ?? '' ?>style.css">
    <script>window.BASE_PATH = '<?= $basePath ?? '' ?>';</script>
    <script src="<?= $basePath ?? '' ?>menu.js"></script>
</head>
<body class="<?= $bodyClass ?? '' ?>">
