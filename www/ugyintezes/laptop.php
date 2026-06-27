<?php $basePath = '../'; ?>
<?php include '../includes/constants.php'; ?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */  ?>
<?php $pageTitle = 'Laptop ügyintézés' . $pageTitlePostfix; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidenav.php'; ?>
<?php include '../includes/banner.php'; ?>
<?php include '../includes/menubar.php'; ?>

<?php /*  ------------------ TARTALOM ELEJE ----------------------- */  ?>
<main id="page-content">
    <section id="sample-page">
          <h1>Laptop ügyintézés</h1>

        <p>

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
                <label for="keres">Kérésem </label>
                <textarea id="keres" name="keres" class="form-control" rows="4"></textarea>
            </div>

            <button type="submit" class="btn-primary">Beküldés</button>
        </form>


        <div class="todo-floating-container">
            <div class="keszito">
                Küldjön majd levelet a csvmg.info@gmail.com -ra “Laptop probléma” tárggyal.
                CC-ze a feladót
            </div>
            <div class="iskola">
                milyen mezők legyenek.
                Nem elegendő simán egy emailcímet kitenni?
                Csak laptop vagy teams és egyéb IT problémák is?
            </div>
        </div>




    </section>
</main>


<?php /*  ------------------ TARTALOM VÉGE ----------------------- */  ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>