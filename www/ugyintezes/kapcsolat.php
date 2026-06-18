<?php $basePath = '../'; ?>
<?php include '../includes/constants.php'; ?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */  ?>
<?php $pageTitle = 'Kapcsolat' . $pageTitlePostfix; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidenav.php'; ?>
<?php include '../includes/banner.php'; ?>
<?php include '../includes/menubar.php'; ?>

<?php /*  ------------------ TARTALOM ELEJE ----------------------- */  ?>
<main id="page-content">
    <section id="sample-page">
        <h1>Kapcsolat</h1>
        <p><strong>Újpesti Csokonai Vitéz Mihály Általános Iskola és Gimnázium</strong></p>
        <div class="highlight-box">
            <p><strong>Cím:</strong> 1048 Budapest, Bőrfestő utca 5-9.</p>
            <p><strong>Telefon:</strong> +36 1 380 7170</p>
            <p><strong>Email:</strong> titkarsag@csokonai-ujpest.hu</p>
            <p><strong>OM-azonosító:</strong> 034877</p>
        </div>

        <div id="terkep" class="cal-iframe-wrap">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2691.801646698668!2d19.112185276856037!3d47.57161679042576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741db457493774f%3A0x7d60920d39e80e!2zQm9kcG9saSwgQsWRcmZlc3TFkSB1LiA1LTksIDEwNDggSHVuZ2FyeQ!5e0!3m2!1sen!2shu!4v1718638000000!5m2!1sen!2shu"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </section>
</main>


<?php /*  ------------------ TARTALOM VÉGE ----------------------- */  ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>