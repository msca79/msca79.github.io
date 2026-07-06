<?php $basePath = '../'; ?>
<?php include '../includes/constants.php'; ?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */ ?>
<?php $pageTitle = 'Felvett tanulók' . $pageTitlePostfix; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidenav.php'; ?>
<?php include '../includes/banner.php'; ?>
<?php include '../includes/menubar.php'; ?>
<style>
    .class-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: space-between;
        margin-top: 30px;
    }

    .class-column {
        flex: 1 1 45%;
        min-width: 300px;
        background: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .class-column h3 {
        color: #2c3e50;
        border-bottom: 2px solid #e74c3c;
        padding-bottom: 10px;
        margin-top: 0;
        font-size: 1.2em;
    }

    .class-column .teachers {
        font-style: italic;
        font-size: 0.9em;
        color: #7f8c8d;
        margin-bottom: 15px;
        min-height: 40px;
    }

    .om-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .om-list li {
        padding: 5px 0;
        border-bottom: 1px solid #eee;
        font-family: monospace;
        font-size: 1.1em;
        text-align: center;
    }

    .om-list li:last-child {
        border-bottom: none;
    }

    @media (max-width: 768px) {
        .class-column {
            flex: 1 1 100%;
        }
    }
</style>

<?php /*  ------------------ TARTALOM ELEJE ----------------------- */ ?>
<main id="page-content">
    <section id="sample-page">
        <h1>Felvett tanulók</h1>

        <div class="highlight-box">

            Minden felvételt nyert diáknak szívből gratulálunk - üdvözlünk a Csokonaiban!
        </div>

        <p>
            Szeretettel várjuk a szülőket <strong> 2026. május 18-án 17 órára szülői értekezletre</strong>,
            illetve <strong> 2026. június 25-én 8.00 és 16.00 óra</strong> között a <strong>beiratkozásra</strong>.
        </p>

        <div class="class-container">

            <div class="class-column">
                <h3>0001 HUMÁN tagozat </h3>
                <p class="teachers">Oktatási azonosító/JELIGE</p>
                <ul class="om-list">
                    <li>72937366098</li>
                    <li>72993618018</li>
                    <li>72994475949</li>
                    <li>72999205614</li>
                    <li>73024737507</li>
                    <li>73024773693</li>
                    <li>73035075437</li>
                    <li>73040100951</li>
                    <li>73040364127</li>
                    <li>73045039935</li>
                    <li>73079378895</li>
                    <li>73083597510</li>
                    <li>73088661178</li>
                    <li>73091111439</li>
                    <li>73095590290</li>
                    <li>73100495261</li>
                    <li>73257641694</li>
                </ul>
            </div>


            <div class="class-column">
                <h3>0002 KADÉT tagozat </h3>
                <p class="teachers">Oktatási azonosító/JELIGE</p>
                <ul class="om-list">
                    <li>72960352402</li>
                    <li>72995826314</li>
                    <li>73010829886</li>
                    <li>73015741369</li>
                    <li>73018091974</li>
                    <li>73024275574</li>
                    <li>eper</li>
                    <li>73047367828</li>
                    <li>73053572172</li>
                    <li>73089641035</li>
                    <li>Katica</li>
                    <li>73093516418</li>
                    <li>73101834638</li>
                    <li>73134370631</li>
                </ul>
            </div>

            <div class="class-column">
                <h3>0003 FRANCIA tagozat</h3>
                <p class="teachers">Oktatási azonosító/JELIGE</p>
                <ul class="om-list">
                    <li>72908009580</li>
                    <li>72976330649</li>
                    <li>Kreatura1002</li>
                    <li>72994494541</li>
                    <li>73009357559</li>
                    <li>73014193546</li>
                    <li>blib123</li>
                    <li>73081393899</li>
                    <li>73030033229</li>
                    <li>73047390737</li>
                    <li>73060411888</li>
                    <li>73087983201</li>
                    <li>73092065887</li>
                    <li>73102241385</li>
                    <li>73105152618</li>
                    <li>73134191363</li>
                    <li>73288317348</li>
                </ul>
            </div>

            <div class="class-column">
                <h3>0004 NÉMET tagozat</h3>
                <p class="teachers">Oktatási azonosító/JELIGE</p>
                <ul class="om-list">
                    <li>73009577015</li>
                    <li>73011869714</li>
                    <li>CHILI2011</li>
                    <li>73020288995</li>
                    <li>73034707350</li>
                    <li>73045151363</li>
                    <li>73047134049</li>
                    <li>73053567655</li>
                    <li>IAH2012</li>
                    <li>Pucuj</li>
                    <li>73088061827</li>
                    <li>73092835451</li>
                    <li>73093870348</li>
                    <li>XENO</li>
                    <li>73109564762</li>
                    <li>73131964689</li>
                    <li>73146637144</li>
                </ul>
            </div>

        </div>


    </section>
</main>

<?php /*  ------------------ TARTALOM VÉGE ----------------------- */ ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>
