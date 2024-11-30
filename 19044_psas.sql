-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2024 at 10:18 AM
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
-- Database: `19044_psas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tiket_pemesanan`
--

CREATE TABLE `tiket_pemesanan` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(225) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tanggal_pemesanan` date DEFAULT NULL,
  `jumlah_tiket` int(11) DEFAULT NULL,
  `total_harga` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tiket_pemesanan`
--

INSERT INTO `tiket_pemesanan` (`id`, `nama_lengkap`, `email`, `tanggal_pemesanan`, `jumlah_tiket`, `total_harga`) VALUES
(1, 'tri riska', 'tririska25@gmail.com', '2024-11-29', 4, 400000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tiket_pemesanan`
--
ALTER TABLE `tiket_pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tiket_pemesanan`
--
ALTER TABLE `tiket_pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
