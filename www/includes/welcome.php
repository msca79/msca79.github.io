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
