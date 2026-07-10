<?php include '../includes/constants.php'; ?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */ ?>
<?php $pageTitle = 'Zeneiskola' . $pageTitlePostfix; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidenav.php'; ?>
<?php include '../includes/banner.php'; ?>
<?php include '../includes/menubar.php'; ?>

<style>
    .item {
        margin: 20px;
        display: block;
    }
</style>
<?php /*  ------------------ TARTALOM ELEJE ----------------------- */ ?>
<main id="page-content">
    <section id="sample-page">
        <h1>Zeneiskola</h1>

        <p>
            Iskolánk az <strong>Erkel Gyula Újpesti Zenei Alapfokú Művészeti Iskola </strong> képzési helyszíne, így tanulóink helyben,
            saját intézményük falain belül vehetnek részt zeneoktatásban.
        </p>
        <div class="highlight-box">
            A Zeneiskolát az alábbi módon érhetik el:
            <p>
                <span class="item">
                    <i class="ti ti-globe"> </i>
                    Internet:
                    <a href="https://ujpestizenede.hu/" target="_blank">ujpestizenede.hu</a>
                </span>

                <span class="item">
                    <i class="ti ti-phone"> </i>
                   Telefon: +36-1-369-4485
                </span>

                <span class="item">
                    <i class="ti ti-mail"> </i>
                    E-mail:
                    <a href="mailto:titkarsag.erkelgy@ebtk.hu">titkarsag.erkelgy@ebtk.hu</a>
                </span>
            </p>
        </div>

    </section>
</main>

<?php /*  ------------------ TARTALOM VÉGE ----------------------- */ ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>
