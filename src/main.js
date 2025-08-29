import * as bootstrap from "bootstrap";
window.bootstrap = bootstrap;

import ScrollReveal from "scrollreveal";

document.addEventListener("DOMContentLoaded", function () {

  // ScrollReveal animations
  const sr = ScrollReveal({
    duration: 1000,
    origin: "top",
    distance: "50px",
    easing: "ease-in-out",
    reset: false,
  });

  sr.reveal(".scroll-reveal");
  sr.reveal(".scroll-reveal-bottom", {
    origin: "bottom",
    distance: "100px",
  });
  sr.reveal(".scroll-reveal-left", {
    origin: "left",
  });
  sr.reveal(".scroll-reveal-left-step-1", {
    origin: "left",
    distance: "100px",
  });
  sr.reveal(".scroll-reveal-left-step-2", {
    origin: "left",
    distance: "150px",
  });
  sr.reveal(".scroll-reveal-right", {
    origin: "right",
  });
  sr.reveal(".scroll-reveal-top", {
    origin: "top",
  });
  sr.reveal(".scroll-reveal-scale", {
    scale: 0.3,
    duration: 1200,
  });
  sr.reveal(".scroll-reveal-scale-end", {
    scale: 1.3,
    duration: 1200,
  });
  sr.reveal(".scroll-reveal-fade", {
    opacity: 0,
    distance: "30px",
  });

  // Get the navbar element outside of the function so it can be reused
  const navbar = document.querySelector(".navbar");

  function handleScroll() {
    const footer = document.getElementById("footer");
    const scrollToTop = document.getElementById("scroll-to-top");
    if (navbar) {
      if (window.scrollY > 50) {
        navbar.classList.add("navbar-scrolled");
      } else {
        navbar.classList.remove("navbar-scrolled");
      }
    }
    // Ensure footer and scroll-to-top elements exist before using them
    if (footer && scrollToTop) {
      const footerPosition = footer.getBoundingClientRect();
      const windowHeight = window.innerHeight;

      if (footerPosition.top < windowHeight) {
        scrollToTop.classList.remove("d-none");
      } else {
        scrollToTop.classList.add("d-none");
      }
    }
  }
  window.addEventListener("scroll", handleScroll);
});

/* CountUp.js */
import {
  CountUp
} from "countup.js";
document.querySelectorAll(".countup").forEach((el) => {
  const value = parseInt(el.dataset.value);
  if (!isNaN(value)) {
    const observer = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const counter = new CountUp(el, value);
            if (!counter.error) {
              counter.start();
              obs.unobserve(el);
            } else {
              console.error(counter.error);
            }
          }
        });
      }, {
        threshold: 0.6,
      }
    );

    observer.observe(el);
  }
});
/* CountUp.js - End */

//Custom Dropdown
document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll(".custom-dropdown-menu");

  dropdowns.forEach(function (dropdown) {
    const toggle = dropdown.querySelector(".dropdown-toggle");
    const menu = dropdown.querySelector(".dropdown-menu");

    let clickedOnce = false;

    dropdown.addEventListener("mouseenter", () => {
      if (window.innerWidth >= 1200) {
        toggle.classList.add("show");
        menu.classList.add("show");
      }
    });

    dropdown.addEventListener("mouseleave", () => {
      if (window.innerWidth >= 1200) {
        toggle.classList.remove("show");
        menu.classList.remove("show");
      }
    });

    toggle.addEventListener("click", function (e) {
      e.preventDefault();
      if (window.innerWidth >= 1200) {
        return (window.location.href = toggle.getAttribute("href"));
      } else {
        if (!clickedOnce) {
          toggle.classList.add("show");
          menu.classList.add("show");
          clickedOnce = true;
        } else {
          window.location.href = toggle.getAttribute("href");
        }
      }
    });
  });

  // Alt menü (dropdown-submenu) için yeni kod
  const subDropdowns = document.querySelectorAll(".dropdown-submenu");

  subDropdowns.forEach(function (subDropdown) {
    const subToggle = subDropdown.querySelector(".dropdown-toggle");
    const subMenu = subDropdown.querySelector(".dropdown-menu");

    // Masaüstü ekranlarda hover ile açılmasını sağlar
    if (window.innerWidth >= 1200) {
      subDropdown.addEventListener("mouseenter", () => {
        subToggle.classList.add("show");
        subMenu.classList.add("show");
      });

      subDropdown.addEventListener("mouseleave", () => {
        subToggle.classList.remove("show");
        subMenu.classList.remove("show");
      });
    }

    // Mobil cihazlarda tıklama ile açılmasını sağlar
    subToggle.addEventListener("click", function (e) {
      if (window.innerWidth < 1200) {
        e.preventDefault(); // Linke gitmeyi engelle
        subToggle.classList.toggle("show");
        subMenu.classList.toggle("show");
      }
    });
  });
});

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
      observer.unobserve(entry.target);
    }
  });
});

