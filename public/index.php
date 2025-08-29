<?php require 'init.php'; ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABT Global</title>
    <?php include 'include/head.html'; ?>
</head>

<body>
    <?php include 'include/header.html'; ?>
    <?php include 'include/hero-section.html'; ?>

    <main class="">
        <section class="first-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5">
                        <div class="image-box">
                            <img src="./assets/images/Tohum-Isleme-Gorsel.webp" class="img-fluid left-image">
                            <div class="image-mask"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 right-area mt-lg-5 mt-3">

                        <div class="row">
                            <ul class="nav nav-pills mb-5 justify-content-center gap-5" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                        <span>Tohum İşleme</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                        <span>Gıda İşleme</span>
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content text-center" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                    <p class="text-center mb-5">Tohum işleme, hasat edilen tohumların saflık, çimlenme gücü ve kalite açısından en yüksek standartlara ulaşmasını sağlayan çok aşamalı bir süreçtir. Bu süreç, ürünün pazar değerini artırırken, tarımsal üretimde verimliliği ve güvenilirliği de garanti altına alır.</p>
                                    <a href="#" class="btn btn-dark rounded-pill">
                                        Detaylı İncele
                                        <span class="btn-icon-bg">
                                            <img src="./assets/images/Buton-icon-1.webp" width="50" height="50" alt="tohum işleme Detaylı incele">
                                        </span>
                                    </a>

                                    <!-- Uzmana Sor -->
                                    <div class="row mt-5">
                                        <div class="col-lg-12">
                                            <div class="experienced-info">
                                                <img src="./assets/images/uzmana-sor.webp" alt="uzmanına sor" width="50" height="50" class="img-fluid">
                                                <div class="right-experienced-info">
                                                    <strong>UZMANINA SOR</strong>
                                                    <span>KAYA SOLMAZ</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="left-info-box">
                                                <div class="info-box-header">
                                                    <div class="info-box-head-left">
                                                        <strong class="d-block">Temizlik Verimliliği</strong>
                                                        <span>Ortalama Değer / Aralık</span>
                                                    </div>
                                                    <div class="info-box-head-right">
                                                        <img src="./assets/images/Buton-icon-2.webp" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="stats-data">
                                                        %
                                                        <output class="countup" data-value="2649.8">99,5</output>
                                                        %
                                                    </p>
                                                    <p class="info-box-desc">Yabancı madde, kırık ve bozuk
                                                        tohumların uzaklaştırılma oranı</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="right-info-box">
                                                <div class="info-box-header">
                                                    <div class="info-box-head-left">
                                                        <strong class="d-block">Kapasite Aralığı Verimliliği</strong>
                                                    </div>
                                                    <div class="info-box-head-right">
                                                        <img src="./assets/images/Buton-icon-3.webp" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="stats-data">
                                                        <output class="countup" data-value="2649.8">20 - 1</output> ton/saat
                                                    </p>
                                                    <p class="info-box-desc">Ürün türüne göre değişir</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Uzmana Sor -->
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                    <p class="text-center mb-5">Tohum işleme, hasat edilen tohumların saflık, çimlenme gücü ve kalite açısından en yüksek standartlara ulaşmasını sağlayan çok aşamalı bir süreçtir. Bu süreç, ürünün pazar değerini artırırken, tarımsal üretimde verimliliği ve güvenilirliği de garanti altına alır.</p>

                                    <!-- Uzmana Sor -->
                                    <div class="row mt-5">
                                        <div class="col-lg-12">
                                            <div class="experienced-info">
                                                <img src="./assets/images/uzmana-sor.webp" alt="uzmanına sor" width="50" height="50" class="img-fluid">
                                                <div class="right-experienced-info">
                                                    <strong>UZMANINA SOR</strong>
                                                    <span>KAYA SOLMAZ</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="left-info-box">
                                                <div class="info-box-header">
                                                    <div class="info-box-head-left">
                                                        <strong class="d-block">Temizlik Verimliliği</strong>
                                                        <span>Ortalama Değer / Aralık</span>
                                                    </div>
                                                    <div class="info-box-head-right">
                                                        <img src="./assets/images/Buton-icon-2.webp" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="stats-data">
                                                        %
                                                        <output class="countup" data-value="2649.8">99,5</output>
                                                        %
                                                    </p>
                                                    <p class="info-box-desc">Yabancı madde, kırık ve bozuk
                                                        tohumların uzaklaştırılma oranı</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="right-info-box">
                                                <div class="info-box-header">
                                                    <div class="info-box-head-left">
                                                        <strong class="d-block">Kapasite Aralığı Verimliliği</strong>
                                                    </div>
                                                    <div class="info-box-head-right">
                                                        <img src="./assets/images/Buton-icon-3.webp" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="stats-data">
                                                        <output class="countup" data-value="2649.8">20 - 1</output> ton/saat
                                                    </p>
                                                    <p class="info-box-desc">Ürün türüne göre değişir</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Uzmana sor -->

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

        <?php include 'include/products-section.html'; ?>

        <section class="home-pagevideo-section py-lg-5">

            <?php include 'include/video-section.html'; ?>

            <div class="container py-lg-5">
                <div class="row footer-contact-row align-items-center justify-content-center">
                    <div class="col-lg-11 text-center">
                        <div class="content mb-5 scroll-reveal-top">
                            <p>Faaliyetlerimizin temelinde, her ürünün en yüksek saflık, verimlilik ve kalite standartlarına ulaşmasını sağlayan çözümler sunmak yer alır. Tahıl, baklagiller, yağlı tohumlar, yem bitkileri ve baharat gibi çok çeşitli ürün gruplarında, ön temizlikten ince temizliğe, sınıflandırmadan özel ayrıştırma sistemlerine kadar eksiksiz hizmetler sunuyoruz.</p>
                        </div>
                        <a href="hakkimizda.php" class="btn btn-dark rounded-pill mt-3">
                            <span class="pe-3">Hakkımızda</span>
                            <span class="btn-icon-bg">
                                <img src="./assets/images/Buton-icon-1.webp" width="50" height="50" alt="hakkımızda incele">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="last-news-section home-page-divider-section">
            <div class="container">
                <div class="section-title">
                    <div class="col-auto">
                        <h2>En Son Haberler</h2>
                    </div>
                    <div class="divider"></div>
                    <div class="col-auto">
                        <a href="haberler.php" class="btn-all-links">
                            Tüm Haberler
                        </a>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="news-card">
                            <img src="./assets/images/yeni-damas-1.webp" class="card-img-top">
                            <a href="" class="stretched-link">
                                <a>Yeni Damas tartım ünitesi "BAGFI"</a>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="news-card">
                            <img src="./assets/images/yeni-damas-2.webp" class="card-img-top">
                            <a href="" class="stretched-link">
                                <a>Yeni Damas tartım ünitesi "BAGFI"</a>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="news-card">
                            <img src="./assets/images/mayis-2025.webp" class="card-img-top">
                            <a href="" class="stretched-link">
                                <a>Mayıs 2025'te ISF İstanbul'da buluşalım</a>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <?php include 'include/footer.html'; ?>
</body>

</html>