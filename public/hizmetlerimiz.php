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
    <main class="sub-page-main">

        <section class="page-header-section bg-gradient-primary">
            <div class="container">
                <div class="page-banner">
                    <div class="row">
                        <div class="row col-lg-12">
                            <div class="col-lg-7">
                                <div class="page-banner-heading">
                                    <h1>Yedek Parça</h1>
                                    <h2>Hizmetler</h2>
                                </div>
                                <h3>Küçük ve büyük taneli tahıllar için yüksek kapasiteli ön temizleme.</h3>
                                <div class="page-banner-content">
                                    <p>
                                        Damas'ın orijinal yedek parçalarını kullanmak, DAMAS makinenizin maksimum performans ve kapasitesini garanti altına alır ve operasyonlarınızın güvenilir ve sorunsuz bir şekilde yürütülmesini sağlar.
                                    </p>
                                    <p>
                                        Danışmanlık, servis, orijinal yedek parça ve aşınmaya dayanıklı parçaların tam spesifikasyonlara uygun şekilde tedarik edilmesi görevini memnuniyetle üstleniyoruz. Bilgi birikimimiz, uzun yıllara dayanan deneyimimizin yanı sıra, Damas A/S tarafından onlarca yıldır teslim edilen tüm sistem ve ürünlere ilişkin kayıtlara dayanmaktadır.
                                    </p>
                                    <p>
                                        Kritik yedek parçalar ve aşınma parçaları Danimarka'daki mağazamızdan hemen gönderilmeye hazırdır.
                                    </p>
                                    <p>
                                        Arka ofisimiz, herhangi bir DAMAS makinesi için doğru yedek parçayı veya aşınan parçayı bulmanıza yardımcı olmaya hazırdır. Makine tipini ve seri numarasını hazır bulundurarak zamandan tasarruf edin.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-5 d-flex align-items-center justify-content-center">
                                <img src="./assets/images/disli-gorseli.webp" alt="Dişli" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mt-5">
                        <div class="col-lg-8">
                            <a href="#" class="btn btn-dark rounded-pill">
                                Bizi Arayın
                                <span class="btn-icon-bg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                    </svg>
                                </span>
                            </a>
                            <a href="#" class="btn btn-dark rounded-pill ms-3">
                                Bize Yazın
                                <span class="btn-icon-bg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                    </svg>
                                </span>
                            </a>
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
                        <div class="content mb-5">
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

    </main>
    <?php include 'include/footer.html'; ?>
</body>

</html>