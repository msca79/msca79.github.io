window.MENU = [
    {
        name: "Események",
        class: 'cat-calendar',
        icon: "ti-calendar",
        link: "esemenyek.php",
        hideOnSitemap: true,
        items: [
            {
                text: "Ballagás 8. osztályból<br><small>2026. június 19. <i>(30 nap múlva)</i></small>",
                href: "esemenyek.php#ballagas"
            },
            {
                text: "Nyári szünet első nap<br><small>2026. június 22. <i>(41 nap múlva)</i></small>",
                href: "esemenyek.php#nyari-szunet"
            },
            {
                text: "Első iskola nap 2026/2027<br><small>2026. szeptember 1. <i>(100 nap múlva)</i></small>",
                href: "esemenyek.php#iskola-nap"
            }
        ]
    },
    {
        name: "Iskolánk",
        class: 'cat-myschool',
        icon: "ti-building",
        items: [
            {text: "Pedagógusok/Munkatársaink", href: "iskolankrol/tortenet.php"},
            {text: "Tanév rendje", href: "iskolankrol/tortenet.php"},
            {text: "Csengetési rend", href: "iskolankrol/tortenet.php"},
            {text: "Alapítvány", href: "iskolankrol/tortenet.php"},
            {text: "Szülői munkaközösség", href: "iskolankrol/tortenet.php"},
            {text: "Álláspályázat", href: "iskolankrol/tortenet.php"},
            {text: "Névadónkról", href: "iskolankrol/tortenet.php"},
            {text: "Általános Dokumentumok", href: "iskolankrol/tortenet.php"},
            {text: "ökoiskola", href: "iskolankrol/tortenet.php"},
        ]
    },
    {
        name: "Általános iskola",
        class: 'cat-midschool',
        icon: "ti-school",
        items: [
            {text: "Körzethatárok", href: "altalanos/felveteli.php"},
            {text: "Körzeten kívüliek jelentkezése", href: "altalanos/felveteli.php"},
            {text: "Felvett tanulók névsora", href: "altalanos/felveteli.php"},
            {text: "Felvételi információk", href: "altalanos/felveteli.php"},
            {text: "Nyílt nap / Csalogató", href: "altalanos/felveteli.php"},
        ]
    },
    {
        name: "Gimnázium",
        class: 'cat-highschool',
        icon: "ti-certificate",
        link: "gimnazium.php",
        items: [
            {text: "Információk (induló szakok)", href: "gimnazium/informaciok.php"},
            {text: "Felvételi tudnivalók", href: "gimnazium/informaciok.php"},
            {text: "Felvett tanulók névsora", href: "gimnazium/informaciok.php"},
            {text: "Felvételi követelmények", href: "gimnazium/informaciok.php"},
            {text: "Szóbeli", href: "gimnazium/informaciok.php"},
            {text: "Tájékoztató a központi felvételi menetéről", href: "gimnazium/informaciok.php"},
            {text: "Felvételi tájékoztató 2026-2027", href: "gimnazium/informaciok.php"},
            {text: "Felvételi előkészítő jelentkezési lap", href: "gimnazium/informaciok.php"},
            {text: "Érettségi anyagok", href: "gimnazium/informaciok.php"},
            {text: "Közösségi szolgálat", href: "gimnazium/informaciok.php"},
            {text: "Gólyatábor jelentkezési lapja", href: "gimnazium/informaciok.php"},
        ]
    },
    {
        name: "Ügyintézés",
        class: 'cat-tasks',
        icon: "ti-clipboard-list",
        link: "ugyintezes.php",
        items: [
            {text: "Elérhetőségek", href: "ugyintezes/kapcsolat.php"},
            {text: "Ebédbefizetés", href: "ugyintezes/kapcsolat.php"},
            {text: "Diákigazolvány", href: "ugyintezes/kapcsolat.php"},
            {text: "Bizonyítvány másolat kérése", href: "ugyintezes/kapcsolat.php"},
            {text: "Kréta bejelentkezési problémák", href: "ugyintezes/kapcsolat.php"},
            {
                text: "Felmentési kérelem 16 óra előtt megszervezett egyéb foglalkozás alól",
                href: "ugyintezes/kapcsolat.php"
            },
            {text: "Kérelem két testnevelés óra alóli felmentéshez", href: "ugyintezes/kapcsolat.php"},
            {text: "Egyéni tanrend igénylése", href: "ugyintezes/kapcsolat.php"},
            {text: "Felvételi előkészítő jelentkezési lapja", href: "ugyintezes/kapcsolat.php"},
            {text: "Informatikai, Teams problémák esetén", href: "ugyintezes/kapcsolat.php"}
        ]
    },
    {
        name: "Iskolai élet",
        class: 'cat-friends',
        icon: "ti-friends",
        link: "elet.php",
        items: [
            {text: "Témahetek", href: "elet/konyvtar.php"},
            {text: "Könyvtár", href: "elet/konyvtar.php"},
            {text: "Tanulmányi versenyek", href: "elet/konyvtar.php"},
            {text: "Zeneiskola", href: "elet/konyvtar.php"},
            {text: "Pályázatok", href: "elet/konyvtar.php"},
            {text: "Iskola újság", href: "elet/konyvtar.php"},
            {text: "Határtalanul", href: "elet/konyvtar.php"},
            {text: "Erasmus", href: "elet/konyvtar.php"},
            {text: "Tanórán kívüli sportolás", href: "elet/konyvtar.php"}
        ]
    },
    {
        name: "Támogató Szolgáltatások",
        icon: "ti-heart-handshake",
        class: 'cat-mental',
        link: "tamogatas.php",
        items: [
            {text: "Iskola egészségügy, védőnő", href: "tamogato/vedono.php"},
            {text: "Gyógytestnevelés", href: "tamogato/vedono.php"},
            {text: "Iskola pszichológus", href: "tamogato/vedono.php"},
            {text: "Hittan", href: "tamogato/vedono.php"},
            {text: "Erkölcstan", href: "tamogato/vedono.php"},
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
