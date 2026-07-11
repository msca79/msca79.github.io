<?php include '../includes/constants.php'; ?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */ ?>
<?php $pageTitle = 'Védőnő' . $pageTitlePostfix; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidenav.php'; ?>
<?php include '../includes/banner.php'; ?>
<?php include '../includes/menubar.php'; ?>

<style>
    .item {
        margin: 20px;
        display: block;
    }
     .oltas-table { border-collapse: collapse; font-size: 0.92rem; width: 100%; }
    .oltas-table th { background: #f0f0f0; padding: 0.5rem 0.9rem; text-align: left; border-bottom: 2px solid #ccc; font-weight: 600; }
    .oltas-table td { padding: 0.45rem 0.9rem; border-bottom: 1px solid #e0e0e0; vertical-align: top; }
    .oltas-table tr:last-child td { border-bottom: none; }
    .oltas-table .szekció { background: #e8eaf6; font-weight: 600; color: #3949ab; padding: 0.4rem 0.9rem; }
    .oltas-table td:nth-child(1) { font-weight: 600; white-space: nowrap; }
    .badge-kotelezo { background: #fdecea; color: #b00020; display: inline-block; font-size: 0.78rem; padding: 0.1rem 0.5rem; border-radius: 3px; }
    .badge-ajanlott { background: #e8f5e9; color: #2e6b3e; display: inline-block; font-size: 0.78rem; padding: 0.1rem 0.5rem; border-radius: 3px; }

</style>


<?php /*  ------------------ TARTALOM ELEJE ----------------------- */ ?>
<main id="page-content">
    <section id="sample-page">
        <h1>Védőnő</h1>

        <div class="highlight-box">
            <p>
                <span class="item">
                   <strong>Spóring Zsuzsanna</strong>
                </span>

                <span class="item">
                    <i class="ti ti-mail"> </i>
                    E-mail:
                    <a href="mailto:csokonai.vedono@ujpestiszakrendelo.hu">csokonai.vedono@ujpestiszakrendelo.hu</a>
                </span>
            </p>

        </div>


        <h1>Oltásokról</h1>

        <table class="oltas-table">
            <thead>
            <tr>
                <th>Oltás neve</th>
                <th>Mire véd</th>
                <th>Mikor adják</th>
                <th>Kötelező</th>
            </tr>
            </thead>
            <tbody>
            <tr><td colspan="4" class="szekció">Általános iskola – 1. osztály (6 éves kor)</td></tr>

            <tr>
                <td>MMR (emlékeztető)</td>
                <td>Kanyaró, mumpsz, rubeola elleni emlékeztető. Az első oltást csecsemőkorban kapják, ezt megerősíti.</td>
                <td>1. osztály, iskolakezdéskor</td>
                <td><span class="badge-kotelezo">Kötelező</span></td>
            </tr>

            <tr><td colspan="4" class="szekció">Általános iskola – 2. osztály (7–8 éves kor)</td></tr>

            <tr>
                <td>DTPa (emlékeztető)</td>
                <td>Diftéria, tetanusz, szamárköhögés elleni emlékeztető oltás.</td>
                <td>2. osztály</td>
                <td><span class="badge-kotelezo">Kötelező</span></td>
            </tr>
            <tr>
                <td>IPV (emlékeztető)</td>
                <td>Gyermekbénulás (poliomyelitis) elleni emlékeztető.</td>
                <td>2. osztály</td>
                <td><span class="badge-kotelezo">Kötelező</span></td>
            </tr>

            <tr><td colspan="4" class="szekció">Általános iskola – 6. osztály (11–12 éves kor)</td></tr>

            <tr>
                <td>HPV</td>
                <td>Humán papillomavírus elleni oltás. Méhnyakrák és más HPV-vel összefüggő daganatok megelőzésére. Lányoknak és fiúknak egyaránt adják.</td>
                <td>6. osztály (2 dózis)</td>
                <td><span class="badge-kotelezo">Kötelező</span></td>
            </tr>

            <tr><td colspan="4" class="szekció">Általános iskola – 8. osztály (13–14 éves kor)</td></tr>

            <tr>
                <td>Hepatitis B (emlékeztető)</td>
                <td>B-típusú hepatitis (máj­gyulladás) elleni emlékeztető. Az alap­oltás­sorozat csecsemőkorban kezdődik.</td>
                <td>8. osztály</td>
                <td><span class="badge-kotelezo">Kötelező</span></td>
            </tr>
            <tr>
                <td>DT (emlékeztető)</td>
                <td>Diftéria és tetanusz elleni emlékeztető oltás.</td>
                <td>8. osztály</td>
                <td><span class="badge-kotelezo">Kötelező</span></td>
            </tr>

            <tr><td colspan="4" class="szekció">Középiskola – 11. osztály (16–17 éves kor)</td></tr>

            <tr>
                <td>dTap (emlékeztető)</td>
                <td>Diftéria, tetanusz, szamárköhögés elleni felnőtt dózisú emlékeztető.</td>
                <td>11. osztály</td>
                <td><span class="badge-kotelezo">Kötelező</span></td>
            </tr>

            <tr><td colspan="4" class="szekció">Ajánlott, nem kötelező oltások</td></tr>

            <tr>
                <td>Influenza</td>
                <td>Szezonális influenza megelőzésére. Évente ismétlendő.</td>
                <td>Évente, őszi időszakban</td>
                <td><span class="badge-ajanlott">Ajánlott</span></td>
            </tr>
            <tr>
                <td>Meningococcus</td>
                <td>Agyhártyagyulladást okozó meningococcus baktérium ellen.</td>
                <td>Bármikor</td>
                <td><span class="badge-ajanlott">Ajánlott</span></td>
            </tr>
            <tr>
                <td>Varicella (bárányhimlő)</td>
                <td>Bárányhimlő ellen – azoknál ajánlott, akik csecsemőkorban nem kapták meg.</td>
                <td>Bármikor</td>
                <td><span class="badge-ajanlott">Ajánlott</span></td>
            </tr>
            </tbody>
        </table>

    </section>
</main>

<?php /*  ------------------ TARTALOM VÉGE ----------------------- */ ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>
