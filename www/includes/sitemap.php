<!-- ═══════════════════════ SITEMAP ═══════════════════════ -->
<section id="sitemap">
    <div class="inner">
        <div class="sitemap-grid" id="sitemap-grid"></div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const smGrid = document.getElementById('sitemap-grid');
    if (!smGrid) return;
    MENU.forEach(cat => {
        const col = document.createElement('div');
        col.className = 'sitemap-col';
        const linksHtml = cat.items.map(item => {
            return `<li><a href="${itemHref(item, cat)}">${getItemHtml(item)}</a></li>`;
        }).join('');
        col.innerHTML = `
            <h3><i class="ti ${cat.icon}" aria-hidden="true"></i>${cat.name}</h3>
            <ul>${linksHtml}</ul>
        `;
        smGrid.appendChild(col);
    });
});
</script>
