<?php $basePath = '../'; ?>
<?php include '../includes/constants.php'; ?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */  ?>
<?php $pageTitle = 'Csengetési rend' . $pageTitlePostfix; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidenav.php'; ?>
<?php include '../includes/banner.php'; ?>
<?php include '../includes/menubar.php'; ?>

<style>
    .csengetesi-rend { border-collapse: collapse; font-size: 0.95rem; }
    .csengetesi-rend th { background: #f0f0f0; padding: 0.5rem 1.2rem; text-align: center; border-bottom: 2px solid #ccc; font-weight: 600; }
    .csengetesi-rend td { padding: 0.45rem 1.2rem; border-bottom: 1px solid #e0e0e0; text-align: center; }
    .csengetesi-rend tr:last-child td { border-bottom: none; }
    .csengetesi-rend .ora { font-weight: 600; }
    .csengetesi-rend .szunet { color: #888; font-size: 0.88rem; }
</style>

<?php /*  ------------------ TARTALOM ELEJE ----------------------- */  ?>
<main id="page-content">
    <section id="sample-page">

        <h1>Csengetési rend</h1>

        <table class="csengetesi-rend">
            <thead>
            <tr>
                <th>Óra</th>
                <th>Tanítás</th>
                <th>Szünet</th>
            </tr>
            </thead>
            <tbody>
            <tr><td class="ora">1.</td><td>8:00 – 8:45</td><td class="szunet">15 perc</td></tr>
            <tr><td class="ora">2.</td><td>9:00 – 9:45</td><td class="szunet">15 perc</td></tr>
            <tr><td class="ora">3.</td><td>10:00 – 10:45</td><td class="szunet">10 perc</td></tr>
            <tr><td class="ora">4.</td><td>10:55 – 11:40</td><td class="szunet">10 perc</td></tr>
            <tr><td class="ora">5.</td><td>11:50 – 12:35</td><td class="szunet">10 perc</td></tr>
            <tr><td class="ora">6.</td><td>12:45 – 13:30</td><td class="szunet">10 perc</td></tr>
            <tr><td class="ora">7.</td><td>13:40 – 14:25</td><td class="szunet">–</td></tr>
            </tbody>
        </table>

    </section>
</main>

<?php /*  ------------------ TARTALOM VÉGE ----------------------- */  ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>
