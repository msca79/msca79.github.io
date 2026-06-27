<?php $basePath = '../'; ?>
<?php include '../includes/constants.php'; ?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */ ?>
<?php $pageTitle = 'Tanórán kívüli sportolás' . $pageTitlePostfix; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidenav.php'; ?>
<?php include '../includes/banner.php'; ?>
<?php include '../includes/menubar.php'; ?>

<style>
    .item {
        margin: 20px;
        display: block;
    }

    .flex-container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 20px;
    }

    .flex-container .content {
        flex: 1;
    }

    .flex-container img {
        max-width: 300px;
        height: auto;
    }
</style>

<?php /*  ------------------ TARTALOM ELEJE ----------------------- */ ?>
<main id="page-content">
    <section id="sample-page">
        <h1>Tanórán kívüli sportolás</h1>


        <div class="highlight-box">
            <h2>UTE foci</h2>

            <p>
                Iskolánkban az UTE Akadémia tart labdarúgó szakkört. Szeretettel várják az alsó tagozatos lányok és fiúk
                jelentkezését. A foglalkozás célja a labdarúgás, mint sportág megismerése, elsajátítása alap szinten.
                Ezen felül a gyerekek képességeit koordinációs gyakorlatokkal, labdás ügyességi feladatokkal fejlesztik
                az oktatók.
            </p>

            <p>
                <span class="item">
                   <strong>Mihalik István</strong>
                </span>

                <span class="item">
                    <i class="ti ti-phone"> </i>
                    Telefon:
                   +36 20 505 9503
                </span>

                <span class="item">
                    <i class="ti ti-mail"> </i>
                    E-mail:
                    <a href="mailto:utemihalik@gmail.com">utemihalik@gmail.com</a>
                </span>
            </p>
        </div>

        <div class="highlight-box">
            <h2>Hiphop</h2>

            <div class="flex-container">
                <div class="content">
                    <span class="item">
                           <strong>
                               <a href=" https://www.facebook.com/szabok86"
                                  target="_blank">Szabó Krisztián Zavon</a>
                           </strong>
                    </span>

                    <span class="item">
                        <i class="ti ti-phone"> </i>
                        Telefon: +36 70 886 1378
                    </span>

                    <p>
                        Hétfő és szerda 16:00 - 17:00
                    </p>
                </div>

                <img src="https://scontent.fbud5-1.fna.fbcdn.net/v/t51.82787-15/539536086_17920982226136917_5683164278830566813_n.jpg?stp=dst-jpg_tt6&cstp=mx1080x1350&ctp=s640x640&_nc_cat=107&ccb=1-7&_nc_sid=127cfc&_nc_ohc=Al66omWEmgMQ7kNvwG6aFOS&_nc_oc=AdrXoKWOPFrLOKA3ISDXRz9eo9cFgxuCpTNujzcnBEZy-AhM2YYgHWEblOO5dNXkv5A&_nc_zt=23&_nc_ht=scontent.fbud5-1.fna&_nc_gid=eVVxqWG-dSLgFmGInZ9_nw&_nc_ss=7b2a8&oh=00_Af8bWk8JtvXd5iXEzFLB2jv4B_9YuR1UbnXZOXjvEcP9yA&oe=6A456DCA">
            </div>

        </div>

        <div class="highlight-box">
            <h2>Dzsúdó</h2>

        </div>


        <div class="todo-floating-container">
            <div class="iskola">
                minden itt van, vannak prospektusok, elérhetőségek?
                Van egy másik hiphop csapat is, ha jól tudom.
            </div>
            <div class="iskola">
                Van más UTE ? röplabda stb?
            </div>
            <div class="iskola">
                dzsúdó infó? karate?
            </div>

        </div>


    </section>
</main>

<?php /*  ------------------ TARTALOM VÉGE ----------------------- */ ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>
