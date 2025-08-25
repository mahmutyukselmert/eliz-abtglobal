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
                <img src="./assets/images/Hizmetlerimiz-slider.webp" alt="Banner">
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

        <section class="home-services-section py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <?php include 'include/services-section.html'; ?>
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