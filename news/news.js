document.addEventListener('DOMContentLoaded', () => {
    const newsContainer = document.getElementById('news-container');
    const archiveSelect = document.getElementById('archive-select');

    // Elérhető hírfájlok listája (időrendben, legújabb utoljára)
    const newsArchives = [
        { id: '20260713', file: 'news-20260713.json', label: '2026. július 13.' },
        { id: '20260720', file: 'news-20260720.json', label: '2026. július 20.' },
    ];

    // Legördülő menü feltöltése
    function setupArchiveSelect() {
        if (!archiveSelect) return;
        
        newsArchives.forEach(archive => {
            const option = document.createElement('option');
            option.value = archive.file;
            option.textContent = archive.label;
            archiveSelect.appendChild(option);
        });

        // Legfrissebb kiválasztása alapértelmezettként
        archiveSelect.value = newsArchives[newsArchives.length - 1].file;

        archiveSelect.addEventListener('change', (e) => {
            loadNews(e.target.value);
        });
    }

    function loadNews(filename) {
        newsContainer.innerHTML = '<p>Hírek betöltése...</p>';
        fetch(filename)
            .then(response => response.json())
            .then(newsData => {
                renderNews(newsData);
            })
            .catch(error => {
                console.error('Hiba a hírek betöltésekor:', error);
                newsContainer.innerHTML = '<p>Sajnos nem sikerült betölteni a híreket.</p>';
            });
    }

    function renderNews(news) {
        newsContainer.innerHTML = '';
        news.forEach(item => {
            const article = document.createElement('article');
            article.className = 'news-item';

            article.innerHTML = `
                <div class="date">${item.date}</div>
                <h2>${item.title}</h2>
                <p>${item.content}</p>
                <div class="source-link">Forrás: <a href="${item.sourceUrl}" target="_blank">${item.sourceName}</a></div>
            `;
            newsContainer.appendChild(article);
        });
    }

    // Inicializálás
    setupArchiveSelect();
    loadNews(newsArchives[newsArchives.length - 1].file);
});