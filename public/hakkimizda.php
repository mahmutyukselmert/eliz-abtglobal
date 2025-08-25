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
                <img src="./assets/images/Hakkimizda-banner.webp" alt="Banner">
            </div>
            <div class="page-banner-content">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-12 col-11 px-0">
                            <h1 class="banner-title scroll-reveal-bottom">HAKKIMIZDA</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-page-one-section pt-5">
            <div class="bg-icon"></div>
            <div class="container pt-5">
                <div class="row justify-content-between ">
                    <div class="col-lg-6">
                        <h2 class="section-title scroll-reveal-left">Profesyonel Hava Çekimi, Etkileyici Sunum!</h2>
                        <div class="content scroll-reveal-bottom">
                            <p>
                                Ülkenin dört bir yanında son derece yetenekli hava kameramanları aracılığıyla her şeyi erişilebilir hale getiriyor. Spesifikasyonlarınıza göre uygun fiyatlandırmayla, nefes kesici havai videoları sizin için kullanıma sunuyoruz.</p>
                            <p> Yüksek çözünürlüklü kamera teknolojisi ile çekilen çarpıcı HD özel drone videoları ve hava fotoğrafçılığı ile sattığınız mülke veya tanıttığınız ürüne büyük ilgi, değer ve muhteşem bir drama getiriyoruz.</p>
                            <p>
                                Lisanslı ve sigortalı yüksek nitelikli drone pilotlarımızla mükemmel video ve fotoğraflar çekerek hayallerinizi süslüyoruz. </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <video class="loop-video" src="./assets/media/profesyonel-hava-cekimi-dron.mp4" autoplay muted
                            loop></video>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-pagevideo-section py-5">
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