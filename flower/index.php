<?php
    require "../inc/inc_koneksi.php";
    $queryProduk = mysqli_query($koneksi,"SELECT id, nama, harga, foto, detail FROM produk LIMIT 4");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://telegram.org/js/telegram-web-app.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/style.css">
    <link rel=”icon” type=”image/png” href=”flower/assets/icon/logo agrirose.png”>
    <title>Agrirose</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&family=Montserrat:wght@500;600&display=swap" rel="stylesheet">
    <!-- font -->

</head>
<body>
<?php require "navbar.php"; ?>

<!-- hero starts here -->
<div id="home" class="hero">
        <div class="image fade active">
            <img src="assets/images/header 1.png" alt="welcome">
        </div>

        <div class="image fade">
            <img src="assets/images/header 2.png" alt="welcome">
        </div>

        <div class="image fade">
            <img src="assets/images/header 3.png" alt="welcome">
        </div>

        <div class="image fade">
            <img src="assets/images/header 4.png" alt="welcome">
        </div>

        <div class="hero-content">
            <h2><strong>Special Flower from Special Place</strong></h2>
            <a href="product.php" class="btn btn-discover mt-3"><strong>Choose your moment</strong></a>
        </div>
</div>
<!-- hero ends here -->

<!-- value section start here -->
<section class="value">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="value-box">
                    <div class="value-icon">
                        <img src="assets/icon/value.png" alt="Complete Variety">
                    </div>
                    <h4>Complete Variety</h4>
                    <p>Menyediakan berbagai variasi mulai dari bunga potong, buket, rangkaian, dan dekorasi</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="value-box">
                    <div class="value-icon">
                        <img src="assets/icon/value1.png" alt="Customize Instant Order">
                    </div>
                    <h4>Customize Instant Order</h4>
                    <p>Pesanan sesuai custom pelanggan dengan waktu pengerjaan dan pengiriman instan</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="value-box">
                    <div class="value-icon">
                        <img src="assets/icon/value3.png" alt="National Scale Delivery">
                    </div>
                    <h4>National Scale Delivery</h4>
                    <p>Kirim ke seluruh kota dan kabupaten di Indonesia</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- value section ends here --> 

<!-- jenis product section starts here -->
<section id="product-categories" class="product-categories">
    <div class="container">
        <div class="row text-center mt-5 mb-5">
            <h2 class="section-title" style="color: #a4133a">Our Product Categories</h2>
            <p style="color: #a4133a">Explore our wide range of fresh flowers</p>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 mb-10">
                <div class="category-box" onclick="location.href='product.php';">
                    <div class="image-container">
                        <img src="assets/images/bunga/Aster Jingga 30000.png" alt="Category 1" class="img-fluid">
                        <div class="overlay">
                            <div class="text">Bunga Segar</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 mb-10">
                <div class="category-box" onclick="location.href='product.php';">
                    <div class="image-container">
                        <img src="assets/images/bunga/Flower Bouquet with Balloon 200k.png" alt="Category 2" class="img-fluid">
                        <div class="overlay">
                            <div class="text">Buket</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-10">
                <div class="category-box" onclick="location.href='product.php';">
                    <div class="image-container">
                        <img src="assets/images/bunga/Dekorasi.png" alt="Category 3" class="img-fluid">
                        <div class="overlay">
                            <div class="text">Dekorasi</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-10">
                <div class="category-box" onclick="location.href='product.php';">
                    <div class="image-container">
                        <img src="assets/images/bunga/Papan Bunga.png" alt="Category 4" class="img-fluid">
                        <div class="overlay">
                            <div class="text">Papan Bunga</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-10">
                <div class="category-box" onclick="location.href='product.php';">
                    <div class="image-container">
                        <img src="assets/images/bunga kering.png" alt="Category 5" class="img-fluid">
                        <div class="overlay">
                            <div class="text">Bunga Kering</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- jenis product end here -->

<!-- pemberdayaan start here -->
<section class="carousel-section">
    <div class="carousel-container">
        <div class="row text-center mb-5">
            <h2 class="section-title" style="color: #a4133a">Pemberdayaan</h2>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner rounded-3">
                <div class="carousel-item active">
                    <img src="assets/images/foto-website/foto/4 Best service.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/foto-website/foto/11 PERKEBUNAN C.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/foto-website/foto/9 perkebunan A.JPG" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<!-- pemberdayaan ends here -->

