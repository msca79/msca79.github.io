<?php include 'includes/constants.php'; ?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */  ?>
<?php $pageTitle = 'Védőnő' . $pageTitlePostfix; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidenav.php'; ?>
<?php include 'includes/banner.php'; ?>
<?php include 'includes/menubar.php'; ?>

<?php /*  ------------------ TARTALOM ELEJE ----------------------- */  ?>
<main id="page-content">
    <section id="sample-page">
        <h1>Keresési eredmények</h1>
        
        <div id="search-status" style="margin-bottom: 20px; font-style: italic; color: #666;">
            Keresés folyamatban...
        </div>

        <div id="results-container">
            <!-- Ide kerülnek a találatok -->
        </div>

        <script>
        (function() {
            const urlParams = new URLSearchParams(window.location.search);
            const query = urlParams.get('kereses');
            const resultsContainer = document.getElementById('results-container');
            const statusContainer = document.getElementById('search-status');

            if (!query) {
                statusContainer.textContent = 'Nincs megadva keresőkifejezés.';
                return;
            }

            fetch('<?= $basePath ?? '' ?>support/search-engine.php?q=' + encodeURIComponent(query))
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        statusContainer.textContent = 'Hiba történt: ' + data.error;
                        return;
                    }

                    if (!data.results || data.results.length === 0) {
                        statusContainer.textContent = 'Nincs találat a következőre: "' + query + '"';
                        return;
                    }

                    statusContainer.textContent = 'Találatok száma: ' + data.total + ' (keresett szó: "' + data.query + '")';

                    data.results.forEach(result => {
                        const resultDiv = document.createElement('div');
                        resultDiv.className = 'search-result-item';
                        resultDiv.style.marginBottom = '30px';
                        resultDiv.style.paddingBottom = '20px';
                        resultDiv.style.borderBottom = '1px solid #eee';

                        const titleLink = document.createElement('a');
                        // A result.path relatív a www mappához képest (pl. altalanos/felveteli.php)
                        // A search-result.php a www mappában van, így a basePath-szal kiegészítve jó
                        const basePath = window.BASE_PATH || '';
                        titleLink.href = basePath + result.path;
                        titleLink.textContent = result.title || result.path;
                        titleLink.style.fontSize = '20px';
                        titleLink.style.display = 'block';
                        titleLink.style.marginBottom = '8px';

                        const pathDiv = document.createElement('div');
                        pathDiv.textContent = result.path;
                        pathDiv.style.fontSize = '13px';
                        pathDiv.style.color = 'green';
                        pathDiv.style.marginBottom = '8px';

                        const snippetDiv = document.createElement('p');
                        snippetDiv.innerHTML = result.snippet;
                        snippetDiv.style.margin = '0';
                        snippetDiv.style.fontSize = '15px';

                        resultDiv.appendChild(titleLink);
                        resultDiv.appendChild(pathDiv);
                        resultDiv.appendChild(snippetDiv);
                        resultsContainer.appendChild(resultDiv);
                    });
                })
                .catch(error => {
                    console.error('Fetch hiba:', error);
                    statusContainer.textContent = 'Hiba történt a keresés során.';
                });
        })();
        </script>
    </section>
</main>

<?php /*  ------------------ TARTALOM VÉGE ----------------------- */  ?>
<?php include 'includes/sitemap.php'; ?>
<?php include 'includes/footer.php'; ?>
