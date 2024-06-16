-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2024 at 09:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrirose`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id`, `pesanan_id`, `produk_id`, `qty`, `harga`) VALUES
(1, 1, 8, 1, 35000.00),
(2, 1, 9, 7, 30000.00),
(3, 2, 11, 1, 30000.00),
(4, 3, 11, 1, 30000.00),
(5, 4, 8, 11, 35000.00),
(6, 5, 8, 1, 35000.00),
(7, 6, 28, 1, 50000.00),
(8, 7, 29, 1, 500000.00),
(9, 8, 8, 1, 35000.00),
(10, 9, 8, 1, 35000.00),
(11, 10, 8, 1, 35000.00),
(12, 11, 30, 1, 200000.00),
(13, 12, 8, 1, 35000.00),
(14, 12, 30, 1, 200000.00);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Bunga Potong'),
(2, 'Buket'),
(3, 'Rangkaian'),
(4, 'Dekorasi'),
(7, 'Bunga Kering');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id`, `nama`, `no_hp`, `email`, `tanggal`, `created_at`) VALUES
(8, 'Aura Putri Nabila', '085158266775', 'auranabila233@gmail.com', '2024-06-13', '2024-06-13 06:15:38'),
(9, 'Muhammad Irfan Virgiano ', '085158266775', 'virgiano25@gmail.com', '2024-06-14', '2024-06-13 18:36:36'),
(10, 'Muhammad Irfan Virgiano', '085158266775', 'virgiano25@gmail.com', '2024-06-16', '2024-06-15 18:58:20'),
(11, 'Muhammad Irfan Virgiano ', '085158266775', 'virgiano25@gmail.com', '2024-06-16', '2024-06-15 19:06:41');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `total_belanja` decimal(15,2) NOT NULL,
  `tanggal_pesanan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama`, `alamat`, `telepon`, `total_belanja`, `tanggal_pesanan`) VALUES
(1, 'Muhammad Irfan Virgiano ', 'Malang', '085158266775', 245000.00, '2024-06-12 06:41:46'),
(2, 'Muhammad Irfan Virgiano ', 'Karangploso', '08', 30000.00, '2024-06-12 06:49:35'),
(3, 'Muhammad Irfan Virgiano ', 'Malang', '085158266775', 30000.00, '2024-06-12 06:53:30'),
(4, 'pp', 'osduahouahd', '9048398035', 385000.00, '2024-06-12 07:11:28'),
(5, 'ouhfoalhfias', 'dllshfdslhfois', '8450430', 35000.00, '2024-06-12 07:11:51'),
(6, 'Muhammad Irfan Virgiano ', 'Malang', '085158266775', 50000.00, '2024-06-12 09:52:09'),
(7, 'Aura Putri Nabila', 'Malang', '08', 500000.00, '2024-06-12 11:52:40'),
(8, 'Aura Putri Nabila', 'Malang', '085158266775', 35000.00, '2024-06-13 18:27:28'),
(9, 'Muhammad Irfan Virgiano ', 'pp', '085158266775', 35000.00, '2024-06-15 17:17:25'),
(10, 'Muhammad Irfan Virgiano ', 'pp', '085158266775', 35000.00, '2024-06-15 17:24:02'),
(11, 'Muhammad Irfan Virgiano ', 'Malang', '085158266775', 200000.00, '2024-06-15 18:59:28'),
(12, 'Muhammad Irfan Virgiano ', 'Malang', '085158266775', 235000.00, '2024-06-15 19:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `ketersediaan_stok` enum('habis','tersedia') DEFAULT 'tersedia',
  `kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kategori_id`, `nama`, `harga`, `foto`, `detail`, `ketersediaan_stok`, `kategori`) VALUES
(8, 1, 'Aster Merah Kuning', 35000, 'KF59t9Tflfc5Ud5bQkVD.png', '                                                    ', 'tersedia', NULL),
(9, 1, 'Aster Jingga ', 30000, 'GjIP2qjkQCIbq3RR5FBd.png', '', 'tersedia', NULL),
(10, 1, 'Aster Pink Putih', 35000, '7VvggoXpmPbYEcMFwle9.png', '', 'tersedia', NULL),
(11, 1, 'Aster Pink', 30000, 'rXEcPk0LIlToRae0dfeW.png', '', 'tersedia', NULL),
(12, 1, 'Garbera Putih ', 25000, 'Z3Hp6dOfOjH3spf0Ltib.png', '', 'tersedia', NULL),
(13, 1, 'Garbera Pink', 25000, 'ZhMRXTgymlI3KaogCHyi.png', '', 'tersedia', NULL),
(14, 1, 'Mawar Jingga', 70000, 'HPAXBZjFVjdQOIrPnLDS.png', '', 'tersedia', NULL),
(15, 1, 'Mawar Kuning', 50000, 'zkBbIVgtHWw9NIqN77Lc.png', '', 'tersedia', NULL),
(16, 1, 'Mawar Pink', 50000, 'suRWAMc5ccGgJVY2Ph5a.png', '', 'tersedia', NULL),
(17, 1, 'Mawar Merah', 50000, 'WmLQ4r9EtV6AKlbIUa93.png', '', 'tersedia', NULL),
(18, 1, 'Mawar Pink Soft', 50000, 'qPLY0WX5EijV81P0HNuw.png', '', 'tersedia', NULL),
(19, 1, 'Mawar Putih ', 50000, '4nj4yAi9BKId8cT7tAR5.png', '', 'tersedia', NULL),
(20, 1, 'Mawar Ungu', 50000, 'p0EjPhxjKGfnEnUv2bbf.png', '', 'tersedia', NULL),
(21, 1, 'Mawar Salem', 50000, 'gSWcWuY3zOkG8C8zv77D.png', '', 'tersedia', NULL),
(22, 1, 'Pikok Ungu', 25000, 'QuPBun2NxjdOuJtclttM.png', '', 'tersedia', NULL),
(23, 1, 'Pikok Pink', 25000, 'bO8HGNLf2ucqYjG6Bv6U.png', '', 'tersedia', NULL),
(24, 1, 'Pikok Ungu Soft', 25000, 'ig1gFfa57EAUVo529dep.png', '', 'tersedia', NULL),
(25, 1, 'Aster Kuning', 30000, 'LmSMKD23GdsXljvAkgjs.png', '', 'tersedia', NULL),
(26, 1, 'Ruskus', 15000, 'jMTXNqsUyLsKqDR4aZQj.png', '', 'tersedia', NULL),
(27, 1, 'Leather Leaf', 15000, 'VMsuV7w2YrVvT8x0133l.png', '', 'tersedia', NULL),
(28, 2, 'Dried Bouquet', 50000, 'IuGv6VU0KZXGwKdBtmTZ.png', '', 'tersedia', NULL),
(29, 2, 'Flower Bouquet Love', 500000, 'NcaSwpDcBuEZptTQYUNa.png', '', 'tersedia', NULL),
(30, 2, 'Flower Bouquet with Balloon', 200000, 'yn2Xl6ZiCgqy8aQr3Dyy.png', '', 'tersedia', NULL),
(31, 2, 'Flower Bouquet with Chocolate', 300000, 'OqqnCfwIAHHUX4E7bwQR.png', '', 'tersedia', NULL),
(32, 2, 'Flower Bouquet with Money', 700000, 'Cq5W8OtxeLWIFcBhdz5O.png', '', 'tersedia', NULL),
(33, 2, 'Mini Sunflower Bouquet', 45000, '58yO2UZlnjwYW84pW6sk.png', '', 'tersedia', NULL),
(34, 2, 'Mix Bouquet', 300000, 'NvhLTJNukJX3fyh90S5e.png', '', 'tersedia', NULL),
(35, 2, 'White Flower Bouquet', 100000, '64fr6dfgXNyS0JTTVwDB.png', '', 'tersedia', NULL),
(36, 4, 'Married Decoration', 1000000, 'jURWUqYfJOc10FqQlOwn.png', '', 'tersedia', NULL),
(37, 3, 'Papan Ucapan', 800000, 'lQjI8DUy8rOuewytSJKW.png', '', 'tersedia', NULL),
(38, 7, 'Pikok', 20000, 'aNgXmhg3WBHqAtazx9MV.png', '                                                                                                        ', 'tersedia', NULL),
(39, 7, 'Mawar', 25000, 'g1MpdGqHJYgJtOq7VWVM.png', '                                                    ', 'tersedia', NULL),
(40, 7, 'Baby Breath', 25000, 'kCkGehAvsxy0qe6JsDr2.png', '                                                    ', 'tersedia', NULL),
(41, 3, 'Papan Mahkota ', 850000, 'yiQGe1U20TJaoLoQXWEk.png', '', 'tersedia', NULL),
(42, 3, 'Papan 3 Titik', 700000, 'qAxPSqQj2qOIQ8NZ5itP.png', '', 'tersedia', NULL),
(43, 3, 'Papan 2 Titik', 600000, 'rGUwSWql8J0e40VwOrVs.png', '', 'tersedia', NULL),
(44, 3, 'Papan 1 Titik', 500000, 'iaUoWgmHJhuscjka5TZQ.png', '', 'tersedia', NULL),
(45, 4, 'Dekorasi Wisuda Ar Rahmah Putri 2024', 0, '0lxvV13P3dvR9qNeXvJW.png', '', 'tersedia', NULL),
(48, 3, 'Papan Kecil', 400000, 'Je1hrwnDzGHgPM9QKcAA.png', '', 'tersedia', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesanan_id` (`pesanan_id`),
  ADD KEY `produk_id` (`produk_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `kategori_produk` (`kategori_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD CONSTRAINT `detail_pesanan_ibfk_1` FOREIGN KEY (`pesanan_id`) REFERENCES `pesanan` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_pesanan_ibfk_2` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kategori_produk` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
