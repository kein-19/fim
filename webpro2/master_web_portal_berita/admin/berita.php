<?php
error_reporting(0);
session_start();
include "../koneksi.php";
$sesiadmin = $_SESSION['owner']; //west Login 
if (!isset($sesiadmin)) {
    header('location:index.php'); //redirect
}

$admin = mysqli_fetch_array(mysqli_query($connect, "select * from tb_admin where id_admin='$sesiadmin'"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita Mahasiswa</title>
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
</head>

<body>
    <div id="container">
        <!-- kerangka dari web / bingkai-->
        <div class="header">
            <!-- bagian header web -->
            <h1>Admin - Portal Berita Mahasiswa</h1>
            <p>Berita terkini dan terupdate dikalangan mahasiswa</p>
        </div>
        <div class="menu">
            <!-- bagian menu -->
            <ul>
                <li><a href="home.php" title="Home">Home</a></li>
                <li><a href="berita.php" title="Home">Berita</a></li>
                <li><a href="logout.php" title="Login">Logout</a></li>

            </ul>
        </div>
        <div class="konten">
            <!-- body web-->
            <div class="konten-kiri">
                <!-- side bar Left -->
                <h1>BERITA</h1>
                <a href="inputberita.php" title="Tambah berita">Tambah Berita </a>
                <!-- menampilkan berita -->
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
                        $sql = mysqli_query($connect, "select * from tb_berita, tb_kategori, tb_admin where tb_berita.id_kategori=tb_kategori.id_kategori and tb_berita.id_admin=tb_admin.id_admin");
                        while ($row = mysqli_fetch_array($sql)) {
                        ?>
                            <tr>

                                <td><?= $row['judul']; ?></td>
                                <td><?= $row['kategori']; ?></td>
                                <td><?= $row['text_berita']; ?></td>
                                <td><?= $row['username']; ?></td>
                                <td><?= $row['tgl_posting']; ?></td>
                                <td><img src="../assets/images/berita/<?= $row['gambar']; ?>" style="width:100px; height:100px;"></td>
                                <td><a href="editberita.php?id=<?= $row['id_berita']; ?>" title="Edit">Edit</a> <a href="hapusberita.php?id=<?= $row['id_berita']; ?>" title="Hapus">Hapus</a></td>

                            </tr>

                        <?php } ?>

                    </tbody>

                </table>

            </div>
            <div class="konten-kanan">
                <!-- sidebar right--->
            </div>
            <div style="clear:both;">
            </div>

        </div>

        <?php include "../footer.php"; ?>