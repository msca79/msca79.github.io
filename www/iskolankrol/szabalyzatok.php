<?php $basePath = '../'; ?>
<?php include '../includes/constants.php'; ?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */ ?>
<?php $pageTitle = 'Közzétételi lista' . $pageTitlePostfix; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidenav.php'; ?>
<?php include '../includes/banner.php'; ?>
<?php include '../includes/menubar.php'; ?>


<?php /*  ------------------ TARTALOM ELEJE ----------------------- */ ?>
<main id="page-content">
    <section id="sample-page">
        <h1>Közzétételi lista</h1>

        <div class="disclosure-list">


            <a href="#" target="_blank" >
                <i class="ti ti-gavel"></i> Helyi értékelési szabályzat (??)
            </a>

            <a href="#" target="_blank" >
                <i class="ti ti-coin"></i> Könyvtári szabályzat (??)
            </a>
        </div>

        <hr>

        <div class="todo-floating-container">
            <div class="iskola">
                a könyvtári szabályzat mehetne a könyvtár alá is. ?
            </div>
            <div class="iskola">
                Mik kellenek ide?
            </div>
        </div>


    </section>
</main>

<?php /*  ------------------ TARTALOM VÉGE ----------------------- */ ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>