// Gözlemlemek istediğin tüm elementleri seç:
const observerImageBox = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
      observerImageBox.unobserve(entry.target);
    }
  });
});
document
  .querySelectorAll(".image-box")
  .forEach((el) => observerImageBox.observe(el));

//Proje Detay
import Swiper from "swiper/bundle";
const swiper = new Swiper(".produtCarouselSlider", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  speed: 500,
  effect: "coverflow",
  navigation: {
    nextEl: ".carousel-control-next",
    prevEl: ".carousel-control-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 1,
    },
  },
});

document.addEventListener("DOMContentLoaded", function () {
  const videoModal = document.getElementById("videoModal");
  const modalVideo = document.getElementById("modalVideo");
  const modalVideoSource = document.getElementById("modalVideoSource");
  const videoPoster = document.getElementById("videoPoster");
  const playButton = document.querySelector(".play-button");
  const thumbnails = document.querySelectorAll(".thumbnail");

  // Initialize with the first thumbnail's data
  const initialThumbnail = document.querySelector(".thumbnail.active");
  if (initialThumbnail) {
    videoPoster.src = initialThumbnail.dataset.posterUrl;
    modalVideoSource.src = initialThumbnail.dataset.videoUrl;
    modalVideo.load();
  }

  // Add click event listener to each thumbnail
  thumbnails.forEach((thumbnail) => {
    thumbnail.addEventListener("click", () => {
      // Remove 'active' class from all thumbnails
      thumbnails.forEach((t) => t.classList.remove("active"));

      // Add 'active' class to the clicked thumbnail
      thumbnail.classList.add("active");

      // Update the main poster image
      videoPoster.src = thumbnail.dataset.posterUrl;

      // Update the modal video source
      modalVideoSource.src = thumbnail.dataset.videoUrl;
      modalVideo.load();
    });
  });

  if (videoModal && modalVideo) {
    videoModal.addEventListener("hidden.bs.modal", () => {
      modalVideo.pause();
      modalVideo.currentTime = 0;
    });

    videoModal.addEventListener("show.bs.modal", () => {
      modalVideo.currentTime = 0;
      modalVideo.play();
    });
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const thumbnailsContainer = document.querySelector(".thumbnails-container");
  const thumbnails = document.querySelectorAll(".thumbnail");

  if (thumbnailsContainer && thumbnails.length > 0) {
    function scrollToActiveThumbnail() {
      const activeThumbnail = document.querySelector(".thumbnail.active");
      if (activeThumbnail) {
        const offset =
          activeThumbnail.offsetLeft -
          thumbnailsContainer.offsetWidth / 2 +
          activeThumbnail.offsetWidth / 2;
        thumbnailsContainer.scrollTo({
          left: offset,
          behavior: "smooth",
        });
      }
    }

    thumbnails.forEach((thumbnail) => {
      thumbnail.addEventListener("click", () => {
        // Önceki aktif küçük resmi bul ve aktifliğini kaldır
        const currentActive = document.querySelector(".thumbnail.active");
        if (currentActive) {
          currentActive.classList.remove("active");
        }

        // Tıklanan küçük resmi aktif yap
        thumbnail.classList.add("active");

        // Kaydırma fonksiyonunu çalıştır
        scrollToActiveThumbnail();
      });
    });

    // Sayfa yüklendiğinde ilk aktif öğeye kaydır
    window.addEventListener("load", scrollToActiveThumbnail);
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const pageNumberEl = document.querySelector(".page-number");
  const sliderContainer = document.querySelector(".product-image-slider");

  // Eğer slider ve sayfa numarası elementleri sayfada yoksa, kodu çalıştırma
  if (!sliderContainer || !pageNumberEl) {
    console.error("Swiper sayfada yok o yüzden burada çalışmayacak.");
    return;
  }

  const swiper = new Swiper(sliderContainer, {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: false,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 500,
    navigation: {
      nextEl: ".next-btn",
    },

    on: {
      init: function () {
        // Toplam slayt sayısını doğru bir şekilde al
        const totalSlides = this.slides.length;
        // Mevcut slayt numarasını ayarla
        const currentSlide = this.activeIndex + 1;

        // Sayfa numarasını güncelleme
        pageNumberEl.textContent = `${String(currentSlide).padStart(2, '0')} / ${String(totalSlides).padStart(2, '0')}`;
      },
      slideChange: function () {
        const totalSlides = this.slides.length;
        const currentSlide = this.activeIndex + 1;

        pageNumberEl.textContent = `${String(currentSlide).padStart(2, '0')} / ${String(totalSlides).padStart(2, '0')}`;
      },
    },
  });
});