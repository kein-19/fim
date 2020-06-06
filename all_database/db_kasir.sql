-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 04:08 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pembayaran`
--

CREATE TABLE `data_pembayaran` (
  `No_Transaksi` int(11) NOT NULL,
  `Nama_Pelanggan` text NOT NULL,
  `Nama_Barang` varchar(50) NOT NULL,
  `Harga_Barang` int(20) NOT NULL,
  `QTY` int(20) NOT NULL,
  `Total_Bayar` int(20) NOT NULL,
  `Jumlah_Bayar` int(20) NOT NULL,
  `Kembali` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pembayaran`
--

INSERT INTO `data_pembayaran` (`No_Transaksi`, `Nama_Pelanggan`, `Nama_Barang`, `Harga_Barang`, `QTY`, `Total_Bayar`, `Jumlah_Bayar`, `Kembali`) VALUES
(1, 'sed', 'Flashdisk 32 GB', 70000, 2, 140000, 300000, 160000),
(2, 'asd', 'Flashdisk 32 GB', 70000, 2, 140000, 300000, 160000),
(3, 'ade', 'Mouse Logitech', 95000, 2, 190000, 200000, 10000),
(5, 'aku', 'Mouse Logitech', 95000, 2, 190000, 2000000, 1810000),
(6, 'sae', 'Mouse Logitech', 95000, 2, 190000, 200000, 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pembayaran`
--
ALTER TABLE `data_pembayaran`
  ADD PRIMARY KEY (`No_Transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pembayaran`
--
ALTER TABLE `data_pembayaran`
  MODIFY `No_Transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
