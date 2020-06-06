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

$cmd = "SELECT * FROM buku_tamu ORDER BY id";
$query = mysqli_query($con,$cmd) or die ("Gagal Memunculkan" . mysqli_error());
$jumlah = mysqli_num_rows($query);
?>


<table width="720" border="1">
  <tr>
    <td colspan="6" align="center"> <h2> BUKU TAMU </h2></td>
  </tr>
  <tr align="center" >
    <td width="30"><b>No</b></td>
    <td width="150"><b>Nama</b></td>
    <td width="200"><b>Email</b></td>	
    <td width="200"><b>Pesan</b></td>
    <td colspan="2"><b>Action</b></td>
  </tr>
  <?php
  while ($row = mysqli_fetch_array($query))
  {
	  $id = $row['id'];
	  $nama = $row['nama'];
	  $email = $row['email'];
	  $pesan = $row['pesan'];
  ?>
  <tr>
    <td align="center"><?=$id?></td>
    <td><?=$nama?></td>
    <td><?=$email?></td>
    <td><?=$pesan?></td>
    <td width="50" align="center"><a href="hapus_buku_tamu.php?id=<?=$id;?>" onclick="return confirm ('Anda Yakin Ingin Menghapus Data Ini?');"><b>Hapus</b></a></td>
    <td width="50" align="center"><a href="edit_buku_tamu.php?id=<?=$id;?>"><b>Edit</b></a></td>
    <?php } ?>
  </tr>
  <tr>
    <td colspan="6">Jumlah Record : <?=$jumlah;?> </td>
  </tr>
</table>

<a href="index.php?page=buku_tamu">Kembali </a>

</body>
</html>