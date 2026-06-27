<?php $basePath = '../'; ?>
<?php include '../includes/constants.php'; ?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */ ?>
<?php $pageTitle = 'Könyvtár' . $pageTitlePostfix; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidenav.php'; ?>
<?php include '../includes/banner.php'; ?>
<?php include '../includes/menubar.php'; ?>

<?php /*  ------------------ TARTALOM ELEJE ----------------------- */ ?>
<main id="page-content">
    <section id="sample-page">
        <h1>Könyvtár</h1>


        <div class="todo-floating-container">
            <div class="iskola">
                szabályok tömören, mettől-meddig kölcsönözhet, nyitvatartás, tartozás esetén
            </div>
            <div class="iskola">
                ha megvan a teljes állomány pdf-ben, akkor az is letölthető
            </div>
            <div class="iskola">
                ha összeköthető a könyvtárkezelővel megnézhetik a saját kölcsönzéseiket (ez azért sok idő lefejleszteni)
            </div>
        </div>


    </section>
</main>

<?php /*  ------------------ TARTALOM VÉGE ----------------------- */ ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>
