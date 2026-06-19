window.MENU = [
    {
        name: "Események",
        class: 'cat-calendar',
        icon: "ti-calendar",
        hideOnSitemap: true,
        items: [
            {
                text: "Ballagás 8. osztályból<br><small>2026. június 19. <i>(30 nap múlva)</i></small>",
            },
            {
                text: "Nyári szünet első nap<br><small>2026. június 22. <i>(41 nap múlva)</i></small>",
            },
            {
                text: "Első iskola nap 2026/2027<br><small>2026. szeptember 1. <i>(100 nap múlva)</i></small>",
            }
        ]
    },
    {
        name: "Iskolánk",
        class: 'cat-myschool',
        icon: "ti-building",
        items: [
            {text: "Letölthető dokumentumok", href: "iskolankrol/dokumentumok.php"},
            {text: "Közzétételi lista", href: "iskolankrol/kozzetetel.php"},
            {text: "Munkatársaink", href: "iskolankrol/munkatarsaink.php"},
            {text: "Tanév rendje", href: "iskolankrol/tanev.php"},
            {text: "Csengetési rend", href: "iskolankrol/csengetes.php"},
            {text: "Alapítvány", href: "iskolankrol/alapitvany.php"},
            {text: "Szülői munkaközösség", href: "iskolankrol/szmk.php"},
            {text: "Álláspályázat", href: "iskolankrol/allas.php"},
            {text: "Névadónkról", href: "iskolankrol/nevadonkrol.php"},
            {text: "Ökoiskola", href: "iskolankrol/okoiskola.php"},
        ]
    },
    {
        name: "Általános iskola",
        class: 'cat-midschool',
        icon: "ti-school",
        items: [
            {text: "Körzethatárok", href: "altalanos/korzethatarok.php"},
            {text: "Felvett tanulók OM kódja", href: "altalanos/felvettek.php"},
            {text: "Beiratkozási tájékoztató", href: "altalanos/beiratkozas.php"},
            {text: "Hívogató / Nyílt nap", href: "altalanos/hivogato.php"},
        ]
    },
    {
        name: "Gimnázium",
        class: 'cat-highschool',
        icon: "ti-certificate",
        link: "gimnazium.php",
        items: [
            {text: "Információk", href: "gimnazium/informaciok.php"},
            {text: "Felvételi", href: "gimnazium/felveteli.php"},
            {text: "Érettségi", href: "gimnazium/erettsegi.php"},
            {text: "Központi felvételi", href: "gimnazium/kozponti-felveteli.php"},
            {text: "Gólyatábor", href: "gimnazium/golyatabor.php"},
            {text: "Közösségi szolgálat", href: "gimnazium/kozossegi-szolgalat.php"},
            {text: "Nyílt nap", href: "gimnazium/nyilt-nap.php"}
        ]
    },
    {
        name: "Ügyintézés",
        class: 'cat-tasks',
        icon: "ti-clipboard-list",
        link: "ugyintezes.php",
        items: [
            {text: "Elérhetőségek", href: "ugyintezes/elerhetosegek.php"},
            {text: "Ebédbefizetés", href: "ugyintezes/ebed.php"},
            {text: "Kréta ügyintézés", href: "ugyintezes/kreta.php"},
            {text: "Laptop ügyintézés", href: "ugyintezes/laptop.php"},
            {text: "További ügyek", href: "ugyintezes/ugyek.php"},
        ]
    },
    {
        name: "Iskolai élet",
        class: 'cat-friends',
        icon: "ti-friends",
        link: "elet.php",
        items: [
            {text: "Témahetek", href: "elet/temahet.php"},
            {text: "Könyvtár", href: "elet/konyvtar.php"},
            {text: "Tanulmányi versenyek", href: "elet/tanulmanyi-versenyek.php"},
            {text: "Zeneiskola", href: "elet/zeneiskola.php"},
            {text: "Iskola újság", href: "elet/iskolaujsag.php"},
            {text: "Határtalanul", href: "elet/hatartalanul.php"},
            {text: "Erasmus", href: "elet/erasmus.php"},
            {text: "Sportolás", href: "elet/sport.php"}
        ]
    },
    {
        name: "Támogató Szolgáltatások",
        icon: "ti-heart-handshake",
        class: 'cat-mental',
        link: "tamogatas.php",
        items: [
            {text: "Védőnő", href: "tamogato/vedono.php"},
            {text: "Gyógytestnevelés", href: "tamogato/gyogytestneveles.php"},
            {text: "Iskola pszichológus", href: "tamogato/pszihologus.php"},
            {text: "Hit- és erkölcstan", href: "tamogato/hit-erkolcstan.php"},
        ]
    }
];

function slug(s) {
    return s.toLowerCase().replace(/[^a-z0-9áéíóöőúüű]+/g, '-');
}

function getItemHtml(item) {
    const text = typeof item === 'string' ? item : item.text;
    let iconHtml = '';
    if (typeof item === 'object') {
        if (item.icon) {
            iconHtml = `<i class="ti ${item.icon} item-icon" style="${item.color ? 'color:' + item.color : ''}"></i>`;
        } else if (item.color) {
            iconHtml = `<span class="item-dot" style="background-color:${item.color}"></span>`;
        }
    }
    return `${iconHtml}<span style="${typeof item === 'object' && item.color ? 'color:' + item.color : ''}">${text}</span>`;
}

function itemHref(item, cat) {
    const base = window.BASE_PATH || '';
    if (typeof item === 'object' && item.href) return base + item.href;
    const itemText = typeof item === 'string' ? item : item.text;
    return cat.link ? base + cat.link + '#' + slug(itemText) : '#' + slug(itemText);
}
