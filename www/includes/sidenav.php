<!-- ═══════════════════════ SIDE NAV ═══════════════════════ -->
<div id="side-nav-overlay" onclick="closeSideNav()"></div>
<nav id="side-nav" aria-label="Oldalsó navigáció">
    <button id="side-nav-close" onclick="closeSideNav()" aria-label="Bezárás"><i class="ti ti-x"></i></button>
</nav>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const sideNav = document.getElementById('side-nav');
    MENU.forEach(cat => {
        const div = document.createElement('div');
        div.className = 'nav-cat';
        const linksHtml = cat.items.map(subItem => {
            return `<a href="${itemHref(subItem, cat)}" onclick="closeSideNav();">${getItemHtml(subItem)}</a>`;
        }).join('');
        div.innerHTML = `
            <div class="nav-cat-header" onclick="toggleNavCat(this)">
                <span class="nc-left">
                    <i class="ti ${cat.icon}" aria-hidden="true"></i>
                    ${cat.name}
                </span>
                <i class="ti ti-chevron-down nc-arrow" aria-hidden="true"></i>
            </div>
            <div class="nav-items">${linksHtml}</div>
        `;
        sideNav.appendChild(div);
    });

    // Statikus Admin menü hozzáadása
    const adminDiv = document.createElement('div');
    adminDiv.className = 'nav-cat';
    const basePath = window.BASE_PATH || '';
    adminDiv.innerHTML = `
        <div class="nav-cat-header" onclick="toggleNavCat(this)">
            <span class="nc-left">
                <i class="ti ti-settings" aria-hidden="true"></i>
                Admin
            </span>
            <i class="ti ti-chevron-down nc-arrow" aria-hidden="true"></i>
        </div>
        <div class="nav-items">
            <a href="${basePath}support/build2.php?delete=true" target="_blank" onclick="closeSideNav();">
                <i class="ti ti-refresh item-icon"></i>
                <span>Rebuild</span>
            </a>
        </div>
    `;
    sideNav.appendChild(adminDiv);
});

function toggleNavCat(header) {
    header.parentElement.classList.toggle('expanded');
}

function toggleSideNav() {
    document.getElementById('side-nav').classList.toggle('open');
    document.getElementById('side-nav-overlay').classList.toggle('open');
    document.getElementById('hamburger-btn').classList.toggle('open');
}

function closeSideNav() {
    document.getElementById('side-nav').classList.remove('open');
    document.getElementById('side-nav-overlay').classList.remove('open');
    document.getElementById('hamburger-btn').classList.remove('open');
}
</script>