<!-- Education Section Start Here -->
<section id="combined" class="combined-section">
        <div class="container">
            <h2 class="section-title text-center mb-5">Educations</h2>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="section-box" onclick="location.href='meaning.php';">
                        <a href="meaning.php"></a>
                        <img src="assets/images/education.png" alt="Activity">
                        <h3>Meaning of Flowers</h3>
                        <p>Petani bunga segar ini adalah contoh sempurna dari dedikasi, semangat, dan cinta yang dimiliki terhadap pekerjaannya.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="section-box" onclick="location.href='social-impact.php';">
                        <a href="social-impact.php"></a>
                        <img src="assets/images/education (1).png" alt="Social Impact">
                        <h3>Social Impact</h3>
                        <p>Akhir-akhir ini, terjadi penurunan tingkat ekonomi masyarakat daerah Gunungsari, Karena semakin rendahnya permintaan bunga segar di pasar.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="section-box" onclick="location.href='about.php';">
                        <a href="about.php"></a>
                        <img src="assets/images/education (2).png" alt="About Agrirose">
                        <h3>About Agrirose</h3>
                        <p>E Commerce Florist yang memiliki komitmen kuat terhadap pemberdayaan petani bunga potong di daerah Desa Gunungsari, Kota Batu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Education Section End Here -->

<!-- poster section start here -->
<section id="poster-section" class="poster-section text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="poster-box" onclick="location.href='form.php';">
                    <img src="assets/images/Touragrirose.jpg" alt="Special Offer" class="img-fluid poster-image">
                    <div class="poster-overlay">
                        <div class="poster-text">Click Here for Special Offer!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- poster section end here -->

<!-- reviews start here -->
<section id="reviews" class="reviews">
    <div class="container">
        <h2 class="text-center mb-5 text-white">Customer Reviews</h2>

        <!-- Form to submit a review -->
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form id="reviewForm">
                    <div class="mb-3">
                        <label for="userReview" class="form-label text-white">Your Review</label>
                        <textarea class="form-control" id="userReview" name="userReview" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Review</button>
                </form>
            </div>
        </div>

        <!-- Display customer reviews -->
        <div class="row mt-5" id="customerReviews">
            <!-- Reviews will be dynamically added here using JavaScript -->
        </div>

        <!-- Thank you message -->
        <div id="thankYouMessage" class="row mt-5 d-none">
            <div class="col-md-6 offset-md-3 text-center">
                <div class="alert alert-success" role="alert">
                    Thank you for your review and support!
                </div>
            </div>
        </div>

        <!-- Fake reviews -->
        <div class="row mt-5" id="fakeReviews">
            <div class="col-md-4 mb-4">
                <div class="review-box">
                    <div class="review-content">
                        <h3>Irfan Virgiano</h3>
                        <p>Bunganya fresh, premium, bagus, memuaskan, rekomen banget.</p>
                    </div>
                    <div class="review-rating">
                        <!-- Rating stars (static) -->
                        <span class="star checked">&#9733;</span>
                        <span class="star checked">&#9733;</span>
                        <span class="star checked">&#9733;</span>
                        <span class="star checked">&#9733;</span>
                        <span class="star checked">&#9733;</span>
                    </div>
                    <img src="images/review1.png" alt="Fake Reviewer 1" class="review-photo">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="review-box">
                    <div class="review-content">
                        <h3>Angelina</h3>
                        <p>Bunga keringnya estetik, wangi, tidak rapuh, bunga keringnya rekomen.</p>
                    </div>
                    <div class="review-rating">
                        <!-- Rating stars (static) -->
                        <span class="star checked">&#9733;</span>
                        <span class="star checked">&#9733;</span>
                        <span class="star checked">&#9733;</span>
                        <span class="star checked">&#9733;</span>
                        <span class="star checked">&#9733;</span>
                    </div>
                    <img src="images/review2.png" alt="Fake Reviewer 2" class="review-photo">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="review-box">
                    <div class="review-content">
                        <h3>Brigita</h3>
                        <p>Pesen buket disini murah banget soalnya pake bunga premium jadi bagus.</p>
                    </div>
                    <div class="review-rating">
                        <!-- Rating stars (static) -->
                        <span class="star checked">&#9733;</span>
                        <span class="star checked">&#9733;</span>
                        <span class="star checked">&#9733;</span>
                        <span class="star checked">&#9733;</span>
                        <span class="star checked">&#9733;</span>
                    </div>
                    <img src="images/review3.png" alt="Fake Reviewer 3" class="review-photo">
                </div>
            </div>
        </div>

    </div>
</section>
<!-- reviews end here -->

    <?php require "footer.php"; ?>

    <script src="script.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="fontawesome/js/all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- JavaScript Bundle with Popper -->
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../fontawesome/js/all.min.js"></script>

<!-- Custom Script -->
<script src="script.js"></script>



</body>
</html>
