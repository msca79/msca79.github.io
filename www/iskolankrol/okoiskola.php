<?php $basePath = '../'; ?>
<?php include '../includes/constants.php'; ?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */ ?>
<?php $pageTitle = 'Ökoiskola' . $pageTitlePostfix; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidenav.php'; ?>
<?php include '../includes/banner.php'; ?>
<?php include '../includes/menubar.php'; ?>



<style>
    #sample-page img {
        display: block;
        margin: 0 auto;
    }
</style>

<?php /*  ------------------ TARTALOM ELEJE ----------------------- */ ?>
<main id="page-content">
    <section id="sample-page">

        <h1>Ökoiskola</h1>

        <div class="disclosure-list">
            <a href="https://csvmg.hu/upload/file/%C3%96r%C3%B6k%C3%B6s%20%C3%96koiskola.pdf" target="_blank">
                Oklevél </a>
            <a href="http://csvmg.hu/upload/file/%C3%96ko%20munkaterv%202021-22.pdf" target="_blank">
                Munkaterv 2021-22 </a>
        </div>
        
        <img src="<?= $basePath ?? '' ?>iskolankrol/okoiskola.png" alt="Ökoiskola Image">

        <div class="todo-floating-container">
            <div class="iskola">
                kötelező-e feltölteni munkatervet? 2022-es a legfrissebb.
            </div>
            <div class="iskola">
                ezekből anyag: Környezeti nevelés,Kert,Használt olaj,Papírgyűjtés, Energiatakarékosság
            </div>
        </div>

    </section>
</main>

<?php /*  ------------------ TARTALOM VÉGE ----------------------- */ ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>
