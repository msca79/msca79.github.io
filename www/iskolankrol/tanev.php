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

    .event-table tr.month-header td {
        background: #e3f2fd;
        font-weight: bold;
        color: #0d47a1;
        /*padding-top: 0.75rem;*/
        /*padding-bottom: 0.75rem;*/
    }

    .event-table .date {
        white-space: nowrap;
        color: #555;
        width: 200px;
    }

    .event-table .cat {
        width: 60px;
        text-align: center;
    }

    .badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        font-size: 1.2rem;
    }

    .badge-tanev {
        background: #dceefb;
        color: #1a5e8a;
    }

    .badge-szunet {
        background: #e8f5e9;
        color: #2e6b3e;
    }

    .badge-vizsga {
        background: #fff3e0;
        color: #8a4e00;
    }

    .badge-program {
        background: #f3e5f5;
        color: #7b1fa2;
    }

</style>

<?php /*  ------------------ TARTALOM ELEJE ----------------------- */ ?>
<main id="page-content">
    <section id="sample-page">


        <h1>Tanév, eseményeink </h1>


        <table class="event-table">
            <tr>
                <th>Dátum</th>
                <th>Kategória</th>
                <th>Esemény</th>
            </tr>

            <?php
            $json_data = file_get_contents('tanev.json');
            $events = json_decode($json_data, true);

            if ($events) {
                $category_labels = [
                        'badge-tanev' => 'Tanév rendje',
                        'badge-szunet' => 'Szünet',
                        'badge-vizsga' => 'Vizsga / Mérés',
                        'badge-program' => 'Program / Esemény'
                ];
                foreach ($events as $event) {
                    $isMonthHeader = empty($event['category_class']) && !empty($event['date']);
                    $rowClass = $isMonthHeader ? ' class="month-header"' : '';

                    $label = $category_labels[$event['category_class']] ?? '';
                    echo '<tr' . $rowClass . '>';
                    echo '<td class="date">' . $event['date'] . '</td>';
                    echo '<td class="cat">';
                    if (!$isMonthHeader) {
                        echo '<span class="badge ' . $event['category_class'] . '" title="' . $label . '"><i class="ti ' . $event['category_icon'] . '"></i></span>';
                    }
                    echo '</td>';
                    echo '<td>';
                    echo $event['title'];
                    if (!empty($event['description'])) {
                        echo ' ' . $event['description'];
                    }
                    echo '</td>';
                    echo '</tr>';
                }
            }
            ?>
        </table>

        <i> <a href="https://moderniskola.hu/2026/07/itt-a-2026-2027-es-tanev-rendje-naptarral/">
                adatok forrása a moderniskola.hu</a>
        </i>

        <div class="todo-floating-container">
            <div class="iskola">
                ellenőrizni
            </div>
        </div>

    </section>
</main>

<?php /*  ------------------ TARTALOM VÉGE ----------------------- */ ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>
