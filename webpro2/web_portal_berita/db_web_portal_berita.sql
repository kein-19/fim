-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2020 at 08:52 AM
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
-- Database: `db_web_portal_berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'admin', '25d55ad283aa400af464c76d713c07ad', 'Fadli Ibnu Malik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `id_admin` int(5) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tgl_posting` datetime NOT NULL,
  `text_berita` longtext NOT NULL,
  `dilihat` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `id_kategori`, `id_admin`, `judul`, `tgl_posting`, `text_berita`, `dilihat`, `gambar`) VALUES
(1, 1, 1, 'Kasus Positif Corona Muncul di Pemalang, Ini Datanya', '2020-04-02 00:00:00', 'Pemalang - Kasus positif virus Corona (COVID-19) muncul di Kabupaten Pemalang, Jawa Tengah. Terdapat dua orang pasien yang dinyatakan positif terjangkit virus Corona.\r\n\"Data yang kita terima dari rumah sakit Semarang, sesuai hasil laboratorium, terdapat dua pasien Kabupaten Pemalang, yang dinyatakan positif COVID-19,\" kata Bupati Pemalang, Junaedi, usai menggelar video conference dengan forum pimpinan kecamatan di Posko Penanggulangan COVID-19 Pemalang, Kamis (2/4/2020).\r\n\r\nJunaedi menjelaskan, kedua pasien berjenis kelamin laki-laki dan perempuan yang masing-masing berusia 61 dan 60 tahun. Namun Junaedi tidak menyebut apakah keduanya pasangan suami-istri.\r\n\r\nDari dua pasien tersebut, saat ini satu pasien dirawat di rumah sakit di Semarang, sedangkan satunya lagi di RSUD M Ashari, Pemalang.\r\n\r\nKedua pasien mengalami gejala sesak napas dan deman usai perjalanan ziarah ke Solo, Yogyakarta dan Kebumen. Keduanya dilarikan ke Rumah Sakit (RS) Siaga Medika Pemalang pada tanggal 15 Maret 2020.\r\n\r\n\"Pada hari ketiganya, keduanya dirujuk ke rumah sakit yang di Semarang itu,\" terang Junaedi.\r\n\r\nSedangkan untuk pasien yang berjenis kelamin laki-laki, sempat dipulangkan oleh pihak RS karena kondisinya stabil dan menjalani karantina mandiri. Namun, setelah hasil swab dinyatakan positif, akhirnya pasien itu dijemput di rumahnya oleh Satgas COVID-19 Pemalang dan dibawa ke RSUD M Ashari, Pemalang.\r\n\r\n\"Jadi 1 pasien ini dirawat di RS Bhakti Wira Tamtama Semarang dan 1 lagi dirawat di RSUD Ashari Pemalang,\" katanya.\r\n\r\nDengan adanya dua warga yang terpapar Corona tersebut, pihaknya langsung meminta Dinas Kesehatan untuk melakukan tracking siapa saja yang pernah kontak dengan kedua pasien tersebut.\r\n\r\n\"Kita perintahkan untuk ditelusur siapa saja yang terkontak,\" ucap Junaedi.\r\n\r\nSementara itu, Junaedi menambahkan di Kabupaten Pemalang, terdapat 1.146 warganya yang tergolong Orang Dalam Pemantauan (ODP) dan 11 orang Pasien Dalam Pengasawan (PDP).\r\n\r\nSumber: https://news.detik.com/berita-jawa-tengah/d-4963284/kasus-positif-corona-muncul-di-pemalang-ini-datanya?tag_from=wp_hl_judul&_ga=2.97612895.1995612395.1585819520-767268210.1577008618', 1, 'berita1.jpg'),
(2, 1, 1, 'Terus Bertambah, ODP Corona di Klaten Tembus 1.181 Orang', '2020-04-02 00:00:00', 'Klaten - Jumlah Orang Dalam Pemantauan (ODP) Corona atau Covid-19 di Kabupaten Klaten, Jawa Tengah mencapai 1.181 orang. Jumlah tersebut tersebar di 26 kecamatan.\r\nSeperti dilihat detikcom di laman Humas Pemkab Klaten hari ini, jumlah ODP kumulatif mencapai 1.181 orang di 26 kecamatan. Tercatat ada tambahan 104 ODP baru.\r\n\r\nSementara itu, tidak ada penambahan Pasien Dalam Pengawasan (PDP) baru kasus virus Corona di Klaten. Jumlah PDP tetap 12 orang yang semuanya sedang menunggu hasil laboratorium.\r\n\r\n\"Betul. Hari ini tidak ada penambahan PDP baru sesuai data,\" ungkap juru bicara Gugus Tugas Pencegahan dan Pengendalian Corona Pemkab Klaten, Amin Mustofa, Kamis (2/4/2020).\r\n\r\nMenurut Amin, data dari Dinas Kesehatan tidak ada penambahan PDP. PDP kumulatif masih 12 orang.\r\n\r\n\"Data dari Dinas Kesehatan tidak ada PDP baru. Masih tetap 12 orang,\" lanjut Amin.\r\n\r\nUntuk ODP yang dirawat ada 4 orang dan yang kondisinya sehat 74 orang. Pasien yang positif tidak ada penambahan dan pasien positif dalam perawatan 1 orang.\r\n\r\nDirektur RSUD Bagas Waras Klaten, Limawan Budi Wibowo mengatakan pasien PDP positif Corona dalam kondisi baik.\r\n\r\n\"Makin membaik. Semoga segera sembuh,\" kata Limawan.\r\n\r\n(rih/mbr)\r\n\r\nSumber: https://news.detik.com/berita-jawa-tengah/d-4963345/terus-bertambah-odp-corona-di-klaten-tembus-1181-orang?tag_from=wp_nhl_1', 1, 'berita2.jpg'),
(3, 1, 1, 'Pemda DIY Siapkan Karantina Pemudik dan Tempat Tinggal Tenaga Medis', '2020-04-03 00:00:00', 'Yogyakarta - Pemerintah Daerah Istimewa Yogyakarta (Pemda DIY) siap mengalihfungsikan gedung dan hotel sebagai tempat karantina masyarakat hingga persinggahan para tenaga medis. Saat ini sejumlah calon lokasi tengah dikaji.\r\nGubernur DIY Sri Sultan Hamengku Buwono (HB) X mengatakan, pihaknya siap mengalihfungsikan gedung-gedung instansi di DIY saat ada lonjakan pemudik. Mengingat pemudik yang datang perlu untuk menjalani karantina selama 14 hari di tengah pandemi Corona ini.\r\n\r\n\"Kita juga harus punya cadangan, begitu ada lonjakan ada fasilitas yang kita cadangkan. (Gedung) Diklat, wisma haji, dan sebagainya bisa kita gunakan,\" kata Sultan saat ditemui wartawan di Gedhong Pracimosono, Kompleks Kantor Gubernur DIY, Kota Yogyakarta, Kamis (2/4/2020).\r\n\r\nSultan mengaku, pihaknya telah berkomunikasi dengan pihak terkait. Bahkan, pihaknya juga telah berkomunikasi dengan beberapa hotel.\r\n\r\n\"Juga ada teman-teman yang punya hotel sudah berkomunikasi. Karena dari pada hotel ditutup kan bisa saja digunakan untuk tinggal (tenaga medis), untuk karantina (masyarakat),\" ucap Sultan.\r\n\r\nDiwawancarai terpisah, Sekda DIY Kadarmanta Baskara Aji mengatakan, pihaknya telah mempersiapkan dua gedung. Adapun dua gedung itu adalah gedung Pusdiklat Kemendagri dan Wisma Haji.\r\n\r\n\"Satu dari gedung itu akan digunakan bagi tenaga medis dan satu gedung lain akan digunakan untuk karantina. Jadi Wisma Haji dan Pusdiklat. Dibagi satu tenaga medis satu bukan tenaga medis,\" katanya.\r\n\r\nAji menjelaskan, dua gedung itu terpilih karena Pusdiklat Kemendagri mampu menampung sekitar 150 orang. Sedangkan Wisma Haji mampu menampung sekitar 300 orang.\r\n\r\n\"Kalau memang diperlukan (untuk karantina pemudik) ya kita lakukan itu. Tapi kalau sekarang ODP kita minta masih isolasi diri di rumah,\" ucap Aji.\r\n\r\nMenyoal pelibatan hotel sebagai tempat persinggahan tenaga medis dan tempat karantina, Aji mengaku beberapa hotel memang telah menawarkan diri. Namun, masih memerlukan peninjauan lebih lanjut.\r\n\r\nSumber: https://news.detik.com/berita-jawa-tengah/d-4963298/pemda-diy-siapkan-karantina-pemudik-dan-tempat-tinggal-tenaga-medis?_ga=2.208327506.1995612395.1585819520-767268210.1577008618', 1, 'berita3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_iklan`
--

CREATE TABLE `tb_iklan` (
  `id_iklan` int(5) NOT NULL,
  `id_admin` int(5) NOT NULL,
  `nm_perusahaan` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `isi_iklan` text NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `link` text NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(5) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Nasional'),
(2, 'Internasional');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_berita` int(5) NOT NULL,
  `id_anggota` int(5) NOT NULL,
  `isi_komentar` text NOT NULL,
  `tgl_komentar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `tb_iklan`
--
ALTER TABLE `tb_iklan`
  ADD PRIMARY KEY (`id_iklan`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_berita` (`id_berita`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_iklan`
--
ALTER TABLE `tb_iklan`
  MODIFY `id_iklan` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD CONSTRAINT `tb_anggota_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `tb_komentar` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD CONSTRAINT `tb_berita_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tb_admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_berita_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_iklan`
--
ALTER TABLE `tb_iklan`
  ADD CONSTRAINT `tb_iklan_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tb_admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD CONSTRAINT `tb_komentar_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `tb_berita` (`id_berita`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
