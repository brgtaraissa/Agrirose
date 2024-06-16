<?php
session_start();
require "../inc/inc_koneksi.php";

// Fungsi untuk menambahkan produk ke keranjang
if (isset($_POST['add_to_cart'])) {
    $id_produk = $_GET['id'];
    $qty = $_POST['qty'];

    // Jika keranjang belanja (cart) belum ada, buat array kosong
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Cek apakah produk sudah ada di keranjang
    $produk_ditemukan = false;
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $id_produk) {
            // Update jumlah produk jika produk sudah ada
            $_SESSION['cart'][$key]['qty'] += $qty;
            $produk_ditemukan = true;
            break;
        }
    }

    // Jika produk belum ada di keranjang, tambahkan produk baru
    if (!$produk_ditemukan) {
        $queryProduk = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id_produk'");
        $produk = mysqli_fetch_array($queryProduk);
        $item = array(
            'id' => $produk['id'],
            'nama' => $produk['nama'],
            'harga' => $produk['harga'],
            'qty' => $qty
        );
        array_push($_SESSION['cart'], $item);
    }
}

// Fungsi untuk menghapus produk dari keranjang
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id_produk = $_GET['id'];
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $id_produk) {
            unset($_SESSION['cart'][$key]);
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrirose</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="scss/style.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .cart-container {
            margin-top: 50px;
        }
        .cart-container h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
        }
        .cart-container table {
            margin-top: 30px;
        }
        .cart-container .table th,
        .cart-container .table td {
            vertical-align: middle;
        }
        .cart-container .btn {
            font-size: 1rem;
        }
        .cart-container .total {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <?php require "navbar.php"; ?>

    <!-- Cart -->
    <div class="container cart-container">
        <h1 class="mb-5">Cart</h1>

        <?php if (empty($_SESSION['cart'])): ?>
            <div class="alert alert-warning" role="alert">
                Keranjang belanja Anda kosong. Silakan <a href="product.php">berbelanja</a> terlebih dahulu.
            </div>
        <?php else: ?>
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Total</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total_belanja = 0;
                    $no = 1;
                    foreach ($_SESSION['cart'] as $item) {
                        $total = $item['harga'] * $item['qty'];
                        $total_belanja += $total;
                    ?>
                    <tr>
                        <th scope="row"><?php echo $no++; ?></th>
                        <td><?php echo $item['nama']; ?></td>
                        <td>Rp <?php echo number_format($item['harga'], 0, ',', '.'); ?></td>
                        <td><?php echo $item['qty']; ?></td>
                        <td>Rp <?php echo number_format($total, 0, ',', '.'); ?></td>
                        <td><a href="cart.php?action=delete&id=<?php echo $item['id']; ?>" class="btn btn-danger text-white">Hapus</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

            <div class="d-flex justify-content-end mt-3">
                <h3 class="total">Total Belanja: Rp <?php echo number_format($total_belanja, 0, ',', '.'); ?></h3>
            </div>

            <div class="d-flex justify-content-end mt-3">
                <a href="checkout.php" class="btn btn-success text-white">Checkout</a>
            </div>
        <?php endif; ?>
    </div>

    <?php require "footer.php"; ?>
    
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>
</html>
