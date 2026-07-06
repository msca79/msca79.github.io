<?php $basePath = '../'; ?>
<?php include '../includes/constants.php'; ?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */  ?>
<?php $pageTitle = 'Felvett tanulók' . $pageTitlePostfix; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidenav.php'; ?>
<?php include '../includes/banner.php'; ?>
<?php include '../includes/menubar.php'; ?>


<?php /*  ------------------ TARTALOM ELEJE ----------------------- */  ?>
<main id="page-content">
    <section id="sample-page">

        <style>
            .class-container {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                justify-content: space-between;
                margin-top: 30px;
            }
            .class-column {
                flex: 1;
                min-width: 250px;
                background: #f9f9f9;
                border: 1px solid #ddd;
                border-radius: 8px;
                padding: 15px;
                box-shadow: 0 2px 4px rgba(0,0,0,0.05);
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

        <h1>Felvett tanulók</h1>

        <p><strong>Tisztelt Szülők!</strong></p>

        <div class="highlight-box">
            <p>
                Megtörtént az általános iskola 1. osztályaiba a felvétel és az osztályba sorolás.
                Erről itt tájékozódhatnak gyermekük oktatási azonosítója alapján.
                A felvételi határozatokat a leendő osztályfőnököktől fogják az első szülői értekezleten megkapni.
                Amelynek időpontja <strong> 2026.06.01.</strong>
            </p>
        </div>

        <div class="class-container">
            <!-- 1.a osztály -->
            <div class="class-column">
                <h3>1.a osztály</h3>
                <p class="teachers">Szirányi-Balogh Bernadett, Gedei-Hajas Borbála</p>
                <ul class="om-list">
                    <li>74125106516</li>
                    <li>74153052829</li>
                    <li>73928872700</li>
                    <li>74128463648</li>
                    <li>73957326180</li>
                    <li>73942111494</li>
                    <li>73798730483</li>
                    <li>74043708359</li>
                    <li>74126714883</li>
                    <li>73696521140</li>
                    <li>73694803097</li>
                    <li>73952841931</li>
                    <li>74132871263</li>
                    <li>73919961300</li>
                    <li>73944081868</li>
                    <li>73950896663</li>
                    <li>74023451866</li>
                    <li>73950812977</li>
                    <li>74116107247</li>
                    <li>73938545059</li>
                    <li>74148284214</li>
                    <li>74152938913</li>
                </ul>
            </div>

            <!-- 1.b osztály -->
            <div class="class-column">
                <h3>1.b osztály</h3>
                <p class="teachers">Egervári Nóra, Katona Andrásné, Tarné Éder Marianna</p>
                <ul class="om-list">
                    <li>73932601375</li>
                    <li>74137152870</li>
                    <li>73935720164</li>
                    <li>73754240069</li>
                    <li>73961504476</li>
                    <li>73926223580</li>
                    <li>73937167710</li>
                    <li>73943034308</li>
                    <li>73695535624</li>
                    <li>73958036532</li>
                    <li>73957667081</li>
                    <li>73950349586</li>
                    <li>74147160740</li>
                    <li>74141101484</li>
                    <li>73960228860</li>
                    <li>73951571036</li>
                    <li>73927196218</li>
                    <li>73932315795</li>
                    <li>73942092049</li>
                    <li>74128951878</li>
                </ul>
            </div>

            <!-- 1.c osztály -->
            <div class="class-column">
                <h3>1.c osztály</h3>
                <p class="teachers">Gyöngyösi Péter</p>
                <ul class="om-list">
                    <li>73943364161</li>
                    <li>73926841581</li>
                    <li>73942277150</li>
                    <li>74136667052</li>
                    <li>73961328350</li>
                    <li>73956770023</li>
                    <li>73927043148</li>
                    <li>73948176173</li>
                    <li>73932769223</li>
                    <li>74143840434</li>
                    <li>74127789904</li>
                    <li>73934539385</li>
                    <li>73933993073</li>
                    <li>74118736394</li>
                    <li>74152388289</li>
                    <li>73933348941</li>
                    <li>73936326287</li>
                    <li>73950538672</li>
                    <li>73950892109</li>
                    <li>73924731974</li>
                    <li>73696535585</li>
                    <li>74152049177</li>
                </ul>
            </div>
        </div>


        <div class="todo-floating-container">
            <div class="iskola">
                ez az aktuális?
            </div>
        </div>

    </section>
</main>

<?php /*  ------------------ TARTALOM VÉGE ----------------------- */  ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>
