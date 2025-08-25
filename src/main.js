import * as bootstrap from "bootstrap";
window.bootstrap = bootstrap;

import ScrollReveal from "scrollreveal";

import "./slider.js";

document.addEventListener("DOMContentLoaded", function () {

  document.querySelector('#offcanvas-open-text').addEventListener('click', function () {
    document.querySelector('button#offcanvas-open').click();
  });

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

document.addEventListener("DOMContentLoaded", function () {
  var offcanvasElement = document.getElementById("navbarNav");
  var headerElement = document.querySelector("header");
  var logoElement = document.querySelector(
    ".offcanvas-header .logo-wrapper img"
  );
  var logoOriginalSrc = logoElement.src;

  offcanvasElement.addEventListener("show.bs.offcanvas", function () {
    headerElement.classList.add("offcanvas-open");
    logoElement.src = logoElement.dataset.offcanvaslogo;
    document.body.classList.add("body-no-scroll");
  });

  offcanvasElement.addEventListener("hide.bs.offcanvas", function () {
    headerElement.classList.remove("offcanvas-open");
    logoElement.src = logoOriginalSrc;
    document.body.classList.remove("body-no-scroll");
  });
});

/* CountUp.js */
import { CountUp } from "countup.js";
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
      },
      {
        threshold: 0.6,
      }
    );

    observer.observe(el);
  }
});
/* CountUp.js - End */

document.addEventListener("DOMContentLoaded", function () {
  const videoModal = document.getElementById("videoModal");
  const modalVideo = document.getElementById("modalVideo");
  const videoPoster = document.getElementById("videoPoster");
  const playButton = document.querySelector(".play-button");
  const thumbnails = document.querySelectorAll(".thumbnail");
  
  // Initialize with the first thumbnail's data
  const initialThumbnail = document.querySelector(".thumbnail.active");
  if (initialThumbnail) {
    videoPoster.src = initialThumbnail.dataset.posterUrl;
    if (modalVideo) {
      modalVideo.src = initialThumbnail.dataset.videoUrl;
      modalVideo.load();
    }
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
      if (modalVideo) {
        modalVideo.src = thumbnail.dataset.videoUrl;
        modalVideo.load();
      }
    });
  });

  // Handle modal show/hide events
  if (videoModal && modalVideo) {
    videoModal.addEventListener("show.bs.modal", () => {
      modalVideo.play();
    });
    
    videoModal.addEventListener("hidden.bs.modal", () => {
      modalVideo.pause();
      modalVideo.currentTime = 0;
    });
  }
});

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

/* MENÜ IMAGE */
document.addEventListener("DOMContentLoaded", function () {
  const pieSections = document.querySelectorAll(".pie-section");
  const centerImage = document.getElementById("center-image");
  const circularContainer = document.querySelector(
    ".circular-gallery-container"
  );
  const originalImageSrc = centerImage.src;

  pieSections.forEach((section) => {
    section.addEventListener("mouseenter", function () {
      const newImageSrc = this.getAttribute("data-image-src");
      centerImage.src = newImageSrc;

      // Animasyonları durdurma
      circularContainer.style.animationPlayState = "paused";
      this.style.animationPlayState = "paused";
      centerImage.style.animationPlayState = "paused";

      // Fareyle üzerine gelindiğinde büyüme efekti ekleme
      this.style.transform = "scale(1.1)";
    });

    section.addEventListener("mouseleave", function () {
      centerImage.src = originalImageSrc;

      // Animasyonları devam ettirme
      circularContainer.style.animationPlayState = "running";
      this.style.animationPlayState = "running";
      centerImage.style.animationPlayState = "running";

      // Büyüme efektini kaldırma
      this.style.transform = "scale(1)";
    });
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

//Haber ve Proje Detay
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

// Sayfa yüklendiğinde ve DOM hazır olduğunda çalışacak kod bloğu
document.addEventListener("DOMContentLoaded", () => {
  // İlgili DOM öğelerinin varlığını kontrol et
  const thumbnailsContainer = document.querySelector(".thumbnails-container");
  const thumbnails = document.querySelectorAll(".thumbnail");

  // Eğer gerekli öğeler (thumbnailsContainer ve en az bir thumbnail) varsa kodu çalıştır
  if (thumbnailsContainer && thumbnails.length > 0) {
    // Kaydırma fonksiyonu
    function scrollToActiveThumbnail() {
      const activeThumbnail = document.querySelector(".thumbnail.active");
      if (activeThumbnail) {
        // Aktif olan öğeyi kapsayıcının ortasına kaydır
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

    // Her bir küçük resme tıklama olayı ekle
    thumbnails.forEach((thumbnail) => {
      thumbnail.addEventListener("click", () => {
        // Önceki aktif küçük resmin aktifliğini kaldır
        document.querySelector(".thumbnail.active")?.classList.remove("active");
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
