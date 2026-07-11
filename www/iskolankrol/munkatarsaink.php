<?php include '../includes/constants.php'; ?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */ ?>
<?php $pageTitle = 'Tanáraink' . $pageTitlePostfix; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidenav.php'; ?>
<?php include '../includes/banner.php'; ?>
<?php include '../includes/menubar.php'; ?>

<style>
    .teachers-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 20px;
        margin: 30px 0;
    }

    .teachers-grid > div {
        background: #fcfcfc;
        border: 1px solid #eee;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
        font-weight: 600;
        font-size: 15px;
        color: var(--blue-800);
        line-height: 1.3;
    }

    .teachers-grid > div:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        border-color: var(--blue-200);
        background: white;
    }

    @media (max-width: 480px) {
        .teachers-grid {
            grid-template-columns: 1fr;
        }
    }

</style>
<?php /*  ------------------ TARTALOM ELEJE ----------------------- */ ?>
<main id="page-content">
    <section id="sample-page">

        <h2>Tanáraink</h2>
        <div class="teachers-grid">
            <div>Ambrus-Konba Antonietta Dalma</div>
            <div>Ábriné Nagy Judit</div>
            <div>Báthory Krisztina</div>
            <div>Benedekné Schmidt Judit</div>
            <div>Badakné Bohó Tímea Júlia</div>
            <div>Bodis Réka</div>
            <div>Borbély Edit Júlia</div>
            <div>Csapó Pál</div>
            <div>Csimár Gyöngyi</div>
            <div>Csordás László</div>
            <div>Domokos Zsuzsánna</div>
            <div>Egervári Nóra</div>
            <div>Engelhardt Zsuzsa Krisztina</div>
            <div>Fazekasné Fally Mária Ildikó</div>
            <div>Fürstinger Ottó</div>
            <div>Gedei-Hajas Borbála</div>
            <div>Grósz Sylvia Petra</div>
            <div>Gruden Dezső</div>
            <div>Gyimóthyné Molnár Erika Sarolta</div>
            <div>Gyöngyösi Péter</div>
            <div>György Zsuzsanna</div>
            <div>Hegyi Károlyné</div>
            <div>Jakubisz Gábor</div>
            <div>Katona Andrásné</div>
            <div>Kéringer Edit</div>
            <div>Kiss László</div>
            <div>Kiss Tímea</div>
            <div>Koltai-Molnár Judit</div>
            <div>Kondorosi Edit</div>
            <div>Kovács Petra</div>
            <div>Kuruczné Hudák Judit</div>
            <div>Kutas József</div>
            <div>Láng Lelle Johanna</div>
            <div>Lángné Szemcsák Nóra</div>
            <div>Majoros József Attila</div>
            <div>Miklovicz Ildikó</div>
            <div>Molnár-Krajnyák Emese Réka</div>
            <div>Palotainé Nagy Veronika</div>
            <div>Papp György</div>
            <div>Papp-Radnai Barbara</div>
            <div>Pálvölgyi Ágnes</div>
            <div>Proszt István</div>
            <div>Pulay Nikolett</div>
            <div>Rényi Krisztina</div>
            <div>Rózsa Andrea</div>
            <div>Salamonné Simonffy Zita</div>
            <div>Sauer Anikó</div>
            <div>Sándor Zsolt</div>
            <div>Sebestyén Borbála</div>
            <div>Sebestyén Máté</div>
            <div>Siklósi Evelin</div>
            <div>Simon Valéria</div>
            <div>Szabó Gáborné</div>
            <div>Szabó János</div>
            <div>Szabó Katalin</div>
            <div>Szabó Kiara</div>
            <div>Szendrői Andrea</div>
            <div>Sziklai Marianna</div>
            <div>Szirányi-Balogh Bernadett</div>
            <div>Szűrös-Szikora Szilvia</div>
            <div>Tabányi Luca</div>
            <div>Tarné Éder Marianna Rózsa</div>
            <div>Tatár Gabriella Katalin</div>
            <div>Tessedikné Papp Andrea Nóra</div>
            <div>Tóth Árpád Zoltánné</div>
            <div>Varga Csilla</div>
            <div>Varga Judit Mária</div>
            <div>Vasvári László</div>
            <div>Vidákovics Gyöngyi</div>
            <div>Vindics Péterné</div>
            <div>Zara Viktória</div>
        </div>

        <h2>NOKS</h2>
        <div class="teachers-grid">
            <div>Béres Zsuzsanna</div>
            <div>Korcsmárosné Nyiri Helga</div>
            <div>Kordás Csaba</div>
            <div>Landszman Mónika</div>
            <div>Tessyné Balog Emese</div>
        </div>

        <h2>Technikai </h2>
        <div class="teachers-grid">
            <div>Bakos Menyhért</div>
            <div>Barna Györgyné</div>
            <div>Bánhidi István</div>
            <div>Bányai Júlia</div>
            <div>Bernát-Holló Eszter</div>
            <div>Fizil Szilvia</div>
            <div>Lugosi Judit</div>
            <div>Mihályfi Gyula Zoltán</div>
            <div>Snóbli Krisztina</div>
            <div>Sztrecska Mónika Gabriella</div>
            <div>Tomkó József</div>

        </div>

        <h2>Óraadók</h2>
        <div class="teachers-grid">
            <div>Balogh Zsolt</div>
            <div>Oroszi-Vigh Ágnes Csilla</div>

        </div>

    </section>
</main>

<?php /*  ------------------ TARTALOM VÉGE ----------------------- */ ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>
