<?php
require "../inc/inc_koneksi.php";

// Ambil semua produk
$queryProduk = mysqli_query($koneksi, "SELECT id, nama, harga, foto, detail, kategori FROM produk");

// Inisialisasi array produk per kategori
$produkPerKategori = [];

// Pisahkan produk berdasarkan kategori
while ($data = mysqli_fetch_array($queryProduk)) {
    $kategori = $data['kategori'];
    if (!isset($produkPerKategori[$kategori])) {
        $produkPerKategori[$kategori] = [];
    }
    $produkPerKategori[$kategori][] = $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/style.css">
    <title>Agrirose</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <!-- font -->
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .container-fluid {
            background-color: #f8f9fa;
            padding: 50px 0;
        }

        .kategori-section {
            margin-bottom: 40px;
        }

        .kategori-section h5 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .image-box {
            height: 200px;
            overflow: hidden;
        }

        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .image-box img:hover {
            transform: scale(1.1);
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 14px;
            color: #777;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php require "navbar.php"; ?>

    <!-- product start here -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Product</h3>

            <!-- Loop through each category -->
            <?php if (empty($produkPerKategori)) : ?>
                <p>No products available</p>
            <?php else : ?>
                <?php foreach ($produkPerKategori as $kategori => $produkList) : ?>
                    <div class="kategori-section mt-5">
                        <h5><?php echo htmlspecialchars($kategori); ?></h5>
                        <div class="row mt-3">
                            <?php foreach ($produkList as $data) : ?>
                                <div class="col-sm-6 col-md-4 mb-3">
                                    <div class="card h-100">
                                        <div class="image-box">
                                            <img src="../image/<?php echo htmlspecialchars($data['foto']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($data['nama']); ?>">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo htmlspecialchars($data['nama']); ?></h5>
                                            <p class="card-text text-truncate"><?php echo htmlspecialchars($data['detail']); ?></p>
                                            <p class="card-text">Rp <?php echo number_format($data['harga'], 0, ',', '.'); ?></p>
                                            <a href="product-detail.php?nama=<?php echo urlencode($data['nama']); ?>" class="btn btn-primary text-white">Buy</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <?php require "footer.php"; ?>

    <script src="script.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>
</html>
