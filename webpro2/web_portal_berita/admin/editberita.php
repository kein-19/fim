<?php
error_reporting(0);
session_start();
include "../koneksi.php";
$sesiadmin = $_SESSION['owner']; //sesi Login 
if (!isset($sesiadmin)) {
    header('location:index.php'); //redirect
}

$admin = mysqli_fetch_array(mysqli_query($connect, "select * from tb_admin where id_admin='$sesiadmin'"));

$id = mysqli_real_escape_string($connect, $_GET['id']);

$b = mysqli_fetch_array(mysqli_query($connect, "select * from tb_berita where id_berita='$id'"));

$judul = mysqli_real_escape_string($connect, $_POST['judul']); // judul 
$isi = mysqli_real_escape_string($connect, $_POST['isi']); //deskripsi 
$kategori = mysqli_real_escape_string($connect, $_POST['kategori']); //deskripsi 
$gambarlama = mysqli_real_escape_string($connect, $_POST['gambarlama']); // nama gambar Lama

$foto = $_FILES['gambar']['tmp_name']; //temporary 
$namafoto = $_FILES['gambar']['name']; //nama gambar
$tgl = date('Y-m-d H:i:s');

$ext = strtolower(end(explode(".", $namafoto)));
$namabaru = $judul . '.' . $ext;

if (isset($_POST['submit'])) {
    if ($judul == "") {
        $judui_error = "<span style='color:red;'>Judul wajib diisi</span>";
    } elseif ($kategori == "") {
        $kategori_error = "<span style='color:red;'>Kategori wajib diisi</span>";
    } elseif ($isi == "") {
        $isi_error = "<span style='color:red;'>Deskripsi wajib diisi</span>";
    } else {
        if (empty($foto)) { // kalau fotonya tidak diganti
            $sql = mysqli_query($connect, "update tb_berita set judul='$judul', text_berita='$isi', id_kategori='$kategori' where id_berita='$id'");
            if ($sql) {
                echo "<script>alert('Edit berhasil');document.location='berita.php'</script>";
            } else {
                $gambar_error = "<span style='color:red;'>Terjadi kesalahan sistem, silahkan coba lagi</span>";
            }
        } else {
            unlink('../assets/images/berita/' . $gambarlama);
            //simpan gambar ke folder berita 
            move_uploaded_file($foto, '../assets/images/berita/' . $namabaru);
            //simpan data ke database 
            $sql = mysqli_query($connect, "update tb_berita set judul='$judul', text_berita='$isi', id_kategori = '$kategori', gambar='$namabaru' where id_berita='$id'");

            if ($sql) {
                echo "<script>alert('Edit berhasil'); document.location='berita.php'</script>";
            } else {
                $gambar_error = "<span style='color:red;'>Terjadi kesalahan sistem, silahkan coba lagi</span>";
            }
        }
    }
}

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
                <ul>
                    <li><a href="home.php" title="Home">Home</a></li>
                    <li><a href="berita.php" title="Berita">Berita</a></li>
                    <li><a href="logout.php" title="Login">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="konten">

            <!-- body web -->
            <div class="konten-kiri">
                <!-- sidebar Left-->
                <h1>EDIT BERITA</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td>Judul Berita</td>
                            <td>
                                <input type="text" name="judul" placeholder="Masukan Judul" class="input" value="<?= $b['judul']; ?>"><?= $judul_error; ?>
                            </td>
                        </tr>

                        <tr>
                            <td>Kategori Berita</td>
                            <td>
                                <select name="kategori">
                                    <option value="">-- Pilih Kategori --</option>
                                    <?php
                                    $sql = mysqli_query($connect, "select * from tb_kategori");
                                    while ($row = mysqli_fetch_array($sql)) {
                                        if ($row['id_kategori'] == $b['id_kategori']) {
                                    ?>
                                            <option value="<?= $row['id_kategori']; ?>" selected="selected"><?= $row['kategori']; ?></option>
                                        <?php } else { ?>
                                            <option value="<?= $row['id_kategori']; ?>"><?= $row['kategori']; ?></option>
                                    <?php }
                                    } ?>
                                </select>
                                <?= $kategori_error; ?>
                            </td>
                        </tr>

                        <tr>
                            <td>Deskripsi Berita</td>
                            <td>
                                <textarea name="isi" rows="4" cols="40" placeholder="isi berita"><?= $b['text_berita']; ?></textarea>
                                <?= $isi_error; ?>
                            </td>
                        </tr>

                        <tr>
                            <td>Sampul Berita</td>
                            <td>
                                <input type="file" name="gambar" accept=".jpg, .png, .JPEG, .JPG, .PNG"> <?= $gambar_error; ?>
                            </td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <input type="hidden" name="gambarlama" value="<?= $b['gambar']; ?>">
                                <button type="submit" name="submit">SIMPAN</a> </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="konten-kanan">
                <!-- sidebar right-->
            </div>
            <div style="clear:both;"></div>
        </div>
        <?php include "../footer.php"; ?>