<html>
<head>
<title>Untitled Document</title>
</head>
<body>
<?php
$koneksi=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("db_berita");
$a=$_POST['nama'];
$b=$_POST['email'];
$c=$_POST['pesan'];
$perintah="insert into buku_tamu value('','$a','$b','$c')";
$simpan=mysql_query($perintah,$koneksi);
if($simpan)
echo"<meta http-equiv='refresh' content='0 url=tambahbukutamu.php?Data Telah Tersimpan'>";
else
echo"gagal";
?>
</body>
</html>
