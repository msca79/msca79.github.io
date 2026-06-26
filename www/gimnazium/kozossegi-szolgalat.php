<?php $basePath = '../'; ?>
<?php include '../includes/constants.php'; ?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */  ?>
<?php $pageTitle = 'Közösségi szolgálat' . $pageTitlePostfix; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidenav.php'; ?>
<?php include '../includes/banner.php'; ?>
<?php include '../includes/menubar.php'; ?>

<?php /*  ------------------ TARTALOM ELEJE ----------------------- */  ?>
<main id="page-content">
    <section id="sample-page">
        <h1>Közösségi szolgálat</h1>

        <p style="text-align: center;">
            <a href="https://www.csvmg.hu/upload/file/k%C3%B6zszolg%C3%A1lat_lista.xlsx"
               class="btn-large-animated" target="_blank">Partnerek közösségi szolgálathoz</a>
        </p>

        <div class="todo-floating-container">
            <div class="iskola">
                Ez lenne? Excel helyett lehetne az oldalon egy táblázat.
            </div>
            <div class="iskola">
                egyéb anyag?
            </div>
        </div>

    </section>
</main>

<?php /*  ------------------ TARTALOM VÉGE ----------------------- */  ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>
