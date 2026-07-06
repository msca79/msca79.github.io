<?php $basePath = '../'; ?>
<?php include '../includes/constants.php'; ?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */ ?>
<?php $pageTitle = 'Elérhetőségek' . $pageTitlePostfix; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidenav.php'; ?>
<?php include '../includes/banner.php'; ?>
<?php include '../includes/menubar.php'; ?>

    <style>
        .kapcsolat-table {
            border-collapse: collapse;
            font-size: 0.92rem;
            width: 100%;
        }

        .kapcsolat-table th {
            background: #f0f0f0;
            padding: 0.5rem 0.9rem;
            text-align: left;
            border-bottom: 2px solid #ccc;
            font-weight: 600;
        }

        .kapcsolat-table td {
            padding: 0.45rem 0.9rem;
            border-bottom: 1px solid #e0e0e0;
            vertical-align: top;
        }

        .kapcsolat-table tr:last-child td {
            border-bottom: none;
        }

        .kapcsolat-table .szekció {
            background: #e8eaf6;
            font-weight: 600;
            color: #3949ab;
            padding: 0.4rem 0.9rem;
        }

        .kapcsolat-table .contact-item {
            display: block;
            margin-bottom: 0.2rem;
        }

        .kapcsolat-table .contact-item:last-child {
            margin-bottom: 0;
        }

        .kapcsolat-table td:nth-child(2) {
            font-weight: 600;
        }
    </style>

<?php /*  ------------------ TARTALOM ELEJE ----------------------- */ ?>
    <main id="page-content">
        <section id="sample-page">
            <h1>Elérhetőségek</h1>

            <table class="kapcsolat-table">

                <tbody>
                <tr>
                    <td colspan="3" class="szekció">Vezetőség</td>
                </tr>

                <tr>
                    <td>Megbízott igazgató</td>
                    <td>Ábriné Nagy Judit</td>
                    <td>
                        <span class="contact-item"><i class="ti ti-phone"></i>+36 1 380 7170 / 15. mellék</span>
                        <span class="contact-item">
                            <a href="mailto:igazgato.csokonaivm@ebtk.hu">
                                <i class="ti ti-mail"></i>
                                igazgato.csokonaivm@ebtk.hu</a>
                        </span>
                    </td>
                </tr>

                <tr>
                    <td>Igazgatóhelyettes – alsó tagozat</td>
                    <td>Tarné Éder Marianna</td>
                    <td><span class="contact-item"><i class="ti ti-phone"></i>+36 1 380 7170 / 16. mellék</span></td>
                </tr>
                <tr>
                    <td>Igazgatóhelyettes – felső tagozat</td>
                    <td>Tóth Árpádné</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Igazgatóhelyettes – gimnázium</td>
                    <td>Tatár Gabriella Katalin</td>
                    <td></td>
                </tr>

                <tr>
                    <td colspan="3" class="szekció">Ügyintézés</td>
                </tr>

                <tr>
                    <td>Tanulói ügyintézés</td>
                    <td>Béres Zsuzsanna</td>
                    <td>
                        <span class="contact-item"><i class="ti ti-phone"></i>+36 1 380 7170 / 15. mellék</span>
                        <span class="contact-item">
                            <a href="mailto:titkarsag.csokonaivm@ebtk.hu">
                                <i class="ti ti-mail"></i>
                                titkarsag.csokonaivm@ebtk.hu</a>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>Dolgozói ügyintézés</td>
                    <td>Landszmann Mónika</td>
                    <td>
                        <span class="contact-item"><i class="ti ti-phone"></i>+36 1 380 7170 / 13. mellék</span>
                        <span class="contact-item">
                            <i class="ti ti-mail"></i>
                            <a href="mailto:csvmg.gazdasagi.iroda@gmail.com"> csvmg.gazdasagi.iroda@gmail.com</a>
                        </span>
                        <span class="contact-item">
                            <i class="ti ti-mail"></i>
                            <a href="mailto:titkarsag.csokonaivm@ebtk.hu"> titkarsag.csokonaivm@ebtk.hu</a>
                        </span>
                    </td>
                </tr>

                <tr>
                    <td>Titkárság</td>
                    <td></td>
                    <td><span class="contact-item"><i class="ti ti-phone"></i>+36 1 380 7170 / 15. mellék</span></td>
                </tr>
                <tr>
                    <td>Gazdasági iroda</td>
                    <td></td>
                    <td><span class="contact-item"><i class="ti ti-phone"></i>+36 1 380 7170 / 13. mellék</span></td>
                </tr>
                <tr>
                    <td>Igazgatóhelyettesek</td>
                    <td></td>
                    <td><span class="contact-item"><i class="ti ti-phone"></i>+36 1 380 7170 / 16. mellék</span></td>
                </tr>
                <tr>
                    <td>Gondnok</td>
                    <td></td>
                    <td><span class="contact-item"><i class="ti ti-phone"></i>+36 1 380 7170 / 17. mellék</span></td>
                </tr>
                <tr>
                    <td>Porta</td>
                    <td></td>
                    <td><span class="contact-item"><i class="ti ti-phone"></i>+36 1 380 7170 / 11. mellék</span></td>
                </tr>

                <tr>
                    <td>Iskolai szociális segítő</td>
                    <td>Simon Szilvia</td>
                    <td>
                        <span class="contact-item"><i class="ti ti-phone"></i>+36 70 953 5330</span>
                        <span class="contact-item">
                            <a href="mailto: simon.szilvia.csgyk@ujpestszi.hu">
                                <i class="ti ti-mail"></i>
                                simon.szilvia.csgyk@ujpestszi.hu</a>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>Védőnő</td>
                    <td>Spóring Zsuzsanna</td>
                    <td><span class="contact-item">

                            <a href="mailto:csokonai.vedono@ujpestiszakrendelo.hu ">
                                <i class="ti ti-mail"></i>
                                csokonai.vedono@ujpestiszakrendelo.hu
                            </a>
                        </span>
                    </td>
                </tr>
                </tbody>
            </table>


            <div class="todo-floating-container">
                <div class="iskola">
                    Telefonszámok egységes formátuma mi legyen?
                </div>
            </div>

        </section>
    </main>


<?php /*  ------------------ TARTALOM VÉGE ----------------------- */ ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>