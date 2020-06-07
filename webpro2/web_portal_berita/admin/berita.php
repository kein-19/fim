<?php
error_reporting(0);
session_start();
include "../koneksi.php";
$sesiadmin = $_SESSION['owner']; //west Login 
if (!isset($sesiadmin)) {
    header('location:index.php'); //redirect
}

$admin = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM tb_admin WHERE id_admin='$sesiadmin'"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita Mahasiswa</title>
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/beritastyle.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/tabel.css" type="text/css">
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
                <!-- side bar Left -->
                <h1>BERITA</h1>
                <div class="link">
                    <a href="inputberita.php" title="Tambah berita">Tambah Berita </a>
                </div>
                <!-- menampilkan berita -->
                <div class="tabel">
                    <table border="1" width="100%">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Deskripsi</th>
                                <th>Penulis</th>
                                <th>Tgl Posting</th>
                                <th>Gambar</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            $sql = mysqli_query($connect, "SELECT * FROM tb_berita, tb_kategori, tb_admin WHERE tb_berita.id_kategori=tb_kategori.id_kategori AND tb_berita.id_admin=tb_admin.id_admin");
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <tr>

                                    <td><?= $row['judul']; ?></td>
                                    <td><?= $row['kategori']; ?></td>
                                    <td><?= substr($row['text_berita'], 0, 300); ?>...</td>
                                    <td><?= $row['username']; ?></td>
                                    <td><?= $row['tgl_posting']; ?></td>
                                    <td><img src="../assets/images/berita/<?= $row['gambar']; ?>" style="width:100px;"></td>
                                    <td><a href="editberita.php?id=<?= $row['id_berita']; ?>" title="Edit">Edit</a> <a href="hapusberita.php?id=<?= $row['id_berita']; ?>" title="Hapus">Hapus</a></td>

                                </tr>

                            <?php } ?>

                        </tbody>

                    </table>
                </div>
            <div class="konten-kanan"></div>
            <div style="clear:both;">
            </div>
            </div>

        </div>

        <?php include "../footer.php"; ?>