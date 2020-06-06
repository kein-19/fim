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
-- Database: `db_webpro2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_1`
--

CREATE TABLE `tabel_1` (
  `c_name` varchar(20) NOT NULL,
  `f_name` varchar(70) NOT NULL,
  `tgl_in` date NOT NULL,
  `tgl_out` date NOT NULL,
  `rupiah` double NOT NULL,
  `jml` int(11) NOT NULL,
  `array_days` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_1`
--

INSERT INTO `tabel_1` (`c_name`, `f_name`, `tgl_in`, `tgl_out`, `rupiah`, `jml`, `array_days`) VALUES
('yogi', 'yogi prayogi', '2015-08-12', '2015-08-15', 30000, 2, 'senin selasa rabu kamis jumat sabtu minggu'),
('aji', 'sopian aji', '2015-08-13', '2015-09-01', 70000, 1, ''),
('ali', 'ali idrus', '2015-08-13', '2015-09-02', 0, 0, ''),
('rosi', 'rosi kusuma', '2015-10-10', '2015-11-20', 0, 0, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
