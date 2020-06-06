<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simpan Artikel</title>
</head>

<body>
<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'db_berita';

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if ( mysqli_connect_errno() )
{
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$judul = $_POST['judul'];
$artikel = $_POST['artikel'];
$gambar = $_FILES['gambar']['name'];

$cmd ="INSERT INTO artikel (idartikel, judul, isi, gambar) VALUES ('', '$judul', '$artikel', '$gambar')";
move_uploaded_file($_FILES['gambar']['tmp_name'],"Gambar/".$gambar);

$simpan = mysqli_query($con,$cmd);
if ($simpan)
{
	echo "Data Berhasil Disimpan";
}
else
{
	echo "Data Tidak Tersimpan";
}
mysqli_close($con);
?>
<br />
<a href="tambah_artikel.php">Kembali ke Tambah Artikel</a> || 
<a href="tampil_artikel.php">Lihat Artikel</a>
</body>
</html>