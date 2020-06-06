-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 06:32 AM
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
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` char(9) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `email`, `jurusan`, `gambar`) VALUES
(1, '12190199', 'Fadli', 'fadli@nusamandiri.ac.id', 'Sistem informasi', '5e8a04052d00a.png'),
(2, '12190200', 'Ibnu', 'ibnu@nusamandiri.ac.id', 'Teknik Informatika', '5e8a0414d31f4.jpg'),
(3, '12190201', 'Malik', 'malik@nusamandiri.ac.id', 'Teknik Informatika', 'choji.jpg'),
(19, '12190203', 'Abdul', 'abdul@gmail.com', 'Teknik Mesin', '5e89fd91c2fa9.jpg'),
(20, '12190204', 'Yusron', 'yusron@gmail.com', 'Teknik Industri', '5e89fdda344a6.jpg'),
(21, '12190205', 'Mugny', 'mugny@gmail.com', 'Design Grafis', '5e89fe5758523.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'fadli', '$2y$10$ZxKsk4ej5QtUv7KTcGwGmuKkqCgtZ4jDjX/Wv9vavk2G55DIHQoj2'),
(2, 'admin', '$2y$10$APjWsJcoFtnNESTi.UjTuud6M8Jf6GYkjv9UjsMgNROzczkWS7MF.'),
(3, 'ibnu', '$2y$10$L/.NKgoBtDztsgBVl2qeEOvL0wj3Fs3lO7CTyoA4zIqiafQFvLMPe'),
(4, 'malik', '$2y$10$2rGre2eKgLNjXP6LLY17R.SHjkiiJdO9c9A.ob1JIXiu3MtzaAhPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
