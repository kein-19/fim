<?php
error_reporting(0);
session_start();
include "../koneksi.php";

$sesianggota = $_SESSION['member'];
if (!isset($sesianggota)) {
    header('location: index.php');
}

$anggota = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM tb_anggota WHERE id_anggota='$sesianggota'"));

$user = mysqli_real_escape_string($connect, $_POST['user']);
$pass = mysqli_real_escape_string($connect, $_POST['pass']);
$nama = mysqli_real_escape_string($connect, $_POST['nama']);

$passmd5 = md5($pass);

if (isset($_POST['submit'])) {
    if ($nama == "") {
        $nama_error = "<span style='color:#fff;'>Nama wajib diisi</span>";
    } elseif ($user == "") {
        $user_error = "<span style='color:#fff;'>Email wajib diisi</span>";
    } else {

        if (empty($pass)) {
            $sql = mysqli_query($connect, "UPDATE tb_anggota SET nama='$nama' WHERE id_anggota='$sesianggota'");
            if ($sql) {
                echo "<script>alert('Update Berhasil');document.location='ubahbiodata.php'</script>";
            } else {
                echo "<script>alert('Gagal ! terjadi kesalahan, silahkan ulangi kembali'); document.location='ubahbiodata.php'</script>";
            }
        } else {
            $sql = mysqli_query($connect, "UPDATE tb_anggota SET nama='$nama', password='$passmd5' WHERE id_anggota='$sesianggota'");
            if ($sql) {
                echo "<script>alert('Update Berhasil');document.location='ubahbiodata.php'</script>";
            } else {
                echo "<script>alert('Gagal ! terjadi kesalahan, silahkan ulangi kembali'); document.location='ubahbiodata.php'</script>";
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
    <link rel="stylesheet" href="../assets/css/loginstyle.css">
    <link rel="stylesheet" href="../assets/css/style.css">
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
                                <h2>BIODATA ANGGOTA</h2>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="nama" placeholder="Masukan Nama Lengkap" class="input" value="<?= $anggota['nama']; ?>" maxlength="60">
                                <?= $nama_error; ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" name="user" placeholder="Masukan Email" class="input" value="<?= $anggota['email']; ?>" maxlength="60" readonly="readonly">
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
                                <button type="submit" name="submit">UPDATE BIODATA</a></button>
                            </td>
                        </tr>
                    </table>
                </form>

            </div>
            <div class="konten-kanan">

                <?php
                $sesianggota = $_SESSION['member'];
                if (isset($sesianggota)) {
                    $anggota = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM tb_anggota WHERE id_anggota='$sesianggota'"));
                ?>

                    <h3>Menu Anggota</h3>
                    <ul>
                        <li><a href="ubahbiodata.php">Ubah Biodata & Password</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>

                <?php
                }
                ?>

            </div>
            <div style="clear:both;"></div>
        </div>
        <?php include "../footer.php"; ?>
    </div>
</body>

</html>