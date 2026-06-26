<?php $basePath = '../'; ?>
<?php include '../includes/constants.php'; ?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */ ?>
<?php $pageTitle = 'Tanév rendje' . $pageTitlePostfix; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidenav.php'; ?>
<?php include '../includes/banner.php'; ?>
<?php include '../includes/menubar.php'; ?>


<style>
    .event-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.95rem;
    }

    .event-table th {
        background: #f0f0f0;
        text-align: left;
        padding: 0.5rem 0.75rem;
        border-bottom: 2px solid #ccc;
        font-weight: 600;
    }

    .event-table td {
        padding: 0.45rem 0.75rem;
        border-bottom: 1px solid #e0e0e0;
        vertical-align: top;
    }

    .event-table tr:last-child td {
        border-bottom: none;
    }

    .event-table .date {
        white-space: nowrap;
        color: #555;
        width: 200px;
    }

    .event-table .cat {
        width: 140px;
    }

    .badge {
        display: inline-block;
        font-size: 0.78rem;
        padding: 0.15rem 0.5rem;
        border-radius: 3px;
    }

    .badge-tanev {
        background: #dceefb;
        color: #1a5e8a;
    }

    .badge-szunet {
        background: #e8f5e9;
        color: #2e6b3e;
    }

    .badge-erettsegi {
        background: #fff3e0;
        color: #8a4e00;
    }

    .badge-felveteli {
        background: #fce4ec;
        color: #880030;
    }

    .badge-merés {
        background: #e0f2f1;
        color: #1a5f5a;
    }

    .badge-program {
        background: #fafafa;
        color: #444;
        border: 1px solid #ddd;
    }

</style>

