<!-- ═══════════════════════ CATEGORIES ═══════════════════════ -->
<section id="categories">
    <div class="cat-grid" id="cat-grid"></div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const catGrid = document.getElementById('cat-grid');
    if (!catGrid) return;
    MENU.forEach(cat => {
        const card = document.createElement('div');
        card.className = `cat-card ${cat.class || ''}`;
        const linksHtml = cat.items.map(item => {
            return `<li><a href="${itemHref(item, cat)}">${getItemHtml(item)}</a></li>`;
        }).join('');
        card.innerHTML = `
            <div class="cat-header">
                <i class="ti ${cat.icon}" aria-hidden="true"></i>
                <span>${cat.name}</span>
            </div>
            <ul class="cat-links">${linksHtml}</ul>
        `;
        catGrid.appendChild(card);
    });
});
</script>
