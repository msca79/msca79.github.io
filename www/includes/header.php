<!DOCTYPE html>
<html lang="hu" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $pageTitle ?? 'Újpesti Csokonai Vitéz Mihály Általános Iskola és Gimnázium' ?></title>

    <!-- max 160 karakter -->
    <meta name="description" content="<?= htmlspecialchars(
            isset($pageDescription)
                    ? $pageDescription . ' – Újpesti Csokonai Vitéz Mihály Általános Iskola és Gimnázium hivatalos weboldala.'
                    : 'Az Újpesti Csokonai Vitéz Mihály Általános Iskola és Gimnázium hivatalos weboldala.'
    ) ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Source+Sans+3:wght@300;400;600;700&display=block" rel="stylesheet">

    <link rel="preload" href="<?= $basePath ?? '' ?>/style.css?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'] . '/style.css') ?>" as="style">
    <link rel="preload" href="<?= $basePath ?? '' ?>/menu.js?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'] . '/menu.js') ?>" as="script">
    <link rel="preload" href="<?= $basePath ?? '' ?>/vendor/tabler-icons.min.css" as="style">
    <link rel="preload" href="<?= $basePath ?? '' ?>/images/logo.png" as="image">
    <link rel="preload" href="<?= $basePath ?? '' ?>/vendor/tabler-icons.woff2" as="font" type="font/woff2" crossorigin>

    <link rel="preload" href="<?= $basePath ?? '' ?>/images/logo.png" as="image">
    <link rel="preload" href="<?= $basePath ?? '' ?>/images/banner5.jpg" as="image">
    <link rel="preload" href="<?= $basePath ?? '' ?>/images/logok/bethlen-gabor-alapkezelo.jpg" as="image">
    <link rel="preload" href="<?= $basePath ?? '' ?>/images/logok/codeweek.png" as="image">
    <link rel="preload" href="<?= $basePath ?? '' ?>/images/logok/digitalis_temahet.png" as="image">
    <link rel="preload" href="<?= $basePath ?? '' ?>/images/logok/elte.jpg" as="image">
    <link rel="preload" href="<?= $basePath ?? '' ?>/images/logok/erasmus.png" as="image">
    <link rel="preload" href="<?= $basePath ?? '' ?>/images/logok/hatartalanul.png" as="image">
    <link rel="preload" href="<?= $basePath ?? '' ?>/images/logok/magyar-kormany.png" as="image">
    <link rel="preload" href="<?= $basePath ?? '' ?>/images/logok/microsoft-innovativ.jpg" as="image">
    <link rel="preload" href="<?= $basePath ?? '' ?>/images/logok/nemzeti-orokseg.jpg" as="image">
    <link rel="preload" href="<?= $basePath ?? '' ?>/images/logok/orokos-okoiskola.jpg" as="image">
    <link rel="preload" href="<?= $basePath ?? '' ?>/images/logok/prosuli.png" as="image">
    <link rel="preload" href="<?= $basePath ?? '' ?>/images/logok/ute.jpg" as="image">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css">
    <link rel="stylesheet" href="<?= $basePath ?? '' ?>/style.css?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'] . $basePath ?? '' .'/style.css') ?>">

    <script>window.BASE_PATH = '<?= $basePath ?? '' ?>';</script>
    <script src="<?= $basePath ?? '' ?>/menu.js?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'] . $basePath ?? '' . '/menu.js') ?>" defer></script>

    <style>
        body {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        body.fonts-loaded {
            opacity: 1;
        }

        /* Ha nincs JS támogatás vagy nyomtatás van, akkor is látszódjon az oldal */
        @media print {
            body { opacity: 1 !important; }
        }
        .no-js body { opacity: 1 !important; }
    </style>

    <script>
        (function() {
            // Megjelöljük, hogy van JS
            document.documentElement.classList.remove('no-js');
            
            // Ha 2 másodpercen belül nem tölt be a font, akkor is mutassuk meg az oldalt
            const timeout = setTimeout(() => {
                document.body.classList.add('fonts-loaded');
            }, 2000);

            if ('fonts' in document) {
                document.fonts.ready.then(() => {
                    clearTimeout(timeout);
                    document.body.classList.add('fonts-loaded');
                });
            } else {
                // Régebbi böngészők esetén
                document.body.classList.add('fonts-loaded');
            }
        })();
    </script>


</head>

<body>

<!--<div id="preloader">-->
<!--    <img src="--><?php //= $basePath ?? '' ?><!--/images/logo.png" alt="Betöltés..." width="300">-->
<!--</div>-->
