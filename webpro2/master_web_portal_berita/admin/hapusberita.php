<?php
error_reporting(0);
session_start();
include "../koneksi.php";

$id = mysqli_real_escape_string($connect, $_GET['id']);
$ceknama = mysqli_fetch_array(mysqli_query($connect, "select * from tb_berita where id_berita='$id'"));
$namagambar = $ceknama['gambar'];

unlink('../assets/images/berita/' . $namagambar);
$sql = mysqli_query($connect, "delete from tb_berita where id_berita='$id'"); // hapus dari tabel 
if ($sql) {
    echo "<script>alert('Hapus berhasil');document.location='berita.php'</script>";
} else {
    echo "<script>alert('Hapus Gagal'); document.location='berita.php'</script>";
}
