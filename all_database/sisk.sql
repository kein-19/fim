-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 04:12 AM
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
-- Database: `sisk`
--

-- --------------------------------------------------------

--
-- Table structure for table `allcount`
--

CREATE TABLE `allcount` (
  `jumlah_guru` tinyint(4) NOT NULL,
  `jumlah_post` tinyint(4) NOT NULL,
  `jumlah_siswa_aktif` tinyint(4) NOT NULL,
  `jumlah_siswa_pending` tinyint(4) NOT NULL,
  `jumlah_siswa_seleksi` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `allnavitem`
--

CREATE TABLE `allnavitem` (
  `id_item` tinyint(4) NOT NULL,
  `id_sort` tinyint(4) NOT NULL,
  `tipe` tinyint(4) NOT NULL,
  `warna` tinyint(4) NOT NULL,
  `label` tinyint(4) NOT NULL,
  `link` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `allpost`
--

CREATE TABLE `allpost` (
  `slug` tinyint(4) NOT NULL,
  `id_post` tinyint(4) NOT NULL,
  `isi` tinyint(4) NOT NULL,
  `judul` tinyint(4) NOT NULL,
  `nama` tinyint(4) NOT NULL,
  `tanggal` tinyint(4) NOT NULL,
  `id_kategori` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `nama_kategori` tinyint(4) NOT NULL,
  `cover` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(18) NOT NULL,
  `nama_guru` text NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `id_jabatan`, `alamat`, `id_mapel`, `foto`) VALUES
('123131231', 'Ali', 4, 'Jalan Patumbak', 9, '2c80953541237d5a3a88d5af78da25ff.jpg'),
('1231942141391', 'Ali Hidayat', 1, 'Patumbak', 1, NULL),
('123213131', 'Guru A', 5, '1231', 2, NULL),
('1924414812491', 'Ihsan Maulana', 2, 'SS', 1, NULL),
('213131313', 'Guru B', 5, '1312321', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(10) NOT NULL,
  `nama_sekolah` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `sejarah` text NOT NULL,
  `lhome` int(11) DEFAULT NULL,
  `lartikel` int(11) DEFAULT NULL,
  `penerimaan` int(11) DEFAULT NULL,
  `tahun_penerimaan` int(11) DEFAULT NULL,
  `maks_ipa` int(11) DEFAULT NULL,
  `tutup_pendaftaran` date DEFAULT NULL,
  `note` text DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `maks_ips` int(11) DEFAULT NULL,
  `kontak_lokasi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama_sekolah`, `visi`, `misi`, `sejarah`, `lhome`, `lartikel`, `penerimaan`, `tahun_penerimaan`, `maks_ipa`, `tutup_pendaftaran`, `note`, `logo`, `maks_ips`, `kontak_lokasi`) VALUES
(1, 'DEMO SCHOOL', '<p>&nbsp;&nbsp;&ldquo;Berprestasi dilandasi Iman, Taqwa dan Berbudaya Lingkungan serta Berwawasan Global&rdquo;</p>\n', '<p>1.&nbsp; &nbsp;Mewujudkan pendidikan untuk menghasilkan prestasi dan lulusa berkwalitas tinggi yang peduli dengan lingkungan hidup</p>\n\n<p>2. &nbsp; Mewujudkan sumber daya manusia yang beriman, produktif, kreatif, inofatif dan efektif</p>\n\n<p>3. &nbsp; Mewujudkan pengembangan inovasi pembelajaran sesuai tuntutan</p>\n\n<p>4. &nbsp; Mewujudkan sumber daya manusia yang peduli dalam mencegahan pencemaran, mencegahan kerusakan lingkungan dan melestarikan lingkungan hidup</p>\n\n<p>5. &nbsp; Mewujudkan sarana prasarana reprensentatif dan up to date</p>\n\n<p>6. &nbsp; Mewujudkan pengelolaan pendidikan yang professional</p>\n\n<p>7. &nbsp; Mewujudkan sistim penilaian yang berafiliasi</p>\n\n<p>8. &nbsp; Mewujudkan budaya yang berkualifikasi</p>\n\n<p>9. &nbsp; Mewujudkan Sekolah yang bersih,hijau dan meminimalis hasil sampah yang tidak bermanfaat</p>\n\n<p>10. Mewujudkan manusia Indonesia yang mampu berkontribusi pada kehidupan bermasyarakat, berbangsa, bernegara dalam peradaban dunia</p>\n\n<p>11. Mewujudkan generasi emas, sehat tanpa narkoba</p>\n', 'SEKOLAH INI DICIPTAKAN OLEH ALI HIDAYAT SETELAH DIUSIR DARI WAKANDA', 2, 2, 1, 2019, 40, '2019-06-28', '<h3>Syarat Pendaftaran</h3>\n\n<ol>\n	<li>Telah dinyatakan lulus dan memiliki Ijazah/SKL dari SMP/ MTs/ SMPLB/ Paket B;</li>\n	<li>Berusia paling tinggi 21 (dua puluh satu) ( awal Tahun Pelajaran 2017/2018).</li>\n</ol>\n\n<h3>Pemberkasan</h3>\n\n<ol>\n	<li>Foto Copy Ijazah/SHUN/Surat Keterangan Lulus dari sekolah asal dan dilegalisir sebanyak 1 lembar, serta menyerahkan aslinya pada sekolah tempat mendaftar ( dijadwal yang di tentukan ).</li>\n	<li>Pas foto berwarna ukuran 3 x 4 cm sebanyak 2 lembar.</li>\n</ol>\n\n<h3>Cara Mendaftar</h3>\n\n<ol>\n	<li>Daftar akun pada halaman daftar ( tombol daftar di atas )</li>\n	<li>Setelah mengisi semua form pendaftaran , peserta didik baru diharapkan mengantarkan berkas yang diminta ke sekolah untuk verifikasi</li>\n	<li>Setelah verifikasi peserta didik baru dapat menunggu hasil seleksi di tanggal yang di tentukan yaitu ( 2019-07-15 )</li>\n</ol>\n\n<h3>Catatan Tambahan</h3>\n\n<ol>\n	<li>Saat verifikasi di kenakan biaya pendaftaran sebesar Rp.100.000,00</li>\n</ol>\n', 'dc581c17dde66f731764fcf1d81df3ba.png', 80, '<p>Nomor Telp. : 021-XXXXX</p>\n\n<p>Email : schoo@demo.com</p>\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `jabatan_id` (`id_jabatan`),
  ADD KEY `mapel_id` (`id_mapel`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `jabatan_id` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan_guru` (`id_jabatan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mapel_id` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
