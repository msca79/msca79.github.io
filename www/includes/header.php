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

    <link rel="preload" href="<?= $basePath ?? '' ?>style.css" as="style">
    <link rel="preload" href="<?= $basePath ?? '' ?>menu.js" as="script">
    <link rel="preload" href="<?= $basePath ?? '' ?>/vendor/tabler-icons.min.css" as="style">
    <link rel="preload" href="<?= $basePath ?? '' ?>/images/logo.png" as="image">
    <link rel="preload" href="<?= $basePath ?? '' ?>/vendor/tabler-icons.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?= $basePath ?? '' ?>/vendor/merriweather-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?= $basePath ?? '' ?>/vendor/merriweather-700.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?= $basePath ?? '' ?>/vendor/source-sans-3-300.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?= $basePath ?? '' ?>/vendor/source-sans-3-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?= $basePath ?? '' ?>/vendor/source-sans-3-600.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?= $basePath ?? '' ?>/vendor/source-sans-3-700.woff2" as="font" type="font/woff2" crossorigin>

    <link rel="preload" href="<?= $basePath ?? '' ?>/images/logo.png" as="image">
    <link rel="preload" href="<?= $basePath ?? '' ?>/images/banner.png" as="image">
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

    <link rel="stylesheet" href="<?= $basePath ?? '' ?>/vendor/tabler-icons.min.css">
    <link rel="stylesheet" href="<?= $basePath ?? '' ?>style.css">

    <script>window.BASE_PATH = '<?= $basePath ?? '' ?>';</script>
    <script src="<?= $basePath ?? '' ?>menu.js" defer></script>

    <style>
        /*body {*/
        /*    opacity: 0;*/
        /*    transition: opacity 0.3s ease;*/
        /*}*/

        /*body.fonts-loaded {*/
        /*    opacity: 1;*/
        /*}*/
        /*#preloader {*/
        /*    position: fixed;*/
        /*    inset: 0;*/
        /*    background: #fff;*/
        /*    display: flex;*/
        /*    align-items: center;*/
        /*    justify-content: center;*/
        /*    z-index: 9999;*/
        /*}*/

    </style>

    <script>
        // document.fonts.ready.then(() => {
        //     document.body.classList.add('fonts-loaded');
        //     document.getElementById('preloader')?.remove();
        // });
    </script>


</head>

<body>

<!--<div id="preloader">-->
<!--    <img src="--><?php //= $basePath ?? '' ?><!--/images/logo.png" alt="Betöltés..." width="300">-->
<!--</div>-->
