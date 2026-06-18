<!-- ═══════════════════════ MENU BAR ═══════════════════════ -->
<nav id="menubar" aria-label="Főmenü"></nav>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const menubar = document.getElementById('menubar');
    MENU.forEach(cat => {
        const item = document.createElement('div');
        item.className = 'menu-item';
        const linksHtml = cat.items.map(subItem => {
            return `<a href="${itemHref(subItem, cat)}">${getItemHtml(subItem)}</a>`;
        }).join('');
        item.innerHTML = `
            <button>
                <i class="ti ${cat.icon}" aria-hidden="true"></i>
                ${cat.name}
                <i class="ti ti-chevron-down arrow" aria-hidden="true"></i>
            </button>
            <div class="dropdown">${linksHtml}</div>
        `;
        item.querySelector('button').addEventListener('click', (e) => {
            e.stopPropagation();
            document.querySelectorAll('.menu-item.open').forEach(el => {
                if (el !== item) el.classList.remove('open');
            });
            item.classList.toggle('open');
        });
        menubar.appendChild(item);
    });

    document.addEventListener('click', () => {
        document.querySelectorAll('.menu-item.open').forEach(el => el.classList.remove('open'));
    });
});
</script>
