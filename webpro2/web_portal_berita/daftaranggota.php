<?php
error_reporting(0);
session_start();
include "koneksi.php";

$sesianggota = $_SESSION['member'];
if (isset($sesianggota)) {
    header('location: home.php');
}

$user = mysqli_real_escape_string($connect, $_POST['user']);
$pass = mysqli_real_escape_string($connect, $_POST['pass']);
$nama = mysqli_real_escape_string($connect, $_POST['nama']);

$passmd5 = md5($pass);

if (isset($_POST['submit'])) {
    if ($nama == "") {
        $nama_error = "<span style='color:#fff;'>Nama wajib diisi</span>";
    } elseif ($user == "") {
        $user_error = "<span style='color:#fff;'>Email wajib diisi</span>";
    } elseif ($pass == "") {
        $pass_error = "<span style='color:#fff;'Password wajib diisi</span>";
    } else {

        $cekemail = mysqli_query($connect, "SELECT * FROM tb_anggota WHERE email='$user'");
        $ada = mysqli_num_rows($cekemail);
        if ($ada > 0) {
            $user_error = "<span style='color:#fff;'>Email Sudah Terdaftar</span>";
        } else {
            $sql = mysqli_query($connect, "INSERT INTO tb_anggota (nama, email, password, status) VALUES ('$nama', '$user','$passmd5','Aktif')");
            if ($sql) {
                echo "<script>alert('Selamat ! anda berhasil menjadi anggota, silahkan login');document.location='index.php'</script>";
            } else {
                echo "<script>alert('Gagal ! terjadi kesalahan, silahkan ulangi kembali'); document.location='index.php'</script>";
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
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/loginstyle.css" type="text/css">
</head>

<body>

    <div id="container">

        <?php include "header.php"; ?>

        <div class="konten">
            <div class="konten-kiri">
                <form action="" method="POST">
                    <table class="login">
                        <tr>
                            <th>
                                <h2>DAFTAR ANGGOTA</h2>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="nama" placeholder="Masukan Nama Lengkap" class="input" value="<?= $nama; ?>" maxlength="60">
                                <?= $nama_error; ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" name="user" placeholder="Masukan Email" class="input" value="<?= $user; ?>" maxlength="60">
                                <?= $user_error; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" name="pass" placeholder="Masukan Password" class="input" maxlength="15">
                                <?= $pass_error; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" name="submit">DAFTAR</a></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="margin: 0 5px 5px 5px; padding: 5px; text-align: center;">
                                    <a href="anggota/index.php" title="Login" style="color:#fff; text-decoration: none;">Klik untuk Login Anggota</a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>

            </div>
            <div class="konten-kanan"></div>
            <div style="clear:both;"></div>
        </div>
        <?php include "footer.php"; ?>