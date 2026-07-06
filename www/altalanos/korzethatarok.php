<?php $basePath = '../'; ?>
<?php include '../includes/constants.php'; ?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */  ?>
<?php $pageTitle = 'Körzethatárok' . $pageTitlePostfix; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidenav.php'; ?>
<?php include '../includes/banner.php'; ?>
<?php include '../includes/menubar.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.js"></script>

<style>
    #map { width: 800px; height: 600px; }

</style>
<?php /*  ------------------ TARTALOM ELEJE ----------------------- */  ?>
<main id="page-content">
    <section id="sample-page">

        <h1>Körzethatárok</h1>
        <p>
            A jelölők jelzik az utca neveket.
        </p>

        <div id="map"></div>

        <ul>
            <li>Megyeri út – páratlan oldal 201-végig</li>
            <li>Járműtelep utca</li>
            <li>Homoktövis utca – páratlan oldal 1-1.</li>
            <li>Börfestő utca</li>
            <li>Dunakeszi utca</li>
            <li>Cserző utca</li>
            <li>Böröndös utca</li>
            <li>Galopp utca</li>
            <li>Ványoló utca</li>
            <li>Ügető utca</li>
            <li>Tóth Aladár utca</li>
            <li>Szíjgyártó utca</li>
            <li>Szabolcsi Bence tér</li>
            <li>Orgona köz</li>
            <li>Nádasdy Kálmán utca</li>
            <li>Lakkozó utca</li>
            <li>Külső Szilágyi út – páros oldal 18-72.</li>
            <li>Kordován tér</li>
            <li>Farkaserdő utca</li>
        </ul>

        <div class="todo-floating-container">
            <div class="iskola">
                a Megyeri út tényleg benne van? nagyon kilóg...
            </div>
        </div>


    </section>
</main>


<script>
    const map = L.map('map').setView([47.5855, 19.1120], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© <a href="https://www.openstreetmap.org/copyright" target="_blank">OpenStreetMap</a> contributors',
        maxZoom: 19
    }).addTo(map);

    const icon = L.divIcon({
        className: '',
        html: `<svg width="24" height="36" viewBox="0 0 24 36" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 0C5.373 0 0 5.373 0 12c0 9 12 24 12 24s12-15 12-24C24 5.373 18.627 0 12 0z" fill="#e53935"/>
            <circle cx="12" cy="12" r="5" fill="white"/>
        </svg>`,
        iconSize: [24, 36],
        iconAnchor: [12, 36],
        popupAnchor: [0, -36]
    });

    const utcak = [
        { name: "Megyeri út (páratlan oldal 201-től)", lat: 47.5867101, lng: 19.0953727 },
        { name: "Járműtelep utca", lat: 47.5839067, lng: 19.1136119 },
        { name: "Homoktövis utca (páratlan oldal 1-1.)", lat: 47.5952111, lng: 19.1145397 },
        { name: "Börfestő utca", lat: 47.5886204, lng: 19.1164497 },
        { name: "Dunakeszi utca", lat: 47.5840832, lng: 19.1099212 },
        { name: "Cserző utca", lat: 47.5846623, lng: 19.1099067 },
        { name: "Böröndös utca", lat: 47.5853716, lng: 19.1141788 },
        { name: "Galopp utca", lat: 47.5810409, lng: 19.1149314 },
        { name: "Ványoló utca", lat: 47.5847046, lng: 19.1135288 },
        { name: "Ügető utca", lat: 47.5821536, lng: 19.1149851 },
        { name: "Tóth Aladár utca", lat: 47.5841883, lng: 19.1087341 },
        { name: "Szíjgyártó utca", lat: 47.5878082, lng: 19.1143628 },
        { name: "Szabolcsi Bence tér", lat: 47.5859256, lng: 19.1124705 },
        { name: "Orgona köz", lat: 47.5832428, lng: 19.1118041 },
        { name: "Nádasdy Kálmán utca", lat: 47.5838881, lng: 19.1110358 },
        { name: "Lakkozó utca", lat: 47.5853036, lng: 19.1147661 },
        { name: "Külső Szilágyi út (páros oldal 18-72.)", lat: 47.5886113, lng: 19.118346 },
        { name: "Kordován tér", lat: 47.5865207, lng: 19.1131606 },
        { name: "Farkaserdő utca", lat: 47.5864388, lng: 19.1109239 },
    ];

    utcak.forEach(u => {
        L.marker([u.lat, u.lng], { icon })
            .addTo(map)
            .bindPopup(`<strong>${u.name}</strong>`);
    });
</script>

<?php /*  ------------------ TARTALOM VÉGE ----------------------- */  ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>
