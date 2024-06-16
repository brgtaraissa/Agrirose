<?php
    require "../inc/inc_koneksi.php";

    $nama = htmlspecialchars($_GET['nama']);
    $queryProduk = mysqli_query($koneksi,"SELECT * FROM produk WHERE nama='$nama'");
    $produk = mysqli_fetch_array($queryProduk);

    $queryProdukTerkait = mysqli_query($koneksi,"SELECT * FROM produk WHERE kategori_id='$produk[kategori_id]' AND id!='$produk[id]' LIMIT 4");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrirose - <?php echo $produk['nama']; ?></title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="scss/style.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .product-detail {
            margin-top: 50px;
        }
        .product-detail img {
            border-radius: 10px;
        }
        .product-detail h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
        }
        .product-detail p {
            color: #555;
        }
        .product-detail .price {
            font-size: 2rem;
            color: #e74c3c;
        }
        .product-detail .availability {
            font-size: 1.25rem;
            color: #2ecc71;
        }
        .product-detail .form-control {
            width: 80px;
            text-align: center;
        }
        .related-products {
            background-color: #f8f9fa;
            padding: 50px 0;
        }
        .related-products h2 {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
        }
        .related-products .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        .related-products .card:hover {
            transform: scale(1.05);
        }
        .related-products .card img {
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <?php require "navbar.php"; ?>

    <!-- Detail produk -->
    <div class="container product-detail">
        <div class="row">
            <div class="col-lg-5 mb-5">
                <img src="../image/<?php echo $produk['foto']; ?>" class="w-100" alt="<?php echo $produk['nama']; ?>">
            </div>
            <div class="col-lg-6 offset-lg-1">
                <h1><?php echo $produk['nama']; ?></h1>
                <p class="fs-5"><?php echo $produk['detail']; ?></p>
                <p class="price">Rp <?php echo $produk['harga']; ?></p>
                <p class="availability">Status Ketersediaan: <strong><?php echo $produk['ketersediaan_stok']; ?></strong></p>

                <!-- Form untuk menambahkan produk ke keranjang -->
                <form action="cart.php?id=<?php echo $produk['id']; ?>" method="post">
                    <div class="row g-2 align-items-center">
                        <div class="col-auto">
                            <label for="qty" class="col-form-label">Jumlah:</label>
                        </div>
                        <div class="col-auto">
                            <input type="number" id="qty" name="qty" value="1" class="form-control">
                        </div>
                        <div class="col-auto">
                            <button type="submit" name="add_to_cart" class="btn btn-primary">Tambah ke Keranjang</button>
                        </div>
                    </div>
                </form>
                <!-- End Form untuk menambahkan produk ke keranjang -->

                <div class="mt-3">
                    <form action="checkout.php" method="post">
                        <input type="hidden" name="id_produk" value="<?php echo $produk['id']; ?>">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Produk terkait -->
    <div class="container-fluid related-products py-5">
        <div class="container">
            <h2 class="text-center mb-5">Produk Terkait</h2>

            <div class="row">
                <?php while ($data = mysqli_fetch_array($queryProdukTerkait)){ ?>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card h-100">
                        <a href="product-detail.php?nama=<?php echo $data['nama']; ?>">
                            <img src="../image/<?php echo $data['foto']; ?>" class="card-img-top" alt="<?php echo $data['nama']; ?>">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $data['nama']; ?></h5>
                            <p class="price">Rp <?php echo $data['harga']; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php require "footer.php"; ?>
    
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>
</html>
