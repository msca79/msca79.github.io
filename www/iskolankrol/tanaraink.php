<?php $basePath = '../'; ?>
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

    .teacher-card {
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
    }

    .teacher-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        border-color: var(--blue-200);
        background: white;
    }

    .teacher-avatar {
        width: 60px;
        height: 60px;
        background: var(--blue-50);
        color: var(--blue-500);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        border: 2px solid var(--blue-100);
    }

    .teacher-name {
        font-weight: 600;
        font-size: 15px;
        color: var(--blue-800);
        line-height: 1.3;
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
            <?php
            $teachers = [
                'Ábriné Nagy Judit',
                'Ambrus-Konba Antonietta Dalma',
                'Badakné Bohó Tímea',
                'Balogh Zsolt',
                'Báthory Krisztina',
                'Benedekné Schmidt Judit',
                'Bodis Réka',
                'Borbély Edit',
                'Chován Evelin',
                'Csapó Pál',
                'Csimár Gyöngyi',
                'Csordás László',
                'Domokos Zsuzsánna',
                'Egervári Nóra',
                'Engelhardt Zsuzsanna',
                'Fazekasné Fally Mária',
                'Fürstinger Ottó',
                'Galiné Szabó Katalin',
                'Gedei-Hajas Borbála',
                'Gruden Dezső',
                'Gyöngyösi Péter',
                'György Zsuzsanna',
                'Hegyi Károlyné',
                'Jakubisz Gábor',
                'Juhász Tímea',
                'Katona Andrásné',
                'Kéringer Edit',
                'Kiss Dóra',
                'Kiss László',
                'Kiss Tímea',
                'Koltai-Molnár Judit',
                'Kondorosi Edit',
                'Korcsmárosné Nyíri Helga',
                'Kovács Petra',
                'Kuruczné Hudák Judit',
                'Kutas József',
                'Láng Lelle Johanna',
                'Lángné Szemcsák Nóra',
                'Majoros József',
                'Miklovicz Ildikó',
                'Molnár-Krajnyák Emese',
                'Palotainé Nagy Veronika',
                'Pálvölgyi Ágnes',
                'Papp-Radnai Barbara',
                'Proszt István',
                'Pulay Nikolett',
                'Rényi Krisztina',
                'Rózsa Andrea',
                'Salamonné Simonffy Zita',
                'Sándor Zsolt',
                'Sauer Anikó',
                'Sebestyén Borbála',
                'Sebestyén Máté',
                'Siklósi Evelin',
                'Simon Valéria',
                'Szabó Gáborné',
                'Szabó János',
                'Szabó Kiara',
                'Szendrői Andrea',
                'Sziklai Marianna',
                'Szirányi - Balogh Bernadett',
                'Szűrös-Szikora Szilvia',
                'Tabányi Luca',
                'Tarné Éder Marianna',
                'Tatár Gabriella Katalin',
                'Tessedikné Papp Andrea',
                'Tessyné Balogh Emese',
                'Tóth Árpádné',
                'Varga Csilla',
                'Vasvári László',
                'Vidákovics Gyöngyi',
                'Vindics Péterné',
                'Zara Viktória'
            ];

            $icons = ['ti-user', 'ti-school', 'ti-book', 'ti-pencil', 'ti-notebook', 'ti-mood-smile'];

            foreach ($teachers as $index => $teacher) {
                $icon = $icons[$index % count($icons)];
                echo '
                <div class="teacher-card">
                    <div class="teacher-name">' . $teacher . '</div>
                </div>';
            }
            ?>
        </div>


        <div class="todo-floating-container">
            <div class="iskola">
                egyéb munkatársak, és portás, más segítő személyek is felkerülhetnének
            </div>
            <div class="iskola">
                felkerülhet, hogy ő milyen tanár? vagy mi a feladata az iskolában?
            </div>
        </div>


    </section>
</main>

<?php /*  ------------------ TARTALOM VÉGE ----------------------- */ ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>
