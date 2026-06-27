<?php $basePath = '../'; ?>
<?php include '../includes/constants.php'; ?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */ ?>
<?php $pageTitle = 'Kréta ügyintézés' . $pageTitlePostfix; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidenav.php'; ?>
<?php include '../includes/banner.php'; ?>
<?php include '../includes/menubar.php'; ?>

<?php /*  ------------------ TARTALOM ELEJE ----------------------- */ ?>
    <main id="page-content">
        <section id="sample-page">
            <h1>Kréta ügyintézés</h1>

            <p>
                Ezen az űrlapon van lehetősége a Kréta rendszer használatához új jelszót igényelni.
                Fontos, hogy az email címet helyesen adja meg, mely csak az igénylő beregisztrált email címe lehet!
            </p>

            <form action="" method="POST" class="standard-form">
                <div class="form-group">
                    <label for="email">Email cím</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="gondviselo_neve">Űrlapot kitöltő gondviselő neve</label>
                    <input type="text" id="gondviselo_neve" name="gondviselo_neve" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="gyermek_neve">Gyermek neve</label>
                    <input type="text" id="gyermek_neve" name="gyermek_neve" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="gyermek_osztalya">Gyermek osztálya</label>
                    <input type="text" id="gyermek_osztalya" name="gyermek_osztalya" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Belépés típusa</label>
                    <label class="form-check">
                        <input type="radio" name="belepes_tipusa" value="tanulo" required>
                        <span>Tanulói belépés igénylése</span>
                    </label>
                    <label class="form-check">
                        <input type="radio" name="belepes_tipusa" value="gondviselo">
                        <span>Gondviselői belépés igénylése</span>
                    </label>
                </div>

                <div class="form-group">
                    <label for="megjegyzes">Megjegyzés (nem kötelező)</label>
                    <textarea id="megjegyzes" name="megjegyzes" class="form-control" rows="4"></textarea>
                </div>

                <button type="submit" class="btn-primary">Igénylés beküldése</button>
            </form>


            <div class="todo-floating-container">
                <div class="keszito">
                    Küldjön majd levelet a csvmg.info@gmail.com -ra.CC-ze a feladót
                </div>
                <div class="iskola">
                    Mi legyen a levél tárgyában? Ez csak új jelszó, vagy általános kréta probléma?
                </div>
            </div>

        </section>
    </main>


<?php /*  ------------------ TARTALOM VÉGE ----------------------- */ ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>