<?php /*  ------------------ TARTALOM ELEJE ----------------------- */ ?>
<main id="page-content">
    <section id="sample-page">

        <h1>Tanév, eseményeink</h1>


        <table class="event-table">
            <tr>
                <th>Dátum</th>
                <th>Kategória</th>
                <th>Esemény</th>
            </tr>

            <tr>
                <td class="date">2026. szeptember 1. (kedd)</td>
                <td class="cat"><span class="badge badge-tanev">Tanév</span></td>
                <td>Első tanítási nap</td>
            </tr>
              <tr>
                <td class="date">2026. szeptember (később derül ki)</td>
                <td class="cat"><span class="badge badge-program">Program</span></td>
                <td>Futónap</td>
            </tr>
            <tr>
                <td class="date">2026. október 12–22.</td>
                <td class="cat"><span class="badge badge-erettsegi">Érettségi</span></td>
                <td>Őszi írásbeli érettségi vizsgák</td>
            </tr>
            <tr>
                <td class="date"></td>
                <td class="cat"><span class="badge badge-szunet">Szünet</span></td>
                <td>Őszi szünet előtti utolsó tanítási nap</td>
            </tr>
            <tr>
                <td class="date">2026. október 23. – november 1.</td>
                <td class="cat"><span class="badge badge-szunet">Szünet</span></td>
                <td>Őszi szünet. <br>
                    Utolsó tanítási nap: 2026. október 22. (csütörtök) <br>
                    Első tanítási nap: 2026. november 2. (hétfő) <br>
                </td>
            </tr>

            <tr>
                <td class="date">2026. november 5–9.</td>
                <td class="cat"><span class="badge badge-erettsegi">Érettségi</span></td>
                <td>Őszi emelt szintű szóbeli érettségi vizsgák</td>
            </tr>
            <tr>
                <td class="date">2026. november 16–20.</td>
                <td class="cat"><span class="badge badge-erettsegi">Érettségi</span></td>
                <td>Őszi középszintű szóbeli érettségi vizsgák</td>
            </tr>
            <tr>
                <td class="date">2026. december 1. (kedd)</td>
                <td class="cat"><span class="badge badge-felveteli">Felvételi</span></td>
                <td>Középiskolai felvételi írásbeli jelentkezési határidő</td>
            </tr>
             <tr>
                <td class="date">2026. december 12. (szombat)</td>
                <td class="cat"><span class="badge badge-szunet">Felvételi</span></td>
                <td>Szombati munkanap (nincs tanítás)</td>
            </tr>
            <tr>
                <td class="date">2026. december 19. – 2027. január 3.</td>
                <td class="cat"><span class="badge badge-szunet">Szünet</span></td>
                <td>Téli szünet<br>
                    Utolsó tanítási nap: 2026. december 18. (péntek)<br>
                    Első tanítási nap:2027. január 4. (hétfő)<br>
                </td>
            </tr>
            <tr>
                <td class="date">2027. január 22. (péntek)</td>
                <td class="cat"><span class="badge badge-tanev">Tanév</span></td>
                <td>Az első félév vége</td>
            </tr>
            <tr>
                <td class="date">2027. január 23. (szombat) 10:00</td>
                <td class="cat"><span class="badge badge-felveteli">Felvételi</span></td>
                <td>Középiskolai központi írásbeli felvételi vizsga</td>
            </tr>
            <tr>
                <td class="date">2027. január 29. (péntek)</td>
                <td class="cat"><span class="badge badge-tanev">Tanév</span></td>
                <td>Félévi értesítők kiadásának határideje</td>
            </tr>
            <tr>
                <td class="date">2027. február 3. (szerda) 14:00</td>
                <td class="cat"><span class="badge badge-felveteli">Felvételi</span></td>
                <td>Pótló központi írásbeli felvételi vizsga</td>
            </tr>
            <tr>
                <td class="date">2027. február 22. (hétfő)</td>
                <td class="cat"><span class="badge badge-felveteli">Felvételi</span></td>
                <td>Középfokú iskolai jelentkezés határideje</td>
            </tr>
            <tr>
                <td class="date">2027. március 1–5.</td>
                <td class="cat"><span class="badge badge-program">Témanap</span></td>
                <td>PÉNZ7 témahét</td>
            </tr>
            <tr>
                <td class="date">2027. március 1–19.</td>
                <td class="cat"><span class="badge badge-felveteli">Felvételi</span></td>
                <td>Középiskolai felvételi szóbeli vizsgák</td>
            </tr>
            <tr>
                <td class="date">2027. március 22. (hétfő)</td>
                <td class="cat"><span class="badge badge-felveteli">Felvételi</span></td>
                <td>Felvételi jegyzékek nyilvánosságra hozatalának határideje</td>
            </tr>
            <tr>
                <td class="date">2027. március 22. – május 28.</td>
                <td class="cat"><span class="badge badge-merés">Mérés</span></td>
                <td>Országos kompetenciamérések</td>
            </tr>
            <tr>
                <td class="date">2027. március 23. – április 4.</td>
                <td class="cat"><span class="badge badge-szunet">Szünet</span></td>
                <td>Tavaszi szünet<br>
                    Első tanítási nap:2027. április 5. (hétfő)
                </td>
            </tr>
            <tr>
                <td class="date">2027. április 5–9.</td>
                <td class="cat"><span class="badge badge-program">Témanap</span></td>
                <td>Digitális témahét</td>
            </tr>
            <tr>
                <td class="date">2027. április 19–23.</td>
                <td class="cat"><span class="badge badge-program">Témanap</span></td>
                <td>Fenntarthatósági témahét</td>
            </tr>
            <tr>
                <td class="date">2027. április 22–23.</td>
                <td class="cat"><span class="badge badge-iskola">Beiratkozás</span></td>
                <td>Általános iskolai beiratkozás (1. évfolyam)</td>
            </tr>
            <tr>
                <td class="date">2027. április 30. (péntek)</td>
                <td class="cat"><span class="badge badge-tanev">Tanév</span></td>
                <td>Tanév vége – középfokú iskolák végzősei</td>
            </tr>
            <tr>
                <td class="date">2027. május 3–24.</td>
                <td class="cat"><span class="badge badge-erettsegi">Érettségi</span></td>
                <td>Tavaszi írásbeli érettségi vizsgák</td>
            </tr>
            <tr>
                <td class="date">2026. május (később derül ki)</td>
                <td class="cat"><span class="badge badge-program">Program</span></td>
                <td>Futónap</td>
            </tr>
             <tr>
                <td class="date">2026. május (később derül ki)</td>
                <td class="cat"><span class="badge badge-program">Program</span></td>
                <td>Csokonai gála</td>
            </tr>
            <tr>
                <td class="date">2027. május (iskola által választott nap)</td>
                <td class="cat"><span class="badge badge-merés">Mérés</span></td>
                <td>Elsősök szövegértés-mérése</td>
            </tr>
            <tr>
                <td class="date">2027. május 28. (péntek)</td>
                <td class="cat"><span class="badge badge-tanev">Tanév</span></td>
                <td>Tanév vége – kétévfolyamos szakiskolák végzősei</td>
            </tr>
            <tr>
                <td class="date">2027. június 2–9.</td>
                <td class="cat"><span class="badge badge-erettsegi">Érettségi</span></td>
                <td>Tavaszi emelt szintű szóbeli érettségi vizsgák</td>
            </tr>
            <tr>
                <td class="date">2027. június 14–30.</td>
                <td class="cat"><span class="badge badge-erettsegi">Érettségi</span></td>
                <td>Tavaszi középszintű szóbeli érettségi vizsgák</td>
            </tr>
            <tr>
                <td class="date">2027. június 18. (péntek)</td>
                <td class="cat"><span class="badge badge-tanev">Tanév</span></td>
                <td>Utolsó tanítási nap</td>
            </tr>
        </table>

        <div class="todo-floating-container">
            <div class="iskola">
                Ez a tervezett 2027-es évre vonatkozik. Kiegészülne majd az iskolai eseményekkel (futónap)
            </div>

        </div>


    </section>
</main>

<?php /*  ------------------ TARTALOM VÉGE ----------------------- */ ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>
