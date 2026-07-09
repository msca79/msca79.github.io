<?php $basePath = '../'; ?>
<?php include '../includes/constants.php'; ?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */ ?>
<?php $pageTitle = 'Hit- és erkölcstan ' . $pageTitlePostfix; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidenav.php'; ?>
<?php include '../includes/banner.php'; ?>
<?php include '../includes/menubar.php'; ?>


<style>
    .church-block {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        padding: 15px;
        background: #fcfcfc;
        border: 1px solid #eee;
        border-radius: 8px;
        margin-bottom: 20px;
        align-items: flex-start;
    }

    .church-info {
        flex: 1;
        min-width: 250px;
    }

    .church-info h2 {
        margin-top: 0;
        margin-bottom: 10px;
        border-bottom: none;
        padding-bottom: 0;
        font-size: 1.4em;
    }

    .church-contact {
        margin-top: 10px;
    }

    .church-contact .item {
        margin: 5px 0;
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.95em;
    }

    .church-materials {
        flex: 1;
        min-width: 250px;
    }

    .church-materials .disclosure-list {
        margin-bottom: 0;
        gap: 8px;
    }

    .church-materials .disclosure-list a {
        padding: 8px 12px;
        font-size: 0.9em;
    }

    @media (max-width: 600px) {
        .church-block {
            flex-direction: column;
        }
    }
</style>

