<!DOCTYPE html>
<html lang="en">
<head>
	<title>List Kontak</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'komunitas';

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if ( mysqli_connect_errno() )
{
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$cmd ="SELECT * FROM kontak ORDER BY id";
$query = mysqli_query($con,$cmd) or die ("Gagal Memunculkan" . mysqli_error());
$jumlah= mysqli_num_rows($query);
?>

<table width = "95%" border="1" style="border:#000" align="center">
    <tr>
        <td colspan="5" align="center"> <h1 style="font: Tahoma, Geneva, sans-serif; color:#30F;"><b>DATA LIST KONTAK</b></h1></td>
    </tr>
    <tr align="center" bgcolor= #33f3ff ">
    <td width="20%">  <b>Nama</b></td>
    <td width="25%">  <b>Email</b></td>
    <td width="40%">  <b>Pesan</b></td>
	<td width="10%">  <b>Action</b></td>
	<td width="25%">  <b>Action</b></td>
    </tr>

<?php
while ($row = mysqli_fetch_array($query))
	{
		$id = $row['id'];
		$nama = $row['nama'];
		$email = $row['email'];
		$pesan = $row['pesan'];

?>


<tr align="center">
        <td><?=$nama;?></td>
        <td><?=$email;?></td>
		<td><?=$pesan;?></td>
		<td width="50" align="center"><a href="hapus.php?id=<?=$id;?>" onclick="return confirm ('Anda Yakin Ingin Menghapus Data Ini?');"><b>Hapus</b></a></td>
		<td width="50" align="center"><a href="edit.php?id=<?=$id;?>"><b>Edit</b></a></td>
		<?php } ?>
	</tr>
        <tr>
            <td colspan="6">Jumlah Record : <?=$jumlah; ?> </td>
		</tr>
		<tr>
			<td><a href="http://localhost/komunitas/index.html">Kembali ke Beranda</a>
		<tr>
</table>



<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>