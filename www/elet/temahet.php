<?php include '../includes/constants.php'; ?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */  ?>
<?php $pageTitle = 'Témahét' . $pageTitlePostfix; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidenav.php'; ?>
<?php include '../includes/banner.php'; ?>
<?php include '../includes/menubar.php'; ?>

<?php /*  ------------------ TARTALOM ELEJE ----------------------- */  ?>
<main id="page-content">
    <section id="sample-page">
          <h1>Témahét</h1>

        <div class="tabs-container">
            <div class="tabs-header">
                <button class="tab-button active" onclick="openTab(event, 'code-week')">EU code week</button>
                <button class="tab-button" onclick="openTab(event, 'digitalis')">Digitális témahét</button>
                <button class="tab-button" onclick="openTab(event, 'fenntarthatosag')">Fenntarthatósági témahét</button>
                <button class="tab-button" onclick="openTab(event, 'penzhet')">Pénzhét</button>
            </div>

            <div id="code-week" class="tab-content active">
                <p style="text-align: center;">
                    <a href="#"
                       class="btn-large-animated" target="_blank">EU code week</a>
                </p>
            </div>

            <div id="digitalis" class="tab-content">
                <p style="text-align: center;">
                    <a href="#"
                       class="btn-large-animated" target="_blank">Digitális témahét</a>
                </p>
            </div>

            <div id="fenntarthatosag" class="tab-content">
                <p style="text-align: center;">
                    <a href="#"
                       class="btn-large-animated" target="_blank">Fenntarthatósági témahét</a>
                </p>
            </div>

            <div id="penzhet" class="tab-content">
                <p style="text-align: center;">
                    <a href="#"
                       class="btn-large-animated" target="_blank">Pénzhét</a>
                </p>
            </div>
        </div>


        <script>
            function openTab(evt, tabId) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tab-content");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].classList.remove("active");
                }
                tablinks = document.getElementsByClassName("tab-button");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].classList.remove("active");
                }
                document.getElementById(tabId).classList.add("active");
                evt.currentTarget.classList.add("active");
            }
        </script>

    </section>
</main>


<?php /*  ------------------ TARTALOM VÉGE ----------------------- */  ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>