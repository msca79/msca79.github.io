<section class="logok-section">
    <div class="inner">
        <div class="logok-grid">
            <a href="images/logok/bethlen-gabor-alapkezelo.jpg" class="glightbox">
                <img src="images/logok/bethlen-gabor-alapkezelo.jpg" alt="Bethlen Gábor Alapkezelő">
            </a>
            <a href="images/logok/codeweek.png" class="glightbox">
                <img src="images/logok/codeweek.png" alt="CodeWeek">
            </a>
            <a href="images/logok/showcase-school-2025-2026.jpg" class="glightbox">
                <img src="images/logok/showcase-school-2025-2026.jpg" alt="Showcase">
            </a>
            <a href="images/logok/digitalis_temahet.png" class="glightbox">
                <img src="images/logok/digitalis_temahet.png" alt="Digitális Témahét">
            </a>
            <a href="images/logok/elte.jpg" class="glightbox">
                <img src="images/logok/elte.jpg" alt="ELTE">
            </a>
            <a href="images/logok/erasmus.png" class="glightbox">
                <img src="images/logok/erasmus.png" alt="Erasmus+">
            </a>
            <a href="images/logok/hatartalanul.png" class="glightbox">
                <img src="images/logok/hatartalanul.png" alt="Határtalanul">
            </a>
            <a href="images/logok/magyar-kormany.png" class="glightbox">
                <img src="images/logok/magyar-kormany.png" alt="Magyar Kormány">
            </a>
            <a href="images/logok/microsoft-innovativ.jpg" class="glightbox">
                <img src="images/logok/microsoft-innovativ.jpg" alt="Microsoft Innovatív Iskola">
            </a>
            <a href="images/logok/nemzeti-orokseg.jpg" class="glightbox">
                <img src="images/logok/nemzeti-orokseg.jpg" alt="Nemzeti Örökség Intézete">
            </a>
            <a href="images/logok/orokos-okoiskola.jpg" class="glightbox">
                <img src="images/logok/orokos-okoiskola.jpg" alt="Örökös Ökoiskola">
            </a>
            <a href="images/logok/prosuli.png" class="glightbox">
                <img src="images/logok/prosuli.png" alt="ProSuli">
            </a>
            <a href="images/logok/ute.jpg" class="glightbox">
                <img src="images/logok/ute.jpg" alt="UTE">
            </a>
        </div>
    </div>
</section>

<!-- GLightbox CSS -->
<style>
    .glightbox-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 999999 !important;
        overflow: hidden;
        -ms-touch-action: none;
        touch-action: none;
        -webkit-text-size-adjust: 100%;
        -moz-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        text-size-adjust: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        outline: none;
    }

    .glightbox-container.inactive {
        display: none;
    }

    .glightbox-mobile .glightbox-container {
        -webkit-tap-highlight-color: transparent;
    }

    .glightbox-overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.7);
        will-change: opacity;
    }

    .glightbox-clean .gslide-description {
        background: #fff;
    }

    .glightbox-clean .gslide-title {
        color: #000;
        font-family: arial;
        font-weight: 400;
        font-size: 1.2em;
        margin-bottom: 7px;
    }

    .glightbox-clean .gslide-content {
        background: #fff;
    }

    .glightbox-clean .gslide-media {
        box-shadow: 1px 2px 9px 0 rgba(0, 0, 0, 0.65);
    }

    .gslide {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        display: none;
        align-items: center;
        justify-content: center;
        transition: opacity 0.4s ease;
    }

    .gslide.current {
        opacity: 1;
        z-index: 999;
        display: flex;
    }

    .gslide.prev {
        opacity: 1;
        z-index: 998;
        display: flex;
    }

    .gslide-inner-content {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .gslide-media {
        max-width: 100%;
        max-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .gslide-media img {
        max-width: 60vw;
        max-height: 60vh;
        object-fit: contain;
        background: #fff;
        padding: 10px;
        border-radius: 8px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .gclose, .gnext, .gprev {
        z-index: 99999;
        cursor: pointer;
        width: 44px;
        height: 44px;
        border: none;
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgba(0, 0, 0, 0.5);
        color: #fff;
        border-radius: 50%;
        position: absolute;
    }

    .gclose {
        top: 10%;
        right: 10%;
    }

    .gprev {
        top: 50%;
        left: 10%;
        transform: translateY(-50%);
    }

    .gnext {
        top: 50%;
        right: 10%;
        transform: translateY(-50%);
    }

    .gclose:hover, .gnext:hover, .gprev:hover {
        background: rgba(0, 0, 0, 0.8);
    }
</style>

<!-- GLightbox Inline JS (Miniaturized simple implementation for demo) -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const links = document.querySelectorAll('.glightbox');
        if (links.length === 0) return;

        // Create lightbox elements
        const container = document.createElement('div');
        container.className = 'glightbox-container inactive';
        container.innerHTML = `
        <div class="glightbox-overlay"></div>
        <button class="gclose"><i class="ti ti-x"></i></button>
        <button class="gprev"><i class="ti ti-chevron-left"></i></button>
        <button class="gnext"><i class="ti ti-chevron-right"></i></button>
        <div class="glightbox-slides"></div>
    `;
        document.body.appendChild(container);

        const slidesContainer = container.querySelector('.glightbox-slides');
        const closeBtn = container.querySelector('.gclose');
        const prevBtn = container.querySelector('.gprev');
        const nextBtn = container.querySelector('.gnext');
        let currentIndex = 0;

        const showSlide = (index) => {
            if (index < 0) index = links.length - 1;
            if (index >= links.length) index = 0;
            currentIndex = index;

            slidesContainer.innerHTML = `
            <div class="gslide current">
                <div class="gslide-inner-content">
                    <div class="gslide-media">
                        <img src="${links[currentIndex].href}" alt="">
                    </div>
                </div>
            </div>
        `;
            container.classList.remove('inactive');
            document.body.style.overflow = 'hidden';
        };

        links.forEach((link, index) => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                showSlide(index);
            });
        });

        closeBtn.addEventListener('click', () => {
            container.classList.add('inactive');
            document.body.style.overflow = '';
        });

        prevBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            showSlide(currentIndex - 1);
        });

        nextBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            showSlide(currentIndex + 1);
        });

        container.addEventListener('click', (e) => {
            if (e.target === container || e.target.className === 'glightbox-overlay' || e.target.className.includes('gslide-inner-content')) {
                container.classList.add('inactive');
                document.body.style.overflow = '';
            }
        });

        document.addEventListener('keydown', (e) => {
            if (container.classList.contains('inactive')) return;
            if (e.key === 'Escape') closeBtn.click();
            if (e.key === 'ArrowLeft') prevBtn.click();
            if (e.key === 'ArrowRight') nextBtn.click();
        });
    });
</script>
