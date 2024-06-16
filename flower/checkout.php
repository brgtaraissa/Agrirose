<?php
session_start();
require "../inc/inc_koneksi.php";

// Pastikan bahwa pengguna hanya dapat mengakses halaman ini jika ada produk di keranjang
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header('Location: keranjang.php');
    exit();
}

// Jika form checkout disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $telepon = htmlspecialchars($_POST['telepon']);
    $metode_pembayaran = htmlspecialchars($_POST['metode_pembayaran']);
    $total_belanja = 0;

    // Hitung total belanja
    foreach ($_SESSION['cart'] as $item) {
        $total_belanja += $item['harga'] * $item['qty'];
    }

    // Simpan data pesanan ke database
    $queryPesanan = "INSERT INTO pesanan (nama, alamat, telepon, total_belanja, tanggal_pesanan) VALUES ('$nama', '$alamat', '$telepon', '$total_belanja', NOW())";
    if (mysqli_query($koneksi, $queryPesanan)) {
        $pesanan_id = mysqli_insert_id($koneksi);

        // Simpan detail pesanan ke database
        $pesanan_items = [];
        foreach ($_SESSION['cart'] as $item) {
            $produk_id = $item['id'];
            $qty = $item['qty'];
            $harga = $item['harga'];
            $queryDetailPesanan = "INSERT INTO detail_pesanan (pesanan_id, produk_id, qty, harga) VALUES ('$pesanan_id', '$produk_id', '$qty', '$harga')";
            mysqli_query($koneksi, $queryDetailPesanan);
            
            $pesanan_items[] = $item['nama'] . " (Qty: " . $item['qty'] . ")";
        }

        // Kosongkan keranjang belanja
        unset($_SESSION['cart']);

        // Format pesan WhatsApp
        $pesanan_items_str = implode(", ", $pesanan_items);
        $whatsapp_message = urlencode("Halo, saya ingin konfirmasi pembayaran untuk pesanan dengan detail berikut: %0A%0ANama: $nama%0AAlamat: $alamat%0ANomor Telepon: $telepon%0ATotal Belanja: Rp " . number_format($total_belanja, 0, ',', '.') . "%0AProduk: $pesanan_items_str%0AMetode Pembayaran: " . ($metode_pembayaran == 'transfer_bca' ? 'Transfer BCA' : 'QRIS'));

        // Redirect ke halaman sukses dengan informasi metode pembayaran dan pesan WhatsApp
        header('Location: sukses.php?metode_pembayaran=' . $metode_pembayaran . '&whatsapp_message=' . $whatsapp_message);
        exit();
    } else {
        echo "Error: " . $queryPesanan . "<br>" . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrirose - Checkout</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="scss/style.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .checkout-container {
            margin-top: 50px;
        }
        .checkout-container h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
        }
        .checkout-container .form-label {
            font-weight: bold;
        }
        .checkout-container .table th,
        .checkout-container .table td {
            vertical-align: middle;
        }
        .checkout-container .btn {
            font-size: 1rem;
        }
        .checkout-container .total {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <?php require "navbar.php"; ?>

    <!-- Checkout -->
    <div class="container checkout-container">
        <h1 class="mb-5">Checkout</h1>
        
        <form action="checkout.php" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Pengiriman</label>
                <textarea name="alamat" id="alamat" class="form-control" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label">Nomor Telepon</label>
                <input type="text" name="telepon" id="telepon" class="form-control" required>
            </div>

            <h2>Produk di Keranjang</h2>
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Total</th>
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
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

            <div class="d-flex justify-content-end mt-3">
                <h3 class="total">Total Belanja: Rp <?php echo number_format($total_belanja, 0, ',', '.'); ?></h3>
            </div>

            <div class="mb-3 mt-3">
                <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                <select name="metode_pembayaran" id="metode_pembayaran" class="form-select" required>
                    <option value="transfer_mandiri">Transfer Mandiri</option>
                    <option value="transfer_bri">Transfer BRI</option>
                    <option value="qris">QRIS</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Selesaikan Pembelian</button>
        </form>
    </div>

    <?php require "footer.php"; ?>
    
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>
</html>
