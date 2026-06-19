<!-- ═══════════════════════ CATEGORIES ═══════════════════════ -->
<?php
date_default_timezone_set('Europe/Budapest');
$now = time();
if (isset($_GET['test_time'])) {
    $testTime = strtotime($_GET['test_time']);
    if ($testTime !== false) {
        $now = $testTime;
    }
}
$dayOfWeek = date('N', $now); // 1 (Mon) - 7 (Sun)
$currentTime = date('H:i', $now);

$schedule = [
    ['id' => 1, 'start' => '08:00', 'end' => '08:45'],
    ['id' => 2, 'start' => '09:00', 'end' => '09:45'],
    ['id' => 3, 'start' => '10:00', 'end' => '10:45'],
    ['id' => 4, 'start' => '10:55', 'end' => '11:40'],
    ['id' => 5, 'start' => '11:50', 'end' => '12:35'],
    ['id' => 6, 'start' => '12:45', 'end' => '13:30'],
    ['id' => 7, 'start' => '13:40', 'end' => '14:25'],
];

// Segmensek felépítése: óra, szünet, óra...
$timeline = [];
foreach ($schedule as $index => $lesson) {
    // Óra hozzáadása
    $timeline[] = [
        'type' => 'lesson',
        'label' => $lesson['id'] . '. óra',
        'start' => $lesson['start'],
        'end' => $lesson['end'],
        'active' => ($currentTime >= $lesson['start'] && $currentTime < $lesson['end']),
        'minutes' => 45
    ];

    // Szünet hozzáadása az óra után, ha van következő óra
    if (isset($schedule[$index + 1])) {
        $nextLesson = $schedule[$index + 1];
        $breakStart = $lesson['end'];
        $breakEnd = $nextLesson['start'];
        
        $start_ts = strtotime($breakStart);
        $end_ts = strtotime($breakEnd);
        $diff_min = round(abs($end_ts - $start_ts) / 60);

        $timeline[] = [
            'type' => 'break',
            'label' => 'szünet',
            'start' => $breakStart,
            'end' => $breakEnd,
            'active' => ($currentTime >= $breakStart && $currentTime < $breakEnd),
            'minutes' => $diff_min
        ];
    }
}

$isWeekend = ($dayOfWeek > 5);
$isOutOfSchool = false;
$currentStatus = '';

if (!$isWeekend) {
    $firstStart = $schedule[0]['start'];
    $lastEnd = end($schedule)['end'];
    if ($currentTime < $firstStart || $currentTime >= $lastEnd) {
        $isOutOfSchool = true;
    }
}

// Keressük meg az aktuális státuszt
foreach ($timeline as $item) {
    if ($item['active']) {
        $currentStatus = ' - ' . $item['label'];
        break;
    }
}
?>

<section id="categories">
    <div class="cat-grid" id="cat-grid">
        <div class="cat-card cat-bell">
            <div class="cat-header">
                <i class="ti ti-bell-ringing" aria-hidden="true"></i>
                <span>Csengetési rend</span>
            </div>
            <ul class="cat-links">
                <li style="border-bottom: 1px dashed var(--blue-100); margin-bottom: 5px; padding: 5px 20px; font-size: 14px; color: var(--blue-800); font-weight: 600; display: flex; align-items: center; gap: 8px;">
                    <i class="ti ti-clock"></i> Most: <?= $currentTime . $currentStatus ?>
                </li>
                <?php 
                // Csoportosítsuk az órákat és a hozzájuk tartozó szüneteket
                $rows = [];
                for ($i = 1; $i <= 7; $i++) {
                    $lesson = null;
                    $break = null;
                    foreach ($timeline as $item) {
                        if ($item['type'] === 'lesson' && $item['label'] === $i . '. óra') {
                            $lesson = $item;
                        }
                        if ($item['type'] === 'break' && strpos($item['start'], $schedule[$i-1]['end']) !== false) {
                             // Ez a szünet az aktuális óra után van
                             $break = $item;
                        }
                    }
                    $rows[] = ['lesson' => $lesson, 'break' => $break];
                }
                ?>
                <?php foreach ($rows as $row): ?>
                    <li style="display: flex; padding: 0; border-bottom: 1px solid rgba(0,0,0,0.03);">
                        <?php 
                            $l = $row['lesson'];
                            $b = $row['break'];
                            $lActive = $l && $l['active'];
                            $bActive = $b && $b['active'];
                        ?>
                        <div style="flex: 1; padding: 8px 12px 8px 20px; border-right: 1px solid rgba(0,0,0,0.05); <?= $lActive ? 'background: rgba(35, 115, 194, 0.15); font-weight: 700;' : '' ?>">
                            <span style="font-size: 13px; display: block; color: var(--cat-color);"><?= $l['label'] ?></span>
                            <span style="font-size: 12px; color: #666;"><?= $l['start'] ?> - <?= $l['end'] ?></span>
                        </div>
                        <div style="flex: 1; padding: 8px 20px 8px 12px; <?= $bActive ? 'background: rgba(35, 115, 194, 0.15); font-weight: 700;' : '' ?>">
                            <?php if ($b): ?>
                                <span style="font-size: 13px; display: block; color: var(--cat-color);">Szünet</span>
                                <span style="font-size: 12px; color: #666;"><?= $b['start'] ?> - <?= $b['end'] ?></span>
                            <?php else: ?>
                                <span style="font-size: 12px; color: #999; line-height: 2.8;">---</span>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const catGrid = document.getElementById('cat-grid');
    if (!catGrid) return;
    MENU.forEach(cat => {
        const card = document.createElement('div');
        card.className = `cat-card ${cat.class || ''}`;
        const linksHtml = cat.items.map(item => {
            return `<li><a href="${itemHref(item, cat)}">${getItemHtml(item)}</a></li>`;
        }).join('');
        card.innerHTML = `
            <div class="cat-header">
                <i class="ti ${cat.icon}" aria-hidden="true"></i>
                <span>${cat.name}</span>
            </div>
            <ul class="cat-links">${linksHtml}</ul>
        `;
        catGrid.appendChild(card);
    });
});
</script>
