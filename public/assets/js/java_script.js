document.addEventListener("DOMContentLoaded", function () {
    const targets = document.querySelectorAll('h2.hidden, p.hidden, ul.hidden, div.hidden');

    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Odstráni triedu 'hidden' a pridá 'grow-animation'
                entry.target.classList.remove('hidden');
                entry.target.classList.add('grow-animation');

                // Prestane sledovať element, ak je už viditeľný a animovaný
                observer.unobserve(entry.target);
            }
        });
    };

    const observerOptions = {
        threshold: 0.5 // Spustí animáciu, keď je viditeľných 50% prvku
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    // Sledovanie všetkých h2 a p elementov s triedou 'hidden'
    targets.forEach(target => observer.observe(target));



    const totalImages = 21;
    const imagesPerSlide = 3;
    const carouselInner = document.getElementById('carousel-inner-container');

    for (let i = 1; i <= totalImages; i += imagesPerSlide) {
        const carouselItem = document.createElement('div');
        carouselItem.className = 'carousel-item';

        if (i === 1) {
            carouselItem.classList.add('active');
        }

        const row = document.createElement('div');
        row.className = 'row';

        for (let j = 0; j < imagesPerSlide; j++) {
            if (i + j <= totalImages) {
                const col = document.createElement('div');
                col.className = 'col-md-4 mb-3';

                const card = document.createElement('div');
                card.className = 'card';
                card.style = 'background:black';
                const img = document.createElement('img');
                img.className = 'img-fluid rounded';
                img.style = 'width: 640px; height: 360px; object-fit: cover;';
                img.alt = `Obrázok ${i + j}`;
                img.src = `assets/images/${i + j}.jpg`;


                card.appendChild(img);
                col.appendChild(card);
                row.appendChild(col);
            }
        }

        carouselItem.appendChild(row);
        carouselInner.appendChild(carouselItem);
    }

});


document.addEventListener("DOMContentLoaded", function () {
    const targets = document.querySelectorAll('h2.hidden1, p.hidden1, ul.hidden1, div.hidden1');

    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Odstráni triedu 'hidden' a pridá 'grow-animation'
                entry.target.classList.remove('hidden1');
                entry.target.classList.add('slide-animation');

                // Prestane sledovať element, ak je už viditeľný a animovaný
                observer.unobserve(entry.target);
            }
        });
    };

    const observerOptions = {
        threshold: 0.5 // Spustí animáciu, keď je viditeľných 50% prvku
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    // Sledovanie všetkých h2 a p elementov s triedou 'hidden'
    targets.forEach(target => observer.observe(target));
});
