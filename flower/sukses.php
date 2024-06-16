<?php
session_start();

// Cek apakah metode pembayaran dan pesan WhatsApp dikirim
if (!isset($_GET['metode_pembayaran']) || !isset($_GET['whatsapp_message'])) {
    header('Location: index.php');
    exit();
}

$metode_pembayaran = htmlspecialchars($_GET['metode_pembayaran']);
$whatsapp_message = htmlspecialchars($_GET['whatsapp_message']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrirose - Terima Kasih</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="scss/style.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .thanks-container {
            margin-top: 50px;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .thanks-container h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
        }
        .thanks-container p {
            font-size: 1.1rem;
            color: #555;
        }
        .thanks-container .alert {
            padding: 20px;
            border-radius: 8px;
        }
        .thanks-container .btn {
            font-size: 1rem;
            padding: 10px 20px;
        }
        .thanks-container .qris-img {
            max-width: 300px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php require "navbar.php"; ?>

    <div class="container thanks-container">
        <h1 class="mb-4">Terima Kasih atas Pesanan Anda!</h1>
        <p>Silakan lakukan pembayaran menggunakan metode berikut:</p>
        
        <?php if ($metode_pembayaran == 'transfer_mandiri') { ?>
            <div class="alert alert-info">
                <h4 class="alert-heading">Transfer Mandiri</h4>
                <p>Nomor Rekening: <strong>1440024736206</strong></p>
                <p>Atas Nama: <strong>Angelina Rochmawati</strong></p>
            </div>
        <?php } elseif ($metode_pembayaran == 'transfer_bri') { ?>
            <div class="alert alert-info">
                <h4 class="alert-heading">Transfer BRI</h4>
                <p>Nomor Rekening: <strong>122901020085502</strong></p>
                <p>Atas Nama: <strong>Angelina Rochmawati</strong></p>
            </div>
        <?php } elseif ($metode_pembayaran == 'qris') { ?>
            <div class="alert alert-info">
                <h4 class="alert-heading">QRIS</h4>
                <p>Scan kode QR berikut untuk melakukan pembayaran:</p>
                <img src="path/to/qris_image.jpg" alt="QRIS" class="img-fluid qris-img">
            </div>
        <?php } ?>

        <p>Setelah melakukan pembayaran, silakan konfirmasi ke nomor WhatsApp kami dengan mengklik tautan di bawah ini:</p>
        <a href="https://wa.me/628819860179?text=<?php echo $whatsapp_message; ?>" class="btn btn-success mt-3 text-white"><i class="fab fa-whatsapp"></i> Konfirmasi via WhatsApp</a>
    </div>

    <?php require "footer.php"; ?>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>
</html>
