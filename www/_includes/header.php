<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? 'Csokonai Gimnázium') ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDesc ?? 'Újpesti Csokonai Vitéz Mihály Általános Iskola és Gimnázium hivatalos weboldala.') ?>">
    <link rel="stylesheet" href="/global.css">
</head>
<body>

<header class="toolbar">
    <div class="toolbar__logo">
        <a href="/"><img src="/img/logo.png" alt="Csokonai Gimnázium"></a>
    </div>
    <nav class="toolbar__nav">
        <a href="/"           class="<?= $activePage === 'fooldal'   ? 'active' : '' ?>">Főoldal</a>
        <a href="/tortenet"   class="<?= $activePage === 'tortenet'  ? 'active' : '' ?>">Történet</a>
        <a href="/kapcsolat"  class="<?= $activePage === 'kapcsolat' ? 'active' : '' ?>">Kapcsolat</a>
    </nav>
    <div class="toolbar__search">
        <input type="search" id="searchInput" placeholder="Keresés...">
    </div>
</header>

<main class="page-content">