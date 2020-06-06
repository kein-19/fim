<?php
error_reporting(0);
session_start();
include "../koneksi.php";

$sesianggota = $_SESSION['member'];
if (isset($sesianggota)) {
    header('location: ../index.php');
}

$user = $_POST['user'];
$pass = $_POST['pass'];

$passmd5 = md5($pass);

if (isset($_POST['submit'])) {
    if ($user == "") {
        $user_error = "<span style= 'color: #FFF; margin-left: 10px;'> User wajib diisi </span>";
    } elseif ($pass == "") {
        $pass_error = "<span style= 'color: #FFF; margin-left: 10px;'> Password wajib diisi </span>";
    } else {
        $cekanggota = mysqli_query($connect, "SELECT * FROM tb_anggota WHERE email = '$user' AND password = '$passmd5' AND status='Aktif'");
        $row = mysqli_fetch_array($cekanggota);
        $idanggota = $row['id_anggota']; //id admin dari tb admin
        $ada = mysqli_num_rows($cekanggota);

        if ($ada > 0) {
            $_SESSION['webportal'] = $user;
            $_SESSION['member'] = $idanggota; //jadikan session
            echo "<script>alert('Selamat datang Teman di website Portal Berita!');document.location= '../index.php'</script>";
        } else {
            $pass_error = "<span style= 'color: #FFF; margin-left: 10px;'> User & Password Salah / Akun anda diblokir </span>";
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
    <link rel="stylesheet" href="../assets/css/loginstyle.css">
</head>

<body>

    <div id="container">

        <?php include "../header.php"; ?>

        <div class="konten">
            <div class="konten-kiri">
                <form action="" method="POST">
                    <table class="login">
                        <tr>
                            <th>
                                <h2>LOGIN ANGGOTA</h2>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="user" placeholder="Masukan Email" class="input" value="<?= $user; ?>">
                                <?= $user_error; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" name="pass" placeholder="Masukan Password" class="input">
                                <?= $pass_error; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" name="submit">LOGIN</a></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="margin: 0 5px 5px 5px; padding: 5px; text-align: center;">
                                    <a href="../daftaranggota.php" title="Pendaftaran Anggota" style="color: #fff; text-decoration: none;">Klik untuk Daftar Anggota Baru</a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>

            </div>
            <div class="konten-kanan"></div>
            <div style="clear:both;"></div>
        </div>
        <?php include "../footer.php"; ?>
    </div>
</body>

</html>