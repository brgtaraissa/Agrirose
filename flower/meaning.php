<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/style.css">
    <title>Meaning of Flowers</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <!-- font -->
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
        }

        .container-fluid {
            padding: 50px 0;
            background: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
        }

        .section-title {
            font-size: 36px;
            font-weight: bold;
            color: #590d22;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .flower-description {
            font-size: 18px;
            color: #555;
            margin-bottom: 50px;
        }

        .flower-section {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-wrap: wrap;
            margin-bottom: 60px;
            text-align: center;
        }

        .flower-section .flower-box {
            width: calc(50% - 20px);
            margin: 10px;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s;
        }

        .flower-section .flower-box img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
        }

        .flower-section .flower-box:hover {
            transform: scale(1.05);
        }

        .flower-section .flower-info {
            padding: 20px;
            background-color: #fff;
            height: 250px; /* Tinggi maksimum untuk box */
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .flower-title {
            font-size: 28px;
            font-weight: bold;
            color: #e17a86;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .flower-description p {
            font-size: 16px;
            color: #777;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2; /* Jumlah baris maksimum */
            -webkit-box-orient: vertical;
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 28px;
            }

            .flower-section .flower-box {
                width: calc(100% - 20px);
            }
        }
    </style>
</head>

<body>
    <?php require "navbar.php"; ?>

    <div class="container-fluid text-center">
        <div class="container">
            <h3 class="section-title">Meaning of Flowers</h3>
            <p class="flower-description mb-5">Discover the meanings behind the colors of roses. Each color carries a unique symbolism and message.</p>

            <div class="flower-section">
                <div class="flower-box">
                    <img src="assets/images/bunga/Mawar Merah 50000.png" alt="Red Rose">
                    <div class="flower-info">
                        <h5 class="flower-title">Red Rose</h5>
                        <p class="flower-description">Mawar merah secara tradisional melambangkan cinta dan romantisme yang mendalam. Ini adalah simbol yang paling umum dikaitkan dengan mawar dan sering digunakan untuk menyatakan cinta, hasrat, atau keinginan yang kuat.</p>
                    </div>
                </div>

                <div class="flower-box">
                    <img src="assets/images/bunga/Mawar Putih 50000.png" alt="White Rose">
                    <div class="flower-info">
                        <h5 class="flower-title">White Rose</h5>
                        <p class="flower-description">Mawar putih biasanya melambangkan kebersihan, kesucian, dan kepolosan. Mereka sering dikaitkan dengan kebajikan, keagungan, dan penghargaan. Mawar putih juga bisa digunakan untuk menyampaikan rasa hormat atau penghargaan yang tulus.</p>
                    </div>
                </div>

                <div class="flower-box mt-3">
                    <img src="assets/images/bunga/Mawar Kuning 50000.png" alt="Yellow Rose">
                    <div class="flower-info">
                        <h5 class="flower-title">Yellow Rose</h5>
                        <p class="flower-description">Mawar kuning sering dikaitkan dengan persahabatan, kebahagiaan, dan kegembiraan. Mereka bisa menjadi cara yang bagus untuk menyatakan kebahagiaan, persahabatan yang tulus, atau untuk memberi semangat kepada seseorang yang sedang mengalami perubahan hidup atau pencapaian.</p>
                    </div>
                </div>

                <div class="flower-box mt-3">
                    <img src="assets/images/bunga/Mawar Pink 50000.png" alt="Pink Rose">
                    <div class="flower-info">
                        <h5 class="flower-title">Pink Rose</h5>
                        <p class="flower-description">Mawar pink melambangkan keindahan, kesyukuran, dan rasa syukur. Mereka juga bisa melambangkan penghargaan, kegembiraan, atau rasa terima kasih. Tingkat kecerahan dan nuansa warna pink dapat memberikan makna yang lebih dalam, dari rasa cinta yang muda dan gembira hingga rasa syukur yang dalam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require "footer.php"; ?>

    <script src="script.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>

</html>
