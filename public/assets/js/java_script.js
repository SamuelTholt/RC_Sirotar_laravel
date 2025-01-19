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

    document.addEventListener("DOMContentLoaded", function () {
        const carouselElement = document.getElementById('carouselExampleIndicators2');
        const intervalTime = 3000;
        let carousel;

        if (carouselElement) {
            // Inicializácia karuselu s automatickým posúvaním
            carousel = new bootstrap.Carousel(carouselElement, {
                interval: intervalTime,
                wrap: true
            });

            // Obsluha resetovania intervalu
            const resetCarouselInterval = () => {
                carousel.pause(); // Zastaví aktuálny cyklus
                setTimeout(() => carousel.cycle(), intervalTime); // Znovu spustí cyklus po stanovenom intervale
            };

            // Priradenie udalostí pre šípky
            const prevButton = document.querySelector('.carousel-control-prev');
            const nextButton = document.querySelector('.carousel-control-next');

            if (prevButton && nextButton) {
                prevButton.addEventListener('click', resetCarouselInterval);
                nextButton.addEventListener('click', resetCarouselInterval);
            }

            // Priradenie udalostí pre indikátory (ol > li)
            const indicators = document.querySelectorAll('.carousel-indicators li');

            indicators.forEach(indicator => {
                indicator.addEventListener('click', resetCarouselInterval);
            });
        }
    });

});

document.addEventListener("DOMContentLoaded", function () {
    const modalImage = document.getElementById('modalImage');
    const enlargeableImages = document.querySelectorAll('.enlargeable-image');

    // Pri kliknutí na obrázok nastaví zdroj obrázka v modale
    enlargeableImages.forEach(image => {
        image.addEventListener('click', function () {
            const imgSrc = this.getAttribute('data-img-src');
            if (modalImage) {
                modalImage.setAttribute('src', imgSrc);
            }
        });
    });
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
