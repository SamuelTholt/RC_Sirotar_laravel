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

    const carouselElement = document.getElementById('carouselExampleIndicators2');
    if (carouselElement) {
        new bootstrap.Carousel(carouselElement, {
            interval: false, // Vypnutie automatického posúvania
            wrap: true       // Povolenie cyklického posúvania
        });
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
