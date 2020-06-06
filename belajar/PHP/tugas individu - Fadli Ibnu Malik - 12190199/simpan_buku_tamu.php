<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$stmt = $con->prepare("INSERT INTO buku_tamu (id, nama, email, pesan) VALUES (?, ?, ?, ?)");
$stmt->bind_param("isss", $id, $nama, $email, $pesan);
$stmt->execute();
echo "<meta http-equiv='refresh' content='0 url=tambah_buku_tamu.php?Data Telah Tersimpan'>";
$stmt->close();
?>
</body>
</html>