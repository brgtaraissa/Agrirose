<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrirose</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="scss/style.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .section-title {
            color: #a4133a;
            font-weight: bold;
        }
        .thumbnail img {
            border-radius: 8px;
            transition: transform 0.3s ease;
        }
        .thumbnail img:hover {
            transform: scale(1.05);
        }
        .visit-form {
            background-color: #ffffff;
            padding: 50px 0;
        }
        .btn-primary {
            background-color: #a4133a;
            border: none;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #800f2f;
        }
    </style>
</head>

<body>
    <?php require "navbar.php"; ?>

    <!-- Formulir Kunjungan Kebun Bunga -->
    <section id="visit-form" class="visit-form">
        <div class="ornament-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-title text-center mb-5">Explore Our Beautiful Flower Garden</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-2">
                        <div class="thumbnail">
                            <img src="assets/images/foto-website/foto/9 perkebunan A.JPG" alt="Flower Garden 1" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="thumbnail">
                            <img src="assets/images/foto-website/foto/15 ABOUT AGRIROSE.png" alt="Flower Garden 2" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="thumbnail">
                            <img src="assets/images/foto-website/foto/11 PERKEBUNAN C.png" alt="Flower Garden 3" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="thumbnail">
                            <img src="assets/images/udah di edit/WhatsApp Image 2023-10-02 at 18.41.15.jpeg" alt="Flower Garden 4" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="thumbnail">
                            <img src="assets/images/udah di edit/WhatsApp Image 2023-10-02 at 18.01.46 (1).jpeg" alt="Flower Garden 5" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="section-title text-center mb-5">Book Your Visit</h2>
                    <form id="visitForm" method="POST" action="submit_visit.php">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">Nomor Telepon</label>
                            <input type="tel" class="form-control" id="no_hp" name="no_hp" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal Kunjungan</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- formulir pendaftaran ends here -->

    <?php require "footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
