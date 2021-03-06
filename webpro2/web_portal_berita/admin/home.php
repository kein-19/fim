<?php
error_reporting(0);
session_start();
include "../koneksi.php";

$sesiadmin = $_SESSION['owner'];
if (!isset($sesiadmin)) {
    header('location: index.php');
}

$admin = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM tb_admin WHERE id_admin = '$sesiadmin'"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita Mahasiswa</title>
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/generalstyle.css" type="text/css">
</head>

<body>

    <div id="container">
        <div id="topbar">
            <div class="header">
                <h1>Admin - Portal Berita Mahasiswa</h1>
                <p>Berita terkini dan terupdate dikalangan mahasiswa</p>
            </div>
            <div class="menu">
                <?php include "menu.php"; ?>
            </div>
        </div>
        <div class="konten">
            <div class="konten-kiri">
                <h1>Selamat Datang <?= $admin['nama_lengkap']; ?> [<?= $admin['username']; ?>] di ruang Admin !</h1>

            </div>
            <div class="konten-kanan"></div>
            <div style="clear:both;"></div>
        </div>
        <?php include "../footer.php"; ?>