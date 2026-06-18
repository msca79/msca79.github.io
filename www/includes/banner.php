<!-- ═══════════════════════ BANNER ═══════════════════════ -->
<header id="banner">
    <button class="hamburger" id="hamburger-btn" onclick="toggleSideNav()" aria-label="Menü megnyitása">
        <span></span><span></span><span></span>
    </button>
    <a class="school-info" href="<?= $basePath ?? '' ?>index.php">
        <div class="school-name">Újpesti Csokonai Vitéz Mihály Általános Iskola és Gimnázium</div>
        <div class="school-meta">
            Cím: 1048 Budapest, Bőrfestő utca 5-9. &nbsp;|&nbsp; Tel: +363807170 &nbsp;|&nbsp; OM-azonosító: 034877
        </div>
    </a>
    <div class="right-actions">
        <form action="<?= $basePath ?? '' ?>search.php" method="GET" class="search-wrap">
            <input type="text" name="kereses" placeholder="Keresés…" aria-label="Keresés" value="<?= htmlspecialchars($_GET['kereses'] ?? '') ?>">
            <button type="submit" class="btn-banner btn-search">
                <i class="ti ti-search"></i>
            </button>
        </form>
        <a href="#" class="btn-banner btn-kreta"><i class="ti ti-school"></i> Kréta</a>
        <a href="#" class="btn-banner btn-fb"><i class="ti ti-brand-facebook"></i> Facebook</a>
    </div>
</header>
