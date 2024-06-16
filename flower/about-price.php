<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrirose</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="scss/style.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>

    <?php require "navbar.php"; ?>

    <!-- About Agrirose -->
    <section id="about-agrirose" class="about-agrirose py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-agrirose-content">
                        <h2 class="section-title mb-4">About Price</h2>
                        <p> Agrirose adalah platform yang menawarkan harga bunga yang sangat terjangkau karena produknya berasal langsung dari komunitas petani di Desa Gunungsari. 
                            Dengan menghilangkan perantara yang biasanya memengaruhi harga bunga, Agrirose memungkinkan untuk membeli bunga segar berkualitas tinggi dengan harga yang lebih rendah, sementara sekaligus mendukung para petani lokal.
                        </p>
                            
                        <p> Melalui Agrirose, konsumen tidak hanya mendapatkan bunga yang indah, tetapi mereka  berkontribusi pada kesejahteraan komunitas petani Desa Gunungsari. Dengan membeli bunga-bunga dari platform ini, 
                            mereka ikut mendukung usaha para petani lokal dan membantu mereka dalam mencapai kehidupan yang lebih baik.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-agrirose-image">
                        <img src="assets/images/foto-website/foto/about (2).png" alt="Agrirose" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Agrirose -->

    <!-- About Gunungsari and Others -->
    <section id="about-details" class="about-details py-5">
        <div class="container">
            <div class="row">
                <!-- About Gunungsari -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="box-container">
                        <img src="assets/images/foto-website/foto/about.png" alt="Gunungsari" class="img-fluid">
                        <div class="box-content">
                            <h3 class="mt-3">About Gunungsari</h3>
                            <p>Desa Gunungsari terletak di Kota Batu, Jawa Timur, yang terkenal sebagai salah satu
                                penghasil bunga potong lokal yang sangat indah.</p>
                            <a href="about-gunungsari.php" class="btn btn-primary text-white">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End About Gunungsari -->

                <!-- About Agrirose -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="box-container">
                        <img src="assets/images/foto-website/foto/about (3).png" alt="Farmer" class="img-fluid">
                        <div class="box-content">
                            <h3 class="mt-3">About Agrirose</h3>
                            <p>Selamat datang di Agrirose, toko bunga online yang memiliki komitmen kuat terhadap pemberdayaan
                             petani bunga potong.</p>
                            <a href="about.php" class="btn btn-primary text-white">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End About Agrirose -->

                <!-- About Farmer -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="box-container">
                        <img src="assets/images/foto-website/foto/about (1).png" alt="Price" class="img-fluid">
                        <div class="box-content">
                            <h3 class="mt-3">About Farmer</h3>
                            <p>Petani bunga segar ini adalah contoh sempurna dari dedikasi, semangat, dan cinta yang dimiliki terhadap pekerjaannya.</p>
                            <a href="about-farmer.php" class="btn btn-primary text-white">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End About Farmer -->
            </div>
        </div>
    </section>
    <!-- End About Gunungsari and Others -->

    

    <?php require "footer.php"; ?>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
    <script src="script.js"></script>
</body>

</html>