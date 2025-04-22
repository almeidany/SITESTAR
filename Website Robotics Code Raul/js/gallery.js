document.addEventListener('DOMContentLoaded', function () {
    const yearButtons = document.getElementById('yearButtons');
    const mainContent = document.getElementById('mainContent');
    const carouselInner = document.getElementById('carouselInner');

    // Anos disponíveis
    const years = [2024, 2025];
    const recentYear = Math.max(...years);

    // Subtítulos e imagens específicas para cada ano
    const data = {
        2024: {
            'Botlompyics': ['img/TESTE1GA.png', 'img/TESTE2GA.png'],
            'Festival Nacional da Robótica': ['img/2024/festival1.jpg', 'img/2024/festival2.jpg'],
            'Olimpiadas da Robótica': ['img/2024/olimpiadas1.jpg', 'img/2024/olimpiadas2.jpg'],
            'Roboparty': ['img/2024/roboparty1.jpg', 'img/2024/roboparty2.jpg'],
            'Atividades': ['img/2024/atividades1.jpg', 'img/2024/atividades2.jpg'],
            'Workshops': ['img/2024/workshops1.jpg', 'img/2024/workshops2.jpg']
        },
        2025: {
            'Botlompyics': ['img/TESTE1GA.png', 'img/TESTE2GA.png'],
            'Festival Nacional da Robótica': ['img/2024/festival1.jpg', 'img/2024/festival2.jpg'],
            'Olimpiadas da Robótica': ['img/2024/olimpiadas1.jpg', 'img/2024/olimpiadas2.jpg'],
            'Roboparty': ['img/2024/roboparty1.jpg', 'img/2024/roboparty2.jpg'],
            'Atividades': ['img/2024/atividades1.jpg', 'img/2024/atividades2.jpg'],
            'Workshops': ['img/2024/workshops1.jpg', 'img/2024/workshops2.jpg']
        }
    };

    // Função para carregar subtítulos e imagens
    function loadContent(year) {
        mainContent.innerHTML = '';
        const yearData = data[year];

        for (const subtitle in yearData) {
            const colElement = document.createElement('div');
            colElement.className = 'col-lg-4 col-md-6 col-sm-12 mb-4';

            const cardElement = document.createElement('div');
            cardElement.className = 'card h-100';

            const imageElement = document.createElement('img');
            imageElement.src = yearData[subtitle][0];
            imageElement.alt = subtitle;
            imageElement.className = 'card-img-top img-fluid';
            imageElement.style.cursor = 'pointer';
            imageElement.addEventListener('click', () => {
                openAlbumModal(year, subtitle);
            });

            const cardBody = document.createElement('div');
            cardBody.className = 'card-body text-center';

            const subtitleText = document.createElement('h5');
            subtitleText.className = 'card-title';
            subtitleText.textContent = subtitle;

            cardBody.appendChild(subtitleText);
            cardElement.appendChild(imageElement);
            cardElement.appendChild(cardBody);
            colElement.appendChild(cardElement);
            mainContent.appendChild(colElement);
        }

        // Atualizar botão ativo
        document.querySelectorAll('#yearButtons .btn').forEach(btn => {
            btn.classList.remove('active');
            btn.classList.remove('btn-primary');
            btn.classList.add('btn-outline-primary');
        });
        document.querySelector(`#yearButtons .btn[data-year="${year}"]`).classList.add('active', 'btn-primary');
        document.querySelector(`#yearButtons .btn[data-year="${year}"]`).classList.remove('btn-outline-primary');
    }

    // Função para abrir o modal do álbum
    function openAlbumModal(year, subtitle) {
        carouselInner.innerHTML = '';
        const albumImages = data[year][subtitle];

        albumImages.forEach((image, index) => {
            const carouselItem = document.createElement('div');
            carouselItem.className = 'carousel-item' + (index === 0 ? ' active' : '');

            const imgElement = document.createElement('img');
            imgElement.src = image;
            imgElement.className = 'd-block w-100 img-fluid';
            imgElement.alt = subtitle;

            carouselItem.appendChild(imgElement);
            carouselInner.appendChild(carouselItem);
        });

        const modal = new bootstrap.Modal(document.getElementById('albumModal'));
        document.getElementById('albumModalLabel').textContent = subtitle;
        modal.show();
    }

    // Injetar botões de ano
    years.forEach(year => {
        const button = document.createElement('button');
        button.className = 'btn btn-outline-primary mx-2 my-1';
        button.textContent = year;
        button.setAttribute('data-year', year);
        button.addEventListener('click', () => {
            loadContent(year);
        });
        yearButtons.appendChild(button);
    });

    // Carregar automaticamente o ano mais recente
    loadContent(recentYear);
});