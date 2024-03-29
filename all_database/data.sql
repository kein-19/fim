-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 04:05 AM
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
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_sheet1`
--

CREATE TABLE `all_sheet1` (
  `nama_siswa` varchar(19) DEFAULT NULL,
  `alamat` varchar(23) DEFAULT NULL,
  `tgl_lahir` varchar(11) DEFAULT NULL,
  `jenis_kel` varchar(9) DEFAULT NULL,
  `thn_ajaran` decimal(5,1) DEFAULT NULL,
  `nama_ayah` varchar(16) DEFAULT NULL,
  `pend_akhir_ayah` varchar(4) DEFAULT NULL,
  `pekerjaan_ayah` varchar(16) DEFAULT NULL,
  `nama_ibu` varchar(15) DEFAULT NULL,
  `pend_akhir_ibu` varchar(4) DEFAULT NULL,
  `pekerjaan_ibu` varchar(12) DEFAULT NULL,
  `alamat_ortu` varchar(23) DEFAULT NULL,
  `nama_wali` varchar(14) DEFAULT NULL,
  `pend_akhir_wali` varchar(3) DEFAULT NULL,
  `pekerjaan_wali` varchar(14) DEFAULT NULL,
  `alamat_wali` varchar(17) DEFAULT NULL,
  `sekolah_asal` varchar(16) DEFAULT NULL,
  `alamat_sekolah` varchar(17) DEFAULT NULL,
  `tahun_lulus` varchar(4) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `jurusan` varchar(3) DEFAULT NULL,
  `agama` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_sheet1`
--

