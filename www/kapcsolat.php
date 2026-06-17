<?php
$pageTitle  = 'Kapcsolat – Csokonai Gimnázium';
$pageDesc   = 'Elérhetőségeink, postacímünk és nyitvatartásunk.';
$activePage = 'kapcsolat';
include '_includes/header.php';
?>

<article class="page-article">
    <h1>Kapcsolat</h1>

    <div class="contact-grid">
        <section class="contact-info">
            <h2>Elérhetőségek</h2>
            <ul>
                <li><strong>Cím:</strong> 1042 Budapest, Árpád út 50.</li>
                <li><strong>Telefon:</strong> <a href="tel:+3611234567">+36 1 123 4567</a></li>
                <li><strong>E-mail:</strong> <a href="mailto:info@csvmg.hu">info@csvmg.hu</a></li>
            </ul>

            <h2>Nyitvatartás</h2>
            <table class="hours-table">
                <tr><th>Hétfő – Péntek</th><td>7:30 – 17:00</td></tr>
                <tr><th>Szombat</th><td>Zárva</td></tr>
                <tr><th>Vasárnap</th><td>Zárva</td></tr>
            </table>
        </section>

        <section class="contact-map">
            <h2>Térkép</h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2694.4!2d19.071!3d47.551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zQ3Nva29uYWk!5e0!3m2!1shu!2shu!4v1"
                width="100%"
                height="300"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Térkép – Csokonai Gimnázium">
            </iframe>
        </section>
    </div>
</article>

<?php include '_includes/footer.php'; ?>