<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Buku Tamu</title>
</head>
<body>
<?php
$koneksi=mysqli_connect("localhost","root","", "db_berita")or die(mysqli_error());
$a=$_POST['id'];
$b=$_POST['nama'];
$c=$_POST['email'];
$d=$_POST['pesan'];
$ubah="UPDATE buku_tamu SET nama='$b',email='$c',pesan='$d' WHERE id='$a'";
mysqli_query($koneksi,$ubah);
//echo "<meta http-equiv='refresh' content='0 url=output_bukutamu.php?'>";
?>
</body>
</html>