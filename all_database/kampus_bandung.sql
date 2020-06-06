-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 04:09 AM
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
-- Database: `kampus_bandung`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pembayaran`
--

CREATE TABLE `data_pembayaran` (
  `kd_pembayaran` varchar(20) NOT NULL,
  `nama_pelanggan` text NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_barang` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `total_bayar` int(20) NOT NULL,
  `jumlah_bayar` int(20) NOT NULL,
  `kembalian` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pembayaran`
--

INSERT INTO `data_pembayaran` (`kd_pembayaran`, `nama_pelanggan`, `nama_barang`, `harga_barang`, `qty`, `total_bayar`, `jumlah_bayar`, `kembalian`) VALUES
('001', 'topan', 'barang a', 70000, 2, 200000, 200000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pembayaran`
--
ALTER TABLE `data_pembayaran`
  ADD PRIMARY KEY (`kd_pembayaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
