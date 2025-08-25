document.addEventListener("DOMContentLoaded", function () {
    const carouselElement = document.getElementById("carouselSlider");
    if (!carouselElement) {
        console.warn("Carousel element not found.");
        return;
    }

    const defaultImageDuration = 5000; // Duration for images in milliseconds

    const carousel = new bootstrap.Carousel(carouselElement, {
        interval: false, // Set interval to false to prevent automatic cycling initially
        wrap: true
    });

    // Function to handle video slides
    const handleVideoSlide = (video) => {
        // Pause the carousel to prevent it from auto-advancing
        carousel.pause();

        video.currentTime = 0;

        // Try to play the video
        video.play()
            .then(() => {
                console.log("Video started playing.");
                // When the video ends, move to the next slide
                video.onended = () => {
                    carousel.next();
                };
            })
            .catch(error => {
                console.warn("Video autoplay failed, transitioning after default duration:", error);
                // If autoplay fails (e.g., due to browser restrictions),
                // advance to the next slide after the image duration
                setTimeout(() => carousel.next(), defaultImageDuration);
            });
    };

    // Function to handle image slides
     const handleImageSlide = () => {
        // Belirtilen süre (5000ms) sonra bir sonraki slayta geçişi başlat
        setTimeout(() => {
            carousel.next();
        }, defaultImageDuration);
    };

    // Event listener for when a slide has completed its transition
    carouselElement.addEventListener('slid.bs.carousel', function (event) {
        const activeSlide = event.relatedTarget;
        const video = activeSlide.querySelector("video");

        if (video) {
            handleVideoSlide(video);
        } else {
            handleImageSlide();
        }
    });

    // Initial check for the first slide
    const firstSlide = carouselElement.querySelector(".carousel-item.active");
    if (firstSlide) {
        const video = firstSlide.querySelector("video");
        if (video) {
            handleVideoSlide(video);
        } else {
            handleImageSlide();
        }
    }
});