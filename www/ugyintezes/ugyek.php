<?php $basePath = '../'; ?>
<?php include '../includes/constants.php'; ?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */ ?>
<?php $pageTitle = 'További ügyek' . $pageTitlePostfix; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidenav.php'; ?>
<?php include '../includes/banner.php'; ?>
<?php include '../includes/menubar.php'; ?>

<?php /*  ------------------ TARTALOM ELEJE ----------------------- */ ?>
    <main id="page-content">
        <section id="sample-page">
            <h1>További ügyek</h1>

            <div class="disclosure-list">
                <a href="#">
                    Diákigazolvány
                </a>

                <a href="#">
                    Bizonyítvány másolat kérése
                </a>

                <a href="https://www.csvmg.hu/upload/file/felmentesi_kerelem_2025_2026.docx">
                    Felmentési kérelem 16 óra előtt megszervezett egyéb foglalkozás alól
                </a>

                <a href="https://www.csvmg.hu/upload/file/K%C3%A9relem%20k%C3%A9t%20testnevel%C3%A9s%20%C3%B3ra%20al%C3%B3li%20felment%C3%A9sre.docx">
                    Kérelem két testnevelés óra alóli felmentéshez
                </a>

                <!-- TODO: külső link -->
                <a href="https://www.oktatas.hu/kozneveles/egyeni_tanuloi_munkarend/gyik">
                    Egyéni tanrend igénylése
                </a>

            </div>


            <div class="todo-floating-container">
                <div class="iskola">
                   diák és bizonyítvány ügyek vannak? vannak olyanok amik nincsennek?
                    Van általános ügyintézi infó? pl keresse a gazdasági irodát.
                </div>
            </div>

        </section>
    </main>


<?php /*  ------------------ TARTALOM VÉGE ----------------------- */ ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>