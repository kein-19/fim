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

$stmt = $con->prepare("UPDATE buku_tamu SET nama=?, email=?, pesan=? WHERE id=?");
$stmt->bind_param('sssi', $_POST['nama'], $_POST['email'], $_POST['pesan'], $_POST['id']);
$stmt->execute();
echo "<meta http-equiv='refresh' content='0 url=tampil_buku_tamu.php'>";
$stmt->close();
?>
</body>
</html>