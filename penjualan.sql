-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 10:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujikom`
--

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `apotik` varchar(50) NOT NULL,
  `tanggalpesan` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `tglproduksi` date NOT NULL,
  `tglexpired` date NOT NULL,
  `hargajual` int(11) NOT NULL,
  `gol` varchar(50) NOT NULL,
  `order` int(11) NOT NULL,
  `distributor` varchar(50) NOT NULL,
  `sales` varchar(50) NOT NULL,
  `warnabaju` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `kota`, `apotik`, `tanggalpesan`, `jenis`, `harga`, `satuan`, `tglproduksi`, `tglexpired`, `hargajual`, `gol`, `order`, `distributor`, `sales`, `warnabaju`) VALUES
(1, 'pekanbaru', 'Asean', ' 2020-17-05 ', 'sarungtangan', 35000, 'box', '2020-02-03', '2025-02-03', 40250, 'B', 25, 'Kalbe', 'santi', 'Hijau Putih'),
(2, 'pekanbaru', 'Asean', ' 2020-17-05 ', 'masker', 40000, 'box', '2020-05-04', '2021-05-04', 54000, 'A', 40, 'Kalbe', 'rusli', 'Kuning'),
(3, 'pekanbaru', 'Asean', ' 2020-17-05 ', 'handsanitizer', 45000, '100ml', '2020-04-04', '2021-04-04', 60750, 'A', 17, 'Sanbe', 'andri', 'Biru Oren'),
(4, 'pekanbaru', 'Kimia Farma', ' 2020-17-05 ', 'sarungtangan', 35000, 'box', '2020-02-03', '2025-02-03', 39550, 'B', 500, 'Kalbe', 'santi', 'Hijau Putih'),
(5, 'pekanbaru', 'Kimia Farma', ' 2020-17-05 ', 'masker', 40000, 'box', '2020-02-03', '2025-02-03', 45200, 'B', 500, 'Kalbe', 'reka', 'Ungu'),
(6, 'pekanbaru', 'Kimia Farma', ' 2020-17-05 ', 'handsanitizer', 45000, '100ml', '2020-04-04', '2021-04-04', 60750, 'A', 2000, 'Sanbe', 'andri', 'Biru Oren'),
(7, 'semarang', 'Kimia Farma', ' 2020-17-05 ', 'sarungtangan', 37000, 'box', '2020-02-03', '2025-02-03', 41810, 'B', 2500, 'Kalbe', 'reja', 'Hijau Putih'),
(8, 'semarang', 'Kimia Farma', ' 2020-17-05 ', 'masker', 45000, 'box', '2020-05-04', '2025-05-04', 50850, 'A', 2500, 'Indo Farma', 'anto', 'Ungu'),
(9, 'semarang', 'Kimia Farma', ' 2020-17-05 ', 'handsanitizer', 56000, '100ml', '2020-04-04', '2021-04-04', 75600, 'A', 3500, 'Sanbe', 'budiman', 'Biru Oren');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
