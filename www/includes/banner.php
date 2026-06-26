<!-- ═══════════════════════ BANNER ═══════════════════════ -->
<header id="banner">
    <button class="hamburger" id="hamburger-btn" onclick="toggleSideNav()" aria-label="Menü megnyitása">
        <span></span><span></span><span></span>
    </button>
    <div class="school-info-container">
        <a class="school-info" href="<?= $basePath ?? '' ?>index.php">
            <div class="school-name">Újpesti Csokonai Vitéz Mihály Általános Iskola és Gimnázium</div>
        </a>
        <div class="school-meta">
            <a href="<?= $basePath ?? '' ?>ugyintezes/kapcsolat.php" class="meta-item"><i class="ti ti-map-pin"></i> 1048 Budapest, Bőrfestő utca 5-9.</a>
            <span class="meta-separator">|</span>
            <a href="<?= $basePath ?? '' ?>ugyintezes/kapcsolat.php" class="meta-item"><i class="ti ti-phone"></i> +36 1 380 7170</a>
            <span class="meta-separator">|</span>
            <a href="mailto:titkarsag.csokonaivm@ebtk.hu" class="meta-item"><i class="ti ti-mail"></i> titkarsag.csokonaivm@ebtk.hu</a>
            <span class="meta-separator">|</span>
            <span class="meta-item"><i class="ti ti-id-badge"></i> OM-azonosító: 034877</span>
        </div>
    </div>
    <div class="right-actions">
        <form action="<?= $basePath ?? '' ?>search.php" method="GET" class="search-wrap">
            <input type="text" name="kereses" placeholder="Keresés…" aria-label="Keresés" value="<?= htmlspecialchars($_GET['kereses'] ?? '') ?>">
            <button type="submit" class="btn-banner btn-search">
                <i class="ti ti-search"></i>
            </button>
        </form>
        <a href="https://klik034877001.e-kreta.hu/" target="_blank" class="btn-banner btn-kreta"><i class="ti ti-school"></i> Kréta</a>
        <a href="https://www.facebook.com/csvmgofficial" target="_blank" class="btn-banner btn-fb"><i class="ti ti-brand-facebook"></i> Facebook</a>

        INSTA
    </div>
</header>