INSERT INTO `all_sheet1` (`nama_siswa`, `alamat`, `tgl_lahir`, `jenis_kel`, `thn_ajaran`, `nama_ayah`, `pend_akhir_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pend_akhir_ibu`, `pekerjaan_ibu`, `alamat_ortu`, `nama_wali`, `pend_akhir_wali`, `pekerjaan_wali`, `alamat_wali`, `sekolah_asal`, `alamat_sekolah`, `tahun_lulus`, `status`, `jurusan`, `agama`) VALUES
('Yunita Sari', 'Jl. Simpang Gajah Mada ', '02-Nov-2004', 'Perempuan', '2016.0', 'Juwaidi', 'S1', 'PNS', 'Rika', 'S1', 'PNS', 'Jl. Simpang Gajah Mada ', '', '', '', '', 'SMP Nusan Penida', 'Jl. Setia Budi', 'null', 'aktif', 'ipa', ' Islam'),
('Irwan Gunawan', 'Perumahan Griya Giri', '16-Sep-2004', 'Laki-Laki', '2016.0', 'Ridwan Yusuf', 'S1', 'PNS', 'Alya Nir', 'SMA', 'Rumah Tangga', 'Perumahan Griya Giri', '', '', '', '', 'SMP N 30', 'Jl. Melati', 'null', 'aktif', 'ipa', ' Islam'),
('Yulia Khairunisa', 'Jl. Kapten Griya', '04-Sep-2004', 'Perempuan', '2016.0', '', '', '', '', '', '', '', 'Jamal ', 'S1', 'PNS', 'Jl. Kapten Griya', 'SMP N 30', 'Jl. Melati', 'null', 'aktif', 'ipa', ' Islam'),
('Adi Pratama', 'Jl. Griya Sari', '11-Aug-2004', 'Laki-Laki', '2016.0', 'Gunawan', 'S1', 'Dosen', 'Siri Jumaiti', 'SMA', 'Penjual', 'Jl. Griya Sari ', '', '', '', '', 'SMP N 7', 'Jl. Pringan', 'null', 'aktif', 'ipa', ' Islam'),
('Ahmad Pratama', 'JL. Sangkar', '03-Sep-2004', 'Laki-Laki', '2016.0', 'Badrun', 'S1', 'PNS', 'Sari Yulia', 'SMA', 'Rumah Tangga', 'Jl. Sangkar', '', '', '', '', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', 'aktif', 'ipa', ' Islam'),
('Dita Rahmadani', 'Jl. Ujung Siri', '08-Dec-2004', 'Perempuan', '2016.0', '', '', '', '', '', '', '', 'Badrun Gunawan', 'SMA', 'Penjual', 'Jl. Ujung Siri', 'SMP N 1', 'Jl. Mawar', 'null', 'aktif', 'ipa', ' Islam'),
('Fitriayani', 'Jl. Mawar Sari', '22-Aug-2004', 'Perempuan', '2016.0', 'Riky Gunawan', 'S1', 'PNS', 'Fani', 'SMP', 'Rumah Tangga', 'Jl Mawar Sari', '', '', '', '', 'SMP N 30', 'Jl. Melati', 'null', 'aktif', 'ipa', ' Islam'),
('Miftahul', 'Jl. Anggrek', '11-Nov-2004', 'Laki-Laki', '2016.0', 'Andri', 'SMA', 'Penjual', 'Fina', 'SMA', 'Rumah Tangga', 'Jl. Anggrek', '', '', '', '', 'SMP Petani', 'Jl. Sawah', 'null', 'aktif', 'ipa', ' Islam'),
('Indra Aswari', 'Jl. Lereng Lembah', '22-Sep-2004', 'Laki-Laki', '2016.0', 'Ginting Siregar', 'S1', 'PNS', 'Farah Jaskiah', 'S1', 'Pegawai Bank', 'Jl. Lereng Lembah', '', '', '', '', 'SMP Pancasila', 'Jl. Simp Pos', 'null', 'aktif', 'ipa', ' Islam'),
('Rahma Aulia', 'Jl. Jangkar', '15-Oct-2004', 'Perempuan', '2016.0', 'Ridwan Kamil', 'S1', 'Guru', 'Zaskiah Sungkar', 'S1', 'Guru', 'Jl Jangkar', '', '', '', '', 'SMP N 1', 'Jl. Melati', 'null', 'aktif', 'ipa', ' Islam'),
('Anika Andriani', 'Jl. Pulpen', '07-Sep-2002', 'Perempuan', '2016.0', 'Disra Jamal', 'S1 ', 'Guru', 'Rahma ', 'SMA', 'Rumah Tangga', 'Jl. Pulpen', '', '', '', '', 'SMP N 30', 'Jl. Melati', 'null', 'aktif', 'ipa', ' Islam'),
('Oktavia Vira', 'Jl. Pulpen', '08-Sep-2002', 'Perempuan', '2016.0', 'Disra Jamal', 'S1', 'Guru', 'Rahma ', 'SMA', 'Rumah Tangga', 'Jl. Pulpen', '', '', '', '', 'SMP N 30', 'Jl. Melati', 'null', 'aktif', 'ipa', ' Islam'),
('Muhammad Ahmad', 'Jl. Beo', '09-Sep-2002', 'Laki-Laki', '2016.0', 'Indra Tami', 'S1', 'Pengusaha', 'Rida Oktavia', 'S1', 'Rumah Tangga', '', '', '', '', '', 'SMP Nusan Penida', 'Jl. Setia Budi', 'null', 'aktif', 'ipa', ' Islam'),
('Niken Tamara', 'Jl. Langgar', '10-Sep-2002', 'Perempuan', '2016.0', 'Purnomo ', 'S1', 'PNS', 'Nur Cahya', 'S1', 'Guru', 'Jl. Langgar', '', '', '', '', 'SMP N 7 ', 'Jl. Pringan', 'null', 'aktif', 'ipa', ' Kristen'),
('Wicaksonon Putra', 'Jl. Berjaya', '11-Sep-2002', 'Laki-Laki', '2016.0', 'Putra Dwi', 'S1', 'Penjual', 'Nuril ', 'S1', 'Guru', 'Jl. Berjaya', '', '', '', '', 'SMP N 1 ', 'Jl. Melati', 'null', 'aktif', 'ipa', ' Islam'),
('Gani Purnama', 'Jl. Selimut', '12-Sep-2002', 'Laki-Laki', '2016.0', 'Banyu Mas', 'SMA', 'TNI', 'Martina ', 'S3', 'Dosen', 'Jl. Selimut', '', '', '', '', 'SMP Sultan', 'Jl. Tanjung Rejo', 'null', 'aktif', 'ipa', ' Islam'),
('Gina Putri', 'Jl. Barbasia Nili', '13-Sep-2002', 'Perempuan', '2016.0', 'Satria Musto', 'S1', 'Polisi', 'Mila Dini', 'S1', 'Guru', 'Jl. Barbasia Nili', '', '', '', '', 'SMP N 10', 'Jl. Ringroad', 'null', 'aktif', 'ipa', ' Islam'),
('Muhammad Ari', 'Jl. Biduri', '14-Sep-2002', 'Laki-Laki', '2016.0', 'Ananda', 'S1', 'PNS', 'Dini Rahma', 'S1', 'PNS', 'JL. Biduri', '', '', '', '', 'SMP  Swasta', 'Jl. Ahmad Yani', 'null', 'aktif', 'ipa', ' Islam'),
('M Ridwan Tarigan', 'Jl. Asoka', '15-Sep-2002', 'Laki-Laki', '2016.0', 'Muhanda', 'S1', 'PNS', 'Lala Riri', 'SMP', 'Rumah Tangga', 'Jl. Asoka', '', '', '', '', 'SMP Telkom', 'Jl. Simp Selayang', 'null', 'aktif', 'ipa', ' Islam'),
('Anisa Barus', 'Jl. A.H Nasution', '16-Sep-2002', 'Perempuan', '2016.0', 'Jono', 'S2', 'Dosen', 'Jumayati', 'SMA', 'Penjual', 'Jl. A.H Nasution', '', '', '', '', 'SMP N 7', 'Jl. Pringan', 'null', 'aktif', 'ipa', ' Islam'),
('M Rosadi ', 'Jl. Raya Licin', '17-Sep-2002', 'Laki-Laki', '2016.0', 'Agung', 'S1', 'PNS', 'Ajeng', 'SMA', 'Penjual', 'Jl. Raya Licin', '', '', '', '', 'SMP N 30', 'Jl. Melati', 'null', 'aktif', 'ipa', ' Islam'),
('Nur Andina Rahma', 'Jl. Muwarma', '18-Sep-2002', 'Perempuan', '2016.0', '', '', '', '', '', '', '', 'Budi Gunawan', 'S1', 'PNS', 'Jl. Muwarma', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', 'aktif', 'ipa', ' Islam'),
('Brastila Lesti', 'Jl. Banterang', '19-Sep-2002', 'Perempuan', '2016.0', '', '', '', '', '', '', '', 'Ridwan Jamal', 'SMA', 'TNI', 'Jl. Banterang', 'SMP N 10', 'Jl. Ringroad', 'null', 'aktif', 'ipa', ' Kristen'),
('Dinda Lala', 'Jl. Klontang', '20-Sep-2002', 'Perempuan', '2016.0', 'Gunawan Purnomo', 'SMA', 'Penjual', 'Aulia Rahma', 'SMA', 'Penjual', 'Jl. Klontang', '', '', '', '', 'SMP Telkom', 'Jl. Simp Selayang', 'null', 'aktif', 'ipa', ' Islam'),
('Bayhaqi Daulay', 'Jl. Eka Rasmi', '21-Sep-2002', 'Laki-Laki', '2016.0', 'Haqi Jono', 'S1', 'PNS', 'Fitriayani', 'SMA', 'Rumah Tangga', 'Jl. Eka Rasmi', '', '', '', '', 'SMP Muhamadiah', 'Jl. Seta Budi', 'null', 'aktif', 'ipa', ' Islam'),
('Banyu Dwi', 'Jl. Purnama Jaya', '22-Sep-2002', 'Laki-Laki', '2016.0', '', '', '', '', '', '', '', 'Vira Oktavia', 'S1', 'Guru', 'Jl. Purnama Jaya', 'SMP N 30', 'Jl. Melati', 'null', 'aktif', 'ipa', ' Islam'),
('Ameta Dian Fachira', 'Jl. Bougeinville 2', '20-Jun-2002', 'Perempuan', '2016.0', 'Zulkilfi', 'S1', 'PNS', 'Yetti', 'S1', 'PNS', 'Jl. Bougeinville 2', '', '', '', '', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', 'aktif', 'ips', ' Islam'),
('Rafika Aigo', 'Jl. Purnama Jaya', '21-Sep-2001', 'Perempuan', '2016.0', 'Muhammad Udin', 'S1', 'Guru', 'Ananda', 'SMA', 'Rumah Tangga', 'Jl. Purnama Jaya', '', '', '', '', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', 'aktif', 'ips', ' Islam'),
('Dinda Nazli', 'Jl. Bougeinville 3', '16-Nov-2003', 'Perempuan', '2017.0', 'Budi', 'SMA', 'Penjual', 'Ana', 'SMA', 'Penjual', 'Jl. Bougeinville 3', '', '', '', '', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', 'aktif', 'ips', ' Islam'),
('Anto Siregar', 'Jl. Satu Jiah', ' 29/09/2003', 'Laki-Laki', '2017.0', ' Kiki', 'S1', 'Pekerja Kantoran', 'Jesica', 'S1', 'PNS', 'Jl. Satu Jua', '', '', '', '', 'SMP Santa Thomas', 'Jl. Katamso', 'null', 'aktif', 'ips', 'Kristen'),
('Legardo Hamoloan', 'Jl. Asisi', '21-Nov-2003', 'Laki-Laki', '2017.0', 'Jans', ' SMA', 'TNI', 'Selvi', 'S1', 'PNS', 'Jl. Asisi', '', '', '', '', 'SMP Nusan Penida', 'Jl. Setia Budi', 'null', 'aktif', 'ips', 'Kristen'),
('Johan ', 'Jl. Pembangunan', '22-Jan-2003', 'Laki-Laki', '2017.0', 'Motoharu', 'SMA', 'Polisi', 'Fenni Lim', 'S1', 'Rumah Tangga', 'Jl. Pembangunan', '', '', '', '', 'SMP Santa Thomas', 'Jl. Katamso', 'null', 'aktif', 'ips', 'Kristen'),
('Yusuf Aldiansyah', 'Jl. Eka Rasmi', '04-Jun-2003', 'Laki-Laki', '2017.0', ' Fauzan', 'S1', 'PNS', 'Yessi', 'S1', 'PNS', 'Jl. Eka Rasmi', '', '', '', '', 'SMP N 30', 'Jl. Melati', 'null', 'aktif', 'ips', 'Islam'),
('Defina Yenatta', 'Jl. Ujung Siri', '07-Jul-2003', 'Perempuan', '2017.0', 'Muhammad Ari', 'S1', 'Penjual', 'Dian Ningsih', 'S1', 'Dosen', 'Jl. Ujung Sari', '', '', '', '', 'SMP N 10', 'Jl. Ringroad', 'null', 'aktif', 'ips', 'Islam'),
('Nael', 'Jl. Juanita', '10-Jul-2003', 'Laki-Laki', '2017.0', 'Victor Thalib', 'S1', 'Guru', 'Heven', 'S1', 'Guru', 'Jl. Juanita', '', '', '', '', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', 'aktif', 'ips', 'Kristen'),
('Thoriq Owen', 'Jl. Karya Jaya', '12-Feb-2003', 'Laki-Laki', '2017.0', 'Angga Satrio', 'S1', 'PNS', 'Okki ', 'S1', 'Guru', ' Jl. Karya Jaya', '', '', '', '', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', 'aktif', 'ips', 'Islam'),
('Kayla Hayyan', 'Jl. Jaya Karya', '21-Mar-2003', 'Perempuan', '2017.0', 'Eko Joko', 'SMA', 'Penjual', 'Nadia', 'SMA', 'Penjual', 'Jl. Jaya Karya', '', '', '', '', 'SMP Muhamadiah', 'Jl. Setia Budi', 'null', 'aktif', 'ips', 'Islam'),
('Assidiq Salma', 'Jl. Perabotan', '14-Nov-2003', 'Perempuan', '2017.0', 'Fauzan Johan', 'S1', 'Pekerja Kantoran', 'Ulfi Nadia', 'S1', 'PNS', 'Jl. Perabotan', '', '', '', '', 'SMP Pancasila', 'Jl. Dr Mansyur', 'null', 'aktif', 'ips', 'Islam'),
('Siska', 'Jl. Rata rata', '26-Sep-2003', 'Perempuan', '2017.0', 'Bisma', 'S1', 'PNS', 'Ratna', 'S1', ' PNS', 'Jl. Rata rata', '', '', '', '', 'SMP Telkom', 'Jl. Simp Selayang', 'null', 'aktif', 'ips', 'Islam'),
('Crish ', 'Jl. Perumahan', '22-Mar-2003', 'Laki-Laki', '2017.0', 'Jackie', 'S1', 'Pengusaha', 'Linlin', 'S1', 'Rumah Tangga', 'Jl. Perumahan', '', '', '', '', 'SMP Santa Thomas', 'Jl. Katamso', 'null', 'aktif', 'ips', 'Budha'),
('Eggy Saputra Tama', 'Jl. Kudus', '13-Mar-2003', 'Laki-Laki', '2017.0', 'Budionon', 'S1', 'PNS', 'Afiful Aufa', 'S1 ', 'Penjual', 'Jl. Kudus', '', '', '', '', 'SMP Telkom', 'Jl. Simp Selayang', 'null', 'aktif', 'ips', 'Islam'),
('Rian Febrianto', 'Jl. Penyabungan', '15-Nov-2002', 'Laki-Laki', '2017.0', 'Bahdrul Fitriana', 'SMA', 'Satpam', 'Nur Fatiah', 'SMP', 'Penjual', 'Jl. Penyabungan', '', '', '', '', 'SMP N 30 ', ' Jl. Melati', 'null', 'aktif', 'ips', 'Islam'),
('Andri Siregar', 'Jl. Pembangunan', '30/02/2003', 'Laki-Laki', '2017.0', 'Dedi Siregar', 'S1', 'PNS', ' Nazli', 'S1', 'PNS', 'Jl. Pembangunan', '', '', '', '', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', 'aktif', 'ips', 'Kristen'),
('Yusri ', 'Jl. Mawar Sari', '21-Dec-2003', 'Laki-Laki', '2017.0', '', '', '', '', '', '', '', 'Rahmat Anto', 'S1', ' Penjual', 'Jl. Mawar', 'SMP Santa Thomas', 'Jl. Katamso', 'null', 'aktif', 'ips', 'Budha'),
('Ram Hevelio', 'Jl. Perumahan', '14/18/2003', 'Laki-Laki', '2017.0', 'Rio Pratama', 'S1', 'Pengusaha', 'Ananda ', 'S1 ', 'Rumah Tangga', 'Jl. Perumahan', '', '', '', '', 'SMP Santa Thomas', 'Jl. Katamso', 'null', 'aktif', 'ips', 'Budha'),
('Baiq Agustina', 'Jl. Aeikmel', '15-Sep-2003', 'Laki-Laki', '2017.0', 'Abdul Mukti', 'S1', 'PNS', 'Marwah', ' S1', 'PNS', 'Jl. Aeikmil', '', '', '', '', 'SMP Muhamadiah', 'Jl. Setia Budi', 'null', 'aktif', 'ips', 'Islam'),
('Handri Pathurrahman', 'Jl. Lili', '21-Jan-2003', 'Laki-Laki', '2017.0', 'Jaka Susanto', 'SMA', 'Penjual', 'Madriah Jumiah', 'SMA ', 'Rumah Tangga', 'Jl. Lili', '', '', '', '', 'SMP Muhamadiah', 'Jl. Setia Budi', 'null', 'aktif', 'ips', 'Islam'),
('Novia Zanwadi', 'Jl. Lulilas', '16-Jul-2003', 'Perempuan', '2017.0', '', '', '', '', '', '', '', 'Riwanti', 'S2', 'Dosen', 'Jl. Lulila', 'SMP Pancasila', 'Jl. Dr Mansyur', 'null', 'aktif', 'ips', 'Islam'),
('Khaerul Umam', 'Jl. Jangkar', '20-Feb-2003', 'Laki-Laki', '2017.0', '', '', '', '', '', '', '', 'Jokok Dana', 'S1', 'PNS', 'Jl. Jangkar', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', 'aktif', 'ips', 'Islam'),
(' Jansfour', 'Jl. Negri', '21-Feb-2001', 'Laki-Laki', '2017.0', '', '', '', '', '', '', '', 'Bayu', 'SMA', 'TNI', 'Jl. Negri', 'SMP Santa Thomas', 'Jl. Katamso', 'null', 'aktif', 'ips', 'Kristen'),
('Andri Wahyu A.R', 'Jl. Oktober', '09-Sep-2003', 'Perempuan', '2017.0', 'Bambang Surio', 'SMA', 'Guru', 'Dwi Lestari', 'SMA', 'Polwan', 'Jl. Oktober', '', '', '', '', 'SMP Nusan Penida', 'Jl. Setia Budi', 'null', 'aktif', 'ips', 'Islam'),
('Holifathul Ilmiah', 'Jl. Sekar', '08-Nov-2003', 'Laki-Laki', '2017.0', '', '', '', '', '', '', '', 'Ismail', 'SMA', 'Polisi', 'Jl. Sekar', 'SMP N 1', ' Jl. Mawar', 'null', 'aktif', 'ips', 'Islam'),
('Ana Farhana', 'Jl. Kolili', '09-Sep-2003', 'Perempuan', '2017.0', 'Muhammad Hasan', 'S1', 'PNS', 'Nizar', 'S1', 'Guru', ' Jl. Kolili', '', '', '', '', 'SMP N 10', 'Jl. Ringroad', 'null', 'aktif', 'ips', 'Islam'),
('Edi Fargusen', 'Jl. Kakkao', '17-Jan-2003', 'Laki-Laki', '2017.0', 'Bambang Surio', 'S1', 'Guru', 'Lilia Jessia', 'S1 ', 'PNS', 'Jl. Kakkao', '', '', '', '', 'SMP Telkom', 'Jl. Simp Selayang', 'null', 'aktif', 'ips', 'Kristen'),
('Iin Indriawati', 'Jl. Banyuwangi', '08-May-2003', 'Perempuan', '2017.0', 'Warman', 'SMA', 'Penjual', 'Alisa', 'S1', 'PNS', 'Jl. Banyuwangi', '', '', '', '', 'SMP Muhamadiah', 'Jl. Setia budi', 'null', 'aktif', 'ips', 'Islam'),
('Hadriatnti Intan ', 'Jl. Bulan bulan', '11-Jul-2003', 'Perempuan', '2017.0', 'Warman', 'SMA', 'Penjual', 'Alisa', 'S2', 'PNS', 'Jl. Bulan bulan', 'Giflani Nizar', 'S1', 'Pengusaha', 'Jl. Bulan bulan', 'SMP N 30', 'Jl. Melati', 'null', 'aktif', 'ips', 'Islam'),
('Intan ', 'Jl. November', '12-Jul-2003', 'Perempuan', '2017.0', 'Warman', 'SMA', 'Penjual', 'Alisa', 'S2', 'PNS', 'Jl. November', '', '', '', '', 'SMP N 31', 'Jl. Melati', 'null', 'aktif', 'ips', 'Islam'),
('Hadriatnti', 'Jl. Raya Licin', '13-Jul-2003', 'Perempuan', '2017.0', 'Warman', 'SMA', 'Penjual', 'Alisa', 'S1', 'PNS', 'Jl. Raya Licin', '', '', '', '', 'SMP N 32', 'Jl. Melati', 'null', 'aktif', 'ips', 'Islam'),
('Indriawati', 'Jl. Lici Raya', '08-May-2003', 'Perempuan', '2017.0', 'Muhammad Hasan', 'S1', 'PNS', 'Nizar', 'S1', 'Polwan', 'Jl. Lici Raya', '', '', '', '', 'SMP N 33', 'Jl. Melati', 'null', 'aktif', 'ips', 'Islam'),
('Fani Dilia', 'Jl. Marunjungjuang', '09-Jan-2004', 'Perempuan', '2018.0', 'Josika', 'S1', 'PNS', 'Jesicca', 'S1', 'PNS', 'Jl. Maranjuangjuang', '', '', '', '', 'SMP Telkom', 'Jl. Simp Selayang', 'null', 'aktif', 'ips', 'Kristen'),
('Shofa Adelia ', 'Jl. Baru', '01-Sep-2004', 'Perempuan', '2018.0', 'Wahyutri Utomo', 'SMA', 'Polisi', 'Tuty Nur ', 'S1 ', 'Guru', ' Jl. Baru', '', '', '', '', 'SMP Nusan Penida', 'Jl. Setia Budi', 'null', 'aktif', 'ips', 'Islam'),
('Nurul Nur Atika', ' Jl. Pembangunan', '03-Sep-2003', 'Perempuan', '2018.0', 'Ali', 'S1', 'PNS', 'Nadia ', 'S1', 'Guru', 'Jl. Pembangunan', '', '', '', '', 'SMP Muhamadiah', 'Jl. Setia Budi', 'null', 'aktif', 'ips', 'Islam'),
('M Ihsan Maulana', 'Jl Bougeinville ', '09-Nov-2004', 'Laki-Laki', '2018.0', 'Zulfan', 'S2', 'Dosen', 'Rina', 'S1', 'Guru', 'Jl. Bougeinville', '', '', '', '', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', 'aktif', 'ips', 'Islam'),
('Elya Wardhani', 'Jl. Langgar', '22-Oct-2004', 'Perempuan', '2018.0', 'Edi', 'SMA', 'Penjual', 'Ana', 'SMA', 'Penjual', 'Jl. Langgar', '', '', '', '', 'SMP N 7', 'Jl. Pringan', 'null', 'aktif', 'ips', 'Islam'),
('Dina Undzila', 'Jl. Tasbih', '23-Sep-2004', 'Perempuan', '2018.0', 'Daniel Fadly', 'S1', 'PNS', 'Mya Utami', 'S1', 'Dosen', 'Jl. Tasbih', '', '', '', '', 'SMP N 1', 'Jl. Mawar', 'null', 'aktif', 'ips', 'Islam'),
('Wina ', 'Jl. Negri', '04-Sep-2004', 'Perempuan', '2018.0', 'Rafly Himawasyah', 'S1', 'Guru', 'Adelia Fadly', 'SMA', 'Rumah Tangga', 'Jl. Negri', '', '', '', '', 'SMP Santa Thomas', 'Jl. Katamso', 'null', 'aktif', 'ips', 'Kristen'),
('Wisnu Wardato', 'Jl. Sereng', '10-Oct-2004', 'Laki-Laki', '2018.0', 'Withanto', 'SD', ' Penjual', 'Pipi Adelia', 'S1', 'Guru', 'Jl. Sereng', '', '', '', '', 'SMP Santa Thomas', 'Jl. Katamso', 'null', 'aktif', 'ips', 'Kristen'),
('Muhammad Alfitrah', 'Jl. Sumatra Utara', '11-Aug-2004', 'Laki-Laki', '2018.0', 'Dimas Pratama', 'S1', 'Pengusaha', 'Dinda Pratama', 'S1', 'Guru', 'Jl. Sumatra Utara', '', '', '', '', 'SMP N 30', 'Jl. Melati', 'null', 'aktif', 'ips', 'Islam'),
('Firmansyah Alfi', 'Jl. Kapten Ilyas', '05-Nov-2004', 'Laki-Laki', '2018.0', 'Adi Pratama', 'S2', 'Dosen', 'Aulia Rahma', 'S1', 'PNS', 'Jl. Kapten Ilyas', '', '', '', '', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', 'aktif', 'ips', 'Islam'),
('Firman Utomo', 'Jl. K.H Dewantara', '09-Dec-2005', 'Laki-Laki', '2018.0', 'Ramadhani', 'S1', 'Guru', 'Rahma Andini', 'S1', 'Pegawai Bank', 'Jl K.H Dewantara', '', '', '', '', 'SMP Telkom', 'Jl. Simp Selayang', 'null', 'aktif', 'ips', 'Islam'),
('Wahyu Widianto', 'Jl. Gunung Sari', '19-Sep-2004', 'Laki-Laki', '2018.0', '', '', '', '', '', '', '', 'Anik', 'S1', 'Guru', 'Jl. Gunung Sari', 'SMP Pancasila', 'Jl. Dr Mansyur', 'null', 'aktif', 'ips', 'Islam'),
('Aldion ', 'Jl. Prambanan', ' 20/09/2004', 'Laki-Laki', '2018.0', 'Alfi Cen', 'S1', 'Penjual', 'Lilia Jessica', 'S1', ' PNS', 'Jl. Prambanan', '', '', '', '', 'SMP Santa Thomas', 'Jl. Katamso', 'null', 'aktif', 'ips', 'Budha'),
('Riski Wahyudi', 'Jl. Prambanan', ' 20/09/2005', 'Laki-Laki', '2018.0', 'Alfi Cen', 'S2', 'Penjual', 'Lilia Jessica', 'S2', ' PNS', 'Jl. Prambanan', '', '', '', '', 'SMP Santa Thomas', 'Jl. Katamso', 'null', 'aktif', 'ips', 'Budha'),
('Yudha ', 'Jl. Perjuangan', '21-Sep-2003', 'Laki-Laki', '2018.0', 'Warianto', 'S1', 'PNS', 'Wanda Dewi', 'S1', 'PNS', 'Jl. Perjuangan', '', '', '', '', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', 'aktif', 'ips', 'Islam'),
('Wanda Kususma ', 'Jl. Mundziri', '10/11/20004', 'Perempuan', '2018.0', 'Ahmad', 'S1', 'Pegawai Kantor', ' Jeni', 'SMA', 'Rumah Tangga', 'Jl. Mundziri', '', '', '', '', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', 'aktif', 'ips', 'Islam'),
('Muhammad Amin', 'Jl. Dr Mansyur', '21-Nov-2004', 'Laki-Laki', '2018.0', 'Redy Gunawan', 'S2', 'Dosen', ' Giselle', 'SMA', 'Rumah Tangga', 'Jl. Dr Mansyur', '', '', '', '', 'SMP Pancasila', 'Jl. Dr Mansyur', 'null', 'aktif', 'ips', 'Islam'),
('Rikki ', 'Jl. Asoka 1', '23-Apr-2004', 'Laki-Laki', '2018.0', '', '', '', '', '', '', '', 'Daniel', 'S1', 'PNS', 'Jl. Asoka 1', 'SMP Telkom', 'Jl. Simp Selayang', 'null', 'aktif', 'ips', 'Kristen'),
(' Indah Ramadhani', 'Jl. Budi Seia', '23-Jan-2004', 'Perempuan', '2018.0', 'Ahmad', ' S1', 'PNS', 'Nur', 'SMA', 'Rumah Tangga', ' Jl. Budi Seia', '', '', '', '', ' SMP N 7', 'Jl. Pringan', 'null', 'aktif', 'ips', 'Islam'),
('Tanjug Gunawan', 'Jl Bougeinville ', '24-Oct-2004', 'Laki-Laki', '2018.0', '', '', '', '', '', '', '', 'Jamaliya', 'S1', 'PNS', ' Jl. Bougeinville', 'SMP N 30', 'Jl. Melati', 'null', 'aktif', 'ips', 'Kristen'),
('Ali Hidayat', 'Jl. Jauhitam', '22-Jul-2004', 'Laki-Laki', '2018.0', 'Fahmi Rizal', 'S1', 'Guru', 'Nadia Siti', 'SMA', 'Penjual', 'Jl. Jauhitam', '', '', '', '', 'SMP Muhamadiah', 'Jl. Setia Budi', 'null', 'aktif', 'ips', ' Islam'),
(' Ibnu Rezky', 'Jl. Setia Budi', '03-Aug-2004', 'Laki-Laki', '2018.0', 'Muhammad Fakhri', 'S1', ' PNS', 'Nur Atikah', 'S1 ', 'PNS', 'Jl. Setia Budi', '', '', '', '', 'SMP N 7', 'Jl. Pringan', 'null', 'aktif', 'ips', 'Islam'),
('Rahmad Amin', 'Jl. Dr Mansyur', '02-Nov-2004', 'Laki-Laki', '2018.0', 'Irfan', 'S1', 'PNS ', 'Reza Melani', 'SMA ', 'Rumah Tangga', 'Jl. Dr Mansyur', '', '', '', '', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', 'aktif', 'ips', 'Islam'),
('Abadi Tarigan', 'Jl. Asoka', '21-Dec-2004', 'Laki-Laki', '2018.0', 'Leo Tarigan', 'SMA', 'TNI', 'Jesicca', 'S1', 'PNS', 'Jl. Asoka', '', '', '', '', 'SMP Santa Thomas', 'Jl. Katamso', 'null', 'aktif', 'ips', 'Kristen'),
('Egik ', 'Jl. Garuda', '02-Jan-2004', 'Laki-Laki', '2018.0', '', '', '', '', '', '', '', 'Fahmi ', 'S1', 'PNS', 'Jl. Garuda', 'SMP Nusan Penida', 'Jl. Setia Budi', 'null', 'aktif', 'ips', 'Islam'),
('Rahma Adinda', 'Jl. Dr Mansyur', '11-Dec-2004', 'Perempuan', '2018.0', 'Dandi', 'S1', 'Pekerja Kantoran', 'Arini', 'S1 ', 'Pegawai Bank', 'Jl. Dr Mansyur', '', '', '', '', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', 'aktif', 'ips', 'Islam'),
('Jenie Andini', 'Jl. Perumahan', '21-Jul-2004', 'Perempuan', '2018.0', 'Jans', 'S1', 'Pengusaha', 'Leli', 'S1', 'Rumah Tangga', 'Jl. Perumahan', '', '', '', '', 'SMP N 1', 'Jl. Mawar', 'null', 'aktif', 'ips', 'Budha'),
('Anggika ', 'Jl. Mawar no 2', '02-Aug-2004', 'Perempuan', '2018.0', '', '', '', '', '', '', '', 'Lianda', 'S1', 'Pegawai Kantor', ' ', ' SMP N 1', 'Jl. Mawar', 'null', 'aktif', 'ips', 'Kristen'),
('Naufal', 'Jl. Azmi no 7', '11-Sep-2004', 'Laki-Laki', '2018.0', 'Fachrul', 'S1', 'Guru', 'Marischa', 'S1', 'Guru', 'Jl. Azmi no 1', '', '', '', '', 'SMP Pancasila', 'Jl. Dr Mansyur', 'null', 'aktif', 'ips', 'Islam'),
('Amelia Fakhirah', 'Jl. Pembangunan', '21-May-2004', 'Perempuan', '2018.0', 'Muhammad Maulana', 'S1', 'PNS', 'Nur Nasywa ', ' S1', 'Polwan', 'Jl. Pembangunan', '', '', '', '', 'SMP Nusan Penida', 'Jl. Setia Budi', 'null', 'aktif', 'ips', 'Islam'),
('Yunita Sari', 'Jl. Simpang Gajah Mada ', '02-Nov-2005', 'Perempuan', '2019.0', 'Gunawan Ginting', 'S1', 'PNS', 'Rika', 'S1', 'PNS', 'Jl. Simpang Gajah Mada ', '', '', '', '', 'SMP Nusan Penida', 'Jl. Setia Budi', 'null', ' pending', 'ipa', ' Islam'),
('Gunawn Irwan', 'Perumahan Griya Giri', '16-Sep-2005', 'Laki-Laki', '2019.0', 'Ridwan ', 'S1', 'PNS', 'Alya Nir', 'SMA', 'Rumah Tangga', 'Perumahan Griya Giri', '', '', '', '', 'SMP N 30', 'Jl. Melati', 'null', ' pending', 'ipa', ' Islam'),
('Nur Khairunisa', 'Jl. Kapten Griya', '04-Sep-2005', 'Perempuan', '2019.0', '', '', '', '', '', '', '', 'Jamal ', 'S1', 'PNS', 'Jl. Kapten Griya', 'SMP N 30', 'Jl. Melati', 'null', ' pending', 'ipa', ' Islam'),
('Hendra Pratama', 'Jl. Griya Sari', '11-Aug-2005', 'Laki-Laki', '2019.0', 'Junaidi', 'S1', 'Dosen', 'Siri Jumaiti', 'SMA', 'Penjual', 'Jl. Griya Sari ', '', '', '', '', 'SMP N 7', 'Jl. Pringan', 'null', ' pending', 'ipa', ' Islam'),
('Ahmad Adi', 'JL. Sangkar', '03-Sep-2005', 'Laki-Laki', '2019.0', 'Badrun', 'S1', 'PNS', 'Sari Yulia', 'SMA', 'Rumah Tangga', 'Jl. Sangkar', '', '', '', '', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', ' pending', 'ipa', ' Islam'),
('Dita Rahmadina', 'Jl. Ujung Siri', '08-Dec-2005', 'Perempuan', '2019.0', '', '', '', '', '', '', '', 'Badrun Gunawan', 'SMA', 'Penjual', 'Jl. Ujung Siri', 'SMP N 1', 'Jl. Mawar', 'null', ' pending', 'ipa', ' Islam'),
('Fitriayani Nadia', 'Jl. Mawar Sari', '22-Aug-2005', 'Perempuan', '2019.0', 'Riky Gunawan', 'S1', 'PNS', 'Fani', 'SMP', 'Rumah Tangga', 'Jl Mawar Sari', '', '', '', '', 'SMP N 30', 'Jl. Melati', 'null', ' pending', 'ipa', ' Islam'),
('Muhammad Miftahul', 'Jl. Anggrek', '11-Nov-2005', 'Laki-Laki', '2019.0', 'Andri', 'SMA', 'Penjual', 'Fina', 'SMA', 'Rumah Tangga', 'Jl. Anggrek', '', '', '', '', 'SMP Petani', 'Jl. Sawah', 'null', ' pending', 'ipa', ' Islam'),
('Indra Aswari', 'Jl. Lereng Lembah', '22-Sep-2005', 'Laki-Laki', '2019.0', 'Ginting Siregar', 'S1', 'PNS', 'Farah Jaskiah', 'S1', 'Pegawai Bank', 'Jl. Lereng Lembah', '', '', '', '', 'SMP Pancasila', 'Jl. Simp Pos', 'null', ' pending', 'ipa', ' Islam'),
('Dinda Nazli', 'Jl. Bougeinville 3', '16-Nov-2005', 'Perempuan', '2019.0', 'Budi', 'SMA', 'Penjual', 'Ana', 'SMA', 'Penjual', 'Jl. Bougeinville 3', '', '', '', '', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', ' pending', 'ips', ' Islam'),
('Anto Siregar', 'Jl. Satu Jiah', ' 29/09/2005', 'Laki-Laki', '2019.0', ' Kiki', 'S1', 'Pekerja Kantoran', 'Jesica', 'S1', 'PNS', 'Jl. Satu Jua', '', '', '', '', 'SMP Santa Thomas', 'Jl. Katamso', 'null', ' pending', 'ips', 'Kristen'),
('Legardo Hamoloan', 'Jl. Asisi', '21-Nov-2005', 'Laki-Laki', '2019.0', 'Jans', ' SMA', 'TNI', 'Selvi', 'S1', 'PNS', 'Jl. Asisi', '', '', '', '', 'SMP Nusan Penida', 'Jl. Setia Budi', 'null', ' pending', 'ips', 'Kristen'),
('Johan ', 'Jl. Pembangunan', '22-Jan-2005', 'Laki-Laki', '2019.0', 'Motoharu', 'SMA', 'Polisi', 'Fenni Lim', 'S1', 'Rumah Tangga', 'Jl. Pembangunan', '', '', '', '', 'SMP Santa Thomas', 'Jl. Katamso', 'null', ' pending', 'ips', 'Kristen'),
('Yusuf Aldiansyah', 'Jl. Eka Rasmi', '04-Jun-2005', 'Laki-Laki', '2019.0', ' Fauzan', 'S1', 'PNS', 'Yessi', 'S1', 'PNS', 'Jl. Eka Rasmi', '', '', '', '', 'SMP N 30', 'Jl. Melati', 'null', ' pending', 'ips', 'Islam'),
('Defina Yenatta', 'Jl. Ujung Siri', '07-Jul-2005', 'Perempuan', '2019.0', 'Muhammad Ari', 'S1', 'Penjual', 'Dian Ningsih', 'S1', 'Dosen', 'Jl. Ujung Sari', '', '', '', '', 'SMP N 10', 'Jl. Ringroad', 'null', ' pending', 'ips', 'Islam'),
('Nael', 'Jl. Juanita', '10-Jul-2005', 'Laki-Laki', '2019.0', 'Victor Thalib', 'S1', 'Guru', 'Heven', 'S1', 'Guru', 'Jl. Juanita', '', '', '', '', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', ' pending', 'ips', 'Kristen'),
('Thoriq Owen', 'Jl. Karya Jaya', '12-Feb-2005', 'Laki-Laki', '2019.0', 'Angga Satrio', 'S1', 'PNS', 'Okki ', 'S1', 'Guru', ' Jl. Karya Jaya', '', '', '', '', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', ' pending', 'ips', 'Islam'),
('Kayla Hayyan', 'Jl. Jaya Karya', '21-Mar-2005', 'Perempuan', '2019.0', 'Eko Joko', 'SMA', 'Penjual', 'Nadia', 'SMA', 'Penjual', 'Jl. Jaya Karya', '', '', '', '', 'SMP Muhamadiah', 'Jl. Setia Budi', 'null', ' pending', 'ips', 'Islam'),
('Assidiq Salma', 'Jl. Perabotan', '14-Nov-2005', 'Perempuan', '2019.0', 'Fauzan Johan', 'S1', 'Pekerja Kantoran', 'Ulfi Nadia', 'S1', 'PNS', 'Jl. Perabotan', '', '', '', '', 'SMP Pancasila', 'Jl. Dr Mansyur', 'null', ' pending', 'ips', 'Islam'),
('Siska', 'Jl. Rata rata', '26-Sep-2005', 'Perempuan', '2019.0', 'Bisma', 'S1', 'PNS', 'Ratna', 'S1', ' PNS', 'Jl. Rata rata', '', '', '', '', 'SMP Telkom', 'Jl. Simp Selayang', 'null', ' pending', 'ips', 'Islam'),
('Fani Dilia', 'Jl. Marunjungjuang', '09-Jan-2005', 'Perempuan', '2019.0', 'Josika', 'S1', 'PNS', 'Jesicca', 'S1', 'PNS', 'Jl. Maranjuangjuang', '', '', '', '', 'SMP Telkom', 'Jl. Simp Selayang', 'null', ' pending', 'ips', 'Kristen'),
('Shofa Adelia ', 'Jl. Baru', '01-Sep-2005', 'Perempuan', '2019.0', 'Wahyutri Utomo', 'SMA', 'Polisi', 'Tuty Nur ', 'S1 ', 'Guru', ' Jl. Baru', '', '', '', '', 'SMP Nusan Penida', 'Jl. Setia Budi', 'null', ' pending', 'ips', 'Islam'),
('Nurul Nur Atika', ' Jl. Pembangunan', '03-Sep-2005', 'Perempuan', '2019.0', 'Ali', 'S1', 'PNS', 'Nadia ', 'S1', 'Guru', 'Jl. Pembangunan', '', '', '', '', 'SMP Muhamadiah', 'Jl. Setia Budi', 'null', ' pending', 'ips', 'Islam'),
('M Ihsan Maulana', 'Jl Bougeinville ', '09-Nov-2004', 'Laki-Laki', '2019.0', 'Zulfan', 'S2', 'Dosen', 'Rina', 'S1', 'Guru', 'Jl. Bougeinville', '', '', '', '', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', ' pending', 'ips', 'Islam'),
('Elya Wardhani', 'Jl. Langgar', '22-Oct-2004', 'Perempuan', '2019.0', 'Edi', 'SMA', 'Penjual', 'Ana', 'SMA', 'Penjual', 'Jl. Langgar', '', '', '', '', 'SMP N 7', 'Jl. Pringan', 'null', ' pending', 'ips', 'Islam'),
('Dina Undzila', 'Jl. Tasbih', '23-Sep-2004', 'Perempuan', '2019.0', 'Daniel Fadly', 'S1', 'PNS', 'Mya Utami', 'S1', 'Dosen', 'Jl. Tasbih', '', '', '', '', 'SMP N 1', 'Jl. Mawar', 'null', ' pending', 'ips', 'Islam'),
('Wina ', 'Jl. Negri', '04-Sep-2004', 'Perempuan', '2019.0', 'Rafly Himawasyah', 'S1', 'Guru', 'Adelia Fadly', 'SMA', 'Rumah Tangga', 'Jl. Negri', '', '', '', '', 'SMP Santa Thomas', 'Jl. Katamso', 'null', ' pending', 'ips', 'Kristen'),
('Wisnu Wardato', 'Jl. Sereng', '10-Oct-2004', 'Laki-Laki', '2019.0', 'Withanto', 'SD', ' Penjual', 'Pipi Adelia', 'S1', 'Guru', 'Jl. Sereng', '', '', '', '', 'SMP Santa Thomas', 'Jl. Katamso', 'null', ' pending', 'ips', 'Kristen'),
('Muhammad Alfitrah', 'Jl. Sumatra Utara', '11-Aug-2004', 'Laki-Laki', '2019.0', 'Dimas Pratama', 'S1', 'Pengusaha', 'Dinda Pratama', 'S1', 'Guru', 'Jl. Sumatra Utara', '', '', '', '', 'SMP N 30', 'Jl. Melati', 'null', ' pending', 'ips', 'Islam'),
('Firmansyah Alfi', 'Jl. Kapten Ilyas', '05-Nov-2004', 'Laki-Laki', '2019.0', 'Adi Pratama', 'S2', 'Dosen', 'Aulia Rahma', 'S1', 'PNS', 'Jl. Kapten Ilyas', '', '', '', '', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', ' pending', 'ips', 'Islam'),
('Rahma Aulia', 'Jl. Jangkar', '15-Oct-2004', 'Perempuan', '2019.0', 'Ridwan Kamil', 'S1', 'Guru', 'Zaskiah Sungkar', 'S1', 'Guru', 'Jl Jangkar', '', '', '', '', 'SMP N 1', 'Jl. Melati', 'null', ' pending', 'ipa', ' Islam'),
('Anika Andriani', 'Jl. Pulpen', '07-Sep-2005', 'Perempuan', '2019.0', 'Disra Jamal', 'S1 ', 'Guru', 'Rahma ', 'SMA', 'Rumah Tangga', 'Jl. Pulpen', '', '', '', '', 'SMP N 30', 'Jl. Melati', 'null', ' pending', 'ipa', ' Islam'),
('Oktavia Vira', 'Jl. Pulpen', '08-Sep-2005', 'Perempuan', '2019.0', 'Disra Jamal', 'S1', 'Guru', 'Rahma ', 'SMA', 'Rumah Tangga', 'Jl. Pulpen', '', '', '', '', 'SMP N 30', 'Jl. Melati', 'null', ' pending', 'ipa', ' Islam'),
('Muhammad Ahmad', 'Jl. Beo', '09-Sep-2005', 'Laki-Laki', '2019.0', 'Indra Tami', 'S1', 'Pengusaha', 'Rida Oktavia', 'S1', 'Rumah Tangga', '', '', '', '', '', 'SMP Nusan Penida', 'Jl. Setia Budi', 'null', ' pending', 'ipa', ' Islam'),
('Niken Tamara', 'Jl. Langgar', '10-Sep-2005', 'Perempuan', '2019.0', 'Purnomo ', 'S1', 'PNS', 'Nur Cahya', 'S1', 'Guru', 'Jl. Langgar', '', '', '', '', 'SMP N 7 ', 'Jl. Pringan', 'null', ' pending', 'ipa', ' Kristen'),
('Wicaksonon Putra', 'Jl. Berjaya', '11-Sep-2005', 'Laki-Laki', '2019.0', 'Putra Dwi', 'S1', 'Penjual', 'Nuril ', 'S1', 'Guru', 'Jl. Berjaya', '', '', '', '', 'SMP N 1 ', 'Jl. Melati', 'null', ' pending', 'ipa', ' Islam'),
('Gani Purnama', 'Jl. Selimut', '12-Sep-2005', 'Laki-Laki', '2019.0', 'Banyu Mas', 'SMA', 'TNI', 'Martina ', 'S3', 'Dosen', 'Jl. Selimut', '', '', '', '', 'SMP Sultan', 'Jl. Tanjung Rejo', 'null', ' pending', 'ipa', ' Islam'),
('Gina Putri', 'Jl. Barbasia Nili', '13-Sep-2005', 'Perempuan', '2019.0', 'Satria Musto', 'S1', 'Polisi', 'Mila Dini', 'S1', 'Guru', 'Jl. Barbasia Nili', '', '', '', '', 'SMP N 10', 'Jl. Ringroad', 'null', ' pending', 'ipa', ' Islam'),
('Muhammad Ari', 'Jl. Biduri', '14-Sep-2005', 'Laki-Laki', '2019.0', 'Ananda', 'S1', 'PNS', 'Dini Rahma', 'S1', 'PNS', 'JL. Biduri', '', '', '', '', 'SMP  Swasta', 'Jl. Ahmad Yani', 'null', ' pending', 'ipa', ' Islam'),
('M Ridwan Tarigan', 'Jl. Asoka', '15-Sep-2005', 'Laki-Laki', '2019.0', 'Muhanda', 'S1', 'PNS', 'Lala Riri', 'SMP', 'Rumah Tangga', 'Jl. Asoka', '', '', '', '', 'SMP Telkom', 'Jl. Simp Selayang', 'null', ' pending', 'ipa', ' Islam'),
('Ali Hidayat', 'Jl. Jauhitam', '22-Jul-2005', 'Laki-Laki', '2019.0', 'Fahmi Rizal', 'S1', 'Guru', 'Nadia Siti', 'SMA', 'Penjual', 'Jl. Jauhitam', '', '', '', '', 'SMP Muhamadiah', 'Jl. Setia Budi', 'null', ' pending', 'ips', ' Islam'),
(' Ibnu Rezky', 'Jl. Setia Budi', '03-Aug-2005', 'Laki-Laki', '2019.0', 'Muhammad Fakhri', 'S1', ' PNS', 'Nur Atikah', 'S1 ', 'PNS', 'Jl. Setia Budi', '', '', '', '', 'SMP N 7', 'Jl. Pringan', 'null', ' pending', 'ips', 'Islam'),
('Rahmad Amin', 'Jl. Dr Mansyur', '02-Nov-2005', 'Laki-Laki', '2019.0', 'Irfan', 'S1', 'PNS ', 'Reza Melani', 'SMA ', 'Rumah Tangga', 'Jl. Dr Mansyur', '', '', '', '', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', ' pending', 'ips', 'Islam'),
('Abadi Tarigan', 'Jl. Asoka', '21-Dec-2005', 'Laki-Laki', '2019.0', 'Leo Tarigan', 'SMA', 'TNI', 'Jesicca', 'S1', 'PNS', 'Jl. Asoka', '', '', '', '', 'SMP Santa Thomas', 'Jl. Katamso', 'null', ' pending', 'ips', 'Kristen'),
('Egik ', 'Jl. Garuda', '02-Jan-2005', 'Laki-Laki', '2019.0', '', '', '', '', '', '', '', 'Fahmi ', 'S1', 'PNS', 'Jl. Garuda', 'SMP Nusan Penida', 'Jl. Setia Budi', 'null', ' pending', 'ips', 'Islam'),
('Rahma Adinda', 'Jl. Dr Mansyur', '11-Dec-2005', 'Perempuan', '2019.0', 'Dandi', 'S1', 'Pekerja Kantoran', 'Arini', 'S1 ', 'Pegawai Bank', 'Jl. Dr Mansyur', '', '', '', '', 'SMP Dharma', 'Jl. Dr Mansyur', 'null', ' pending', 'ips', 'Islam'),
('Jenie Andini', 'Jl. Perumahan', '21-Jul-2005', 'Perempuan', '2019.0', 'Jans', 'S1', 'Pengusaha', 'Leli', 'S1', 'Rumah Tangga', 'Jl. Perumahan', '', '', '', '', 'SMP N 1', 'Jl. Mawar', 'null', ' pending', 'ips', 'Budha'),
('Anggika ', 'Jl. Mawar no 2', '02-Aug-2005', 'Perempuan', '2019.0', '', '', '', '', '', '', '', 'Lianda', 'S1', 'Pegawai Kantor', ' ', ' SMP N 1', 'Jl. Mawar', 'null', ' pending', 'ips', 'Kristen'),
('Naufal', 'Jl. Azmi no 7', '11-Sep-2005', 'Laki-Laki', '2019.0', 'Fachrul', 'S1', 'Guru', 'Marischa', 'S1', 'Guru', 'Jl. Azmi no 1', '', '', '', '', 'SMP Pancasila', 'Jl. Dr Mansyur', 'null', ' pending', 'ips', 'Islam'),
('Amelia Fakhirah', 'Jl. Pembangunan', '21-May-2005', 'Perempuan', '2019.0', 'Muhammad Maulana', 'S1', 'PNS', 'Nur Nasywa ', ' S1', 'Polwan', 'Jl. Pembangunan', '', '', '', '', 'SMP Nusan Penida', 'Jl. Setia Budi', 'null', ' pending', 'ips', 'Islam');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
