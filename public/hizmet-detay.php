<?php require 'init.php'; ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TT Ajans</title>
    <?php include 'include/head.html'; ?>
</head>

<body>
    <?php include 'include/header.html'; ?>
    <main class="sub-page-main">
        <section class="page-banner">
            <div class="background-image-wrapper">
                <img src="./assets/images/Hizmetlerimiz-detay-slider.webp" alt="Banner">
            </div>
            <div class="page-banner-content">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-12 col-11 px-0">
                            <h1 class="banner-title services-title scroll-reveal-bottom">SERVİS VE HİZMETLERİMİZ</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-services-section pt-5">
            <div class="container pt-5">
                <div class="row g-4">
                   <h2 class="section-title scroll-reveal-left">Gayrimenkul Geliştirme</h2>
                   <div class="content fs-21px">
                    <p>
                        Gayrimenkul geliştirme drone kapsamımızla projenizin ilerleyişini belgeleyin. Temel atmadan tamamlamaya kadar, şantiyenizin gelişimini sergileyen yüksek çözünürlüklü hava fotoğrafları ve videoları çekiyoruz. Paydaşlarınızı güncel tutun ve projenizin büyümesini vurgulayan profesyonel görsellerle güçlü pazarlama içerikleri oluşturun.
                    </p>
                   </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">

                        <div class="swiper produtCarouselSlider" id="produtCarouselSlider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="./assets/images/nasil-calisiyoruz-slider.webp" class="img-fluid" alt="Proje detayı 1">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./assets/images/anasayfa-slider.webp" class="img-fluid" alt="Proje detayı 2">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./assets/images/nasil-calisiyoruz-slider.webp" class="img-fluid" alt="Proje detayı 3">
                                </div>
                            </div>
                            
                            <div class="carousel-controls">
                                <button class="carousel-control-prev" type="button" data-bs-target="#produtCarouselSlider"
                                    data-bs-slide="prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
</svg>
                                    <span class="visually-hidden">Önceki</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#produtCarouselSlider"
                                    data-bs-slide="next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
</svg>
                                    <span class="visually-hidden">Sonraki</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section class="home-pagevideo-section py-5">
            <?php include 'include/video-section.html'; ?>
            <div class="container py-5">
                <div class="row footer-contact-row align-items-center justify-content-center">
                    <div class="col-lg-12 text-center">
                        <p>Hizmetlerimiz hakkında bilgi almak için bize ulaşın.</p>
                        <a href="bize-ulasin.php" class="btn btn-custom">Bize Ulaşın</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'include/footer.html'; ?>
</body>

</html>