<?php /*  ------------------ TARTALOM ELEJE ----------------------- */ ?>
<main id="page-content">
    <section id="sample-page">
        <h1>Hit- és erkölcstan </h1>

        <div class="church-block">
            <div class="church-info">
                <h2>Erkölcstan</h2>
            </div>
            <div class="church-materials">
                <div class="disclosure-list">
                    <a href="https://www.csvmg.hu/upload/file/3.%20sz%C3%A1m%C3%BA%20mell%C3%A9klet%20etika%20hit-%20%C3%A9s%20erk%C3%B6lcstan%20jelentkez%C3%A9si%20lap%202026.doc"
                       target="_blank">
                        Hit és erkölcstan jelentkezési lap
                    </a>
                    <a href="http://csvmg.hu/upload/file/2015_16/erkolcstanrol.pdf" target="_blank">
                        Szórólap
                    </a>
                </div>
            </div>
        </div>

        <!-- ***************************** EVANGÉLIKUS ******************************* -->
        <div class="church-block">
            <div class="church-info">
                <h2>Evangélikus</h2>
                <div class="church-contact">
                    <div class="item">
                        <strong>Farkas Enikő </strong>
                    </div>
                </div>
            </div>
            <div class="church-materials">
                <div class="disclosure-list">
                    <a href="http://csvmg.hu/upload/file/2020_2021/MEE%20SzorolapB.pdf" target="_blank">
                        Szórólap
                    </a>
                    <a href="https://hitoktatas.lutheran.hu/tajekoztato-gyik/index.html" target="_blank">
                        Tájékoztató
                    </a>
                </div>
            </div>
        </div>

        <!-- ***************************** HITGYÜLEKEZETE ******************************* -->
        <div class="church-block">
            <div class="church-info">
                <h2>Hit gyülekezete</h2>
                <div class="church-contact">
                    <div class="item">
                        <strong>Nemes Ágnes</strong>
                    </div>
                    <div class="item">
                        <i class="ti ti-globe"> </i>
                        1103. Budapest Gyömrői út 69.
                    </div>
                </div>
            </div>
            <div class="church-materials">
                <div class="disclosure-list">
                    <a href="http://csvmg.hu/upload/file/201920/A%20Hit%20Gy%C3%BClekezete%20%C3%A1ltal%C3%A1nos%20iskolai%20hit.docx"
                       target="_blank">
                        Szórólap
                    </a>
                    <a href="http://www.hiteserkolcstan.hu/" target="_blank">
                        A Hit Gyülekezete hit- és erkölcstan oktatásának honlapja
                    </a>
                    <a href="https://youtu.be/wf5abIeeF_U" target="_blank">
                        you tube
                    </a>
                    <a href="https://www.facebook.com/hiteserkolcstan" target="_blank">
                        facebook
                    </a>
                    <a href="https://www.instagram.com/hiteserkolcstan/" target="_blank">
                        insta
                    </a>
                </div>
            </div>
        </div>

        <!-- ***************************** KATÓLIKUS ******************************* -->
        <div class="church-block">
            <div class="church-info">
                <h2>Katolikus</h2>
                <div class="church-contact">
                    <div class="item">
                        <strong>Czigány Tiborné</strong>
                    </div>
                    <div class="item">
                        <i class="ti ti-phone"> </i>
                        +36 20 971 3054
                    </div>
                </div>
            </div>
            <div class="church-materials">
                <div class="disclosure-list">
                    <a href="http://csvmg.hu/upload/file/2020_2021/katolikus_tajekoztato_2021.pdf"
                       target="_blank">
                        Szórólap
                    </a>
                    <a href="https://www.youtube.com/watch?v=tOubkG0-ddI&feature=emb_title" target="_blank">
                        You Tube
                    </a>
                </div>
            </div>
        </div>

        <!-- ***************************** Református ******************************* -->
        <div class="church-block">
            <div class="church-info">
                <h2>Református</h2>
                <div class="church-contact">
                    <div class="item">
                        <strong>Zámbóné Ivanics Hajnalka, Zámbó András, Filótás Bálint</strong>
                    </div>
                </div>
            </div>
            <div class="church-materials">
                <div class="disclosure-list">
                    <a href="https://drive.google.com/file/d/1x9mbdpKYdeKJbbI5izgJzt6hHyHgWHQd/view?usp=sharing"
                       target="_blank">
                        Szórólap
                    </a>
                    <a href="https://csvmg-my.sharepoint.com/:w:/g/personal/tar_marianna_csvmg_onmicrosoft_com/ERMvdWPpR8RItdRXs4n8XQ8BF18TeQfYum8isc_vsclBdw?e=JfftJN"
                       target="_blank">
                        Szórólap #2
                    </a>
                </div>
            </div>
        </div>

        <!-- ***************************** Unitárius ******************************* -->
        <div class="church-block">
            <div class="church-info">
                <h2>Unitárius</h2>
            </div>
            <div class="church-materials">
                <div class="disclosure-list">
                    <a href="http://www.csvmg.hu/upload/file/unitarius_ismerteto.pdf"
                       target="_blank">
                        Szórólap
                    </a>
                </div>
            </div>
        </div>

        <!-- ***************************** Mazsihisz ******************************* -->
        <div class="church-block">
            <div class="church-info">
                <h2>Mazsihisz</h2>
            </div>
            <div class="church-materials">
                <div class="disclosure-list">
                    <a href="https://csvmg-my.sharepoint.com/:b:/g/personal/tar_marianna_csvmg_onmicrosoft_com/EYhhjR06GRVPhpXSZ23jxVMBBcMsyH_I77qi241_ym5joQ?e=JGPZK4"
                       target="_blank">
                        Szórólap
                    </a>
                </div>
            </div>
        </div>

        <!-- ***************************** EMIH ******************************* -->
        <div class="church-block">
            <div class="church-info">
                <h2>EMIH</h2>
            </div>
            <div class="church-materials">
                <div class="disclosure-list">
                    <a href="http://csvmg.hu/upload/file/202324/hittan_EMIH.pdf"
                       target="_blank">
                        Szórólap
                    </a>
                </div>
            </div>
        </div>

        <!-- ***************************** Adventista ******************************* -->
        <div class="church-block">
            <div class="church-info">
                <h2>Adventista</h2>
            </div>
            <div class="church-materials">
                <div class="disclosure-list">
                    <a href="http://csvmg.hu/upload/file/201819/Bibliaoktatas%20az%20egyhaz%20szerv%20A5.pdf"
                       target="_blank">
                        Szórólap
                    </a>
                </div>
            </div>
        </div>


        <!-- ***************************** Átiratkozás ******************************* -->

        <p>
            Kedves Szülők! <br>
            Felhívjuk figyelmüket, hogy minden évben lehetőség nyílik az Etika és a Hit- és erkölcstan választás
            megváltoztatására.
            Amennyiben változtatni kívánnak, írásos nyilatkozatukat a titkárságon minden év május 20-ig adhatják le,
            a késve érkezett nyilatkozatokat nem áll módunkban elfogadni. <br>

            <i>„A hit- és erkölcstan órára történő jelentkezés részletes szabályait a nevelési-oktatási intézmények
                működéséről és a köznevelési intézmények névhasználatáról szóló 20/2012. (VIII. 31.) EMMI rendelet
                (a továbbiakban: EMMI rendelet) 14. (5) bekezdése, valamint a 182/A-182/B.§-a állapítja meg.” </i>
            <br>
            Tisztelettel:<br>
            Iskolavezetés<br>
        </p>


        <div class="todo-floating-container">

            <div class="iskola">
                Sok link mögött már nincs tartalom, vagy google drive, sharepoint. Ezeket vagy töröljük vagy a fájlt
                szerezzük meg
            </div>
        </div>

    </section>
</main>

<?php /*  ------------------ TARTALOM VÉGE ----------------------- */ ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>
