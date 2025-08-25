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
        <section class="page-banner contact-page-banner">
            <div class="background-image-wrapper">
                <img src="./assets/images/neden-biz-slider.webp" alt="Banner">
            </div>
            <div class="page-banner-content">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-12 col-11 px-0">
                            <h1 class="banner-title contact-page-title scroll-reveal-bottom">BİZE ULAŞIN</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-one-section contact-form-section">
            <div class="bg-icon"></div>
            <div class="left-cloud to-bottom-half"></div>
            <div class="right-cloud to-top-20"></div>

            <div class="container-fluid px-5">
                <div class="position-absolute">
                    <img src="./assets/images/gorsel-hikayeniz-dron.webp" class="img-fluid drone" alt="">
                </div>
            </div>

            <div class="container py-5">

                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-9">
                        <div class="contact-form-info">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                </svg>
                                <span>0 (540) 533 12 13</span>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                                </svg>
                                <span>info@havacekimi.tr</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center first-content-box mt-5">
                    <div class="col-lg-6 justify-content-center mt-5">
                        <form>
                            <h2 class="form-title">İletişim Formu</h2>
                            <div class="form-group mb-4">
                                <label for="name" class="form-label">Adınız Soyadınız</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>

                            <div class="form-group mb-4">
                                <label for="phone" class="form-label">Telefon Numaranız</label>
                                <input type="tel" class="form-control" id="phone" required>
                            </div>

                            <div class="form-group mb-4">
                                <label for="email" class="form-label">E-Mail Adresiniz</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="service" class="form-label d-none">Hizmet Seçiniz</label>
                                <select class="form-select" id="service" required>
                                    <option selected disabled>Hizmet Seçiniz</option>
                                    <option value="1">Hizmet 1</option>
                                    <option value="2">Hizmet 2</option>
                                    <option value="3">Hizmet 3</option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label for="message" class="form-label">Kısa Açıklama</label>
                                <textarea class="form-control" id="message" rows="3" required></textarea>
                            </div>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="kvkk-check" required>
                                <label class="form-check-label" for="kvkk-check">
                                    Kişisel verilerimin KVKK uyarınca yurtiçi ve yurtdışındaki üçüncü kişilere aktarılmasına izin veriyorum ve bu konuda gereği gibi bilgilendirildiğimi kabul ediyorum.
                                </label>
                            </div>
                            <button type="submit" class="btn btn-custom btn-submit">GÖNDER</button>
                        </form>

                        <div class="alert alert-primary mt-5">Mesajınız başarılı bir şekilde iletildi. Size en yakın zaman dönüş yapacağız.</div>
                        <div class="alert alert-danger mt-5">Mesajınız gönderilemedi. Lütfen tekrar deneyin.</div>


                    </div>
                </div>
            </div>
            <div class="gradient-image-bg-footer"></div>
        </section>
    </main>
    <?php include 'include/footer.html'; ?>
</body>

</html>