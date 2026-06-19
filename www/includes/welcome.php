<!-- ═══════════════════════ HERO ═══════════════════════ -->
<section id="hero">
    <div class="hero-slides">
        <img src="<?= $basePath ?? '' ?>images/banner.png" class="hero-slide active" alt="Iskolánk 1">
    </div>
    <img src="<?= $basePath ?? '' ?>images/logo.png" alt="logo" class="hero-stamp">
    <div class="hero-edge"></div>
    <div class="hero-placeholder" id="hero-placeholder" style="display:none">
        <i class="ti ti-building-school"></i>
        Újpesti Csokonai Vitéz Mihály Általános Iskola és Gimnázium
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    let currentSlide = 0;
    const slides = document.querySelectorAll('.hero-slide');
    const heroPlaceholder = document.getElementById('hero-placeholder');
    if (slides.length > 0) {
        setInterval(() => {
            if (slides.length < 2) return;
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }, 10000);
        slides.forEach(img => {
            img.onerror = function () {
                this.style.display = 'none';
                if (Array.from(slides).every(s => s.style.display === 'none')) {
                    if (heroPlaceholder) heroPlaceholder.style.display = 'flex';
                }
            };
        });
    } else if (heroPlaceholder) {
        heroPlaceholder.style.display = 'flex';
    }
});
</script>

<?php
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

$statusText = '';
$subText = '';
$icon = 'ti-clock';

if ($dayOfWeek > 5) {
    $statusText = 'Hétvége van';
    $subText = 'Az iskola zárva tart.';
} else {
    $currentLesson = null;
    $nextLesson = null;
    $isBreak = false;

    foreach ($schedule as $index => $lesson) {
        if ($currentTime >= $lesson['start'] && $currentTime < $lesson['end']) {
            $currentLesson = $lesson;
            if (isset($schedule[$index + 1])) {
                $nextLesson = $schedule[$index + 1];
            }
            break;
        }
        
        if ($currentTime < $lesson['start']) {
            $nextLesson = $lesson;
            $isBreak = true;
            break;
        }
    }

    if ($currentLesson) {
        $statusText = $currentLesson['id'] . '. óra van';
        $subText = $currentLesson['start'] . ' - ' . $currentLesson['end'];
        if ($nextLesson) {
            $subText .= ' | Következő: ' . $nextLesson['id'] . '. óra (' . $nextLesson['start'] . ')';
        } else {
            $subText .= ' | Ez az utolsó óra mára.';
        }
        $icon = 'ti-bell-ringing';
    } elseif ($isBreak) {
        if ($nextLesson['id'] == 1) {
            $statusText = 'Tanítás kezdete előtt';
            $subText = 'Első óra kezdete: ' . $nextLesson['start'];
        } else {
            $statusText = 'Szünet van';
            $subText = 'Következő: ' . $nextLesson['id'] . '. óra (' . $nextLesson['start'] . ')';
        }
        $icon = 'ti-coffee';
    } else {
        $statusText = 'A tanítás mára véget ért';
        $subText = 'Holnap találkozunk!';
        $icon = 'ti-moon';
    }
}
?>

<section class="bell-status">
    <div class="inner">
        <div class="status-card">
            <div class="status-icon">
                <i class="ti <?= $icon ?>"></i>
            </div>
            <div class="status-info">
                <div class="status-main"><?= $statusText ?></div>
                <div class="status-sub"><?= $subText ?></div>
            </div>
        </div>
    </div>
</section>
