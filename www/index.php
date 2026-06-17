<?php
$pageTitle  = 'Csokonai Gimnázium – Főoldal';
$pageDesc   = 'Az Újpesti Csokonai Vitéz Mihály Általános Iskola és Gimnázium hivatalos weboldala.';
$activePage = 'fooldal';
include '_includes/header.php';
?>

<section class="hero">
    <h1>Üdvözöljük a Csokonai Gimnáziumban!</h1>
    <p>Budapest XIV. kerületének egyik legrégebbi iskolája.</p>
</section>

<section class="cards">
    <div class="card">
        <h2>Hírek</h2>
        <p>Legfrissebb iskolai hírek és események.</p>
        <a href="/hirek" class="btn">Tovább</a>
    </div>
    <div class="card">
        <h2>Történetünk</h2>
        <p>Ismerd meg iskolánk több évtizedes múltját.</p>
        <a href="/tortenet.php" class="btn">Tovább</a>
    </div>
    <div class="card">
        <h2>Kapcsolat</h2>
        <p>Elérhetőségeink és nyitvatartásunk.</p>
        <a href="/kapcsolat.php" class="btn">Tovább</a>
    </div>
</section>

<?php include '_includes/footer.php'; ?>