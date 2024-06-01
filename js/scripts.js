// scripts.js

document.addEventListener('DOMContentLoaded', () => {
    const carouselImages = document.querySelector('.carousel-images');
    const images = carouselImages.querySelectorAll('img');
    let currentIndex = 0;
    const imageWidth = images[0].clientWidth;

    function scrollImages() {
        currentIndex++;
        if (currentIndex >= images.length) {
            currentIndex = 0;
        }
        carouselImages.style.transform = `translateX(${-currentIndex * imageWidth}px)`;
    }

    setInterval(scrollImages, 5000); // Scroll every 5 seconds
});
