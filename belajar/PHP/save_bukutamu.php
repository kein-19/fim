<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Buku Tamu</title>
</head>
<body>
<?php
$koneksi=mysqli_connect("localhost","root","", "db_berita")or die(mysqli_error());
//mysqli_select_db("db_berita");
$a=$_POST['nama'];
$b=$_POST['email'];
$c=$_POST['pesan'];
//$perintah="INSERT INTO buku_tamu values('','$a','$b','$c')";
//$simpan=mysqli_query($perintah,$koneksi);
$simpan=mysqli_query($koneksi, "INSERT INTO buku_tamu values('','$a','$b','$c')");
if($simpan)
echo "<meta http-equiv='refresh' content='0 url=input_bukutamu.php?Data Telah Tersimpan'>";
else
echo "gagal";
?>
</body>
</html>