<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tampil Artikel</title>
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

$cmd = "SELECT * FROM artikel ORDER BY idartikel DESC";
$query = mysqli_query($con,$cmd) or die ("Gagal Memunculkan" . mysqli_error());
$jumlah = mysqli_num_rows($query);
?>

<table width="100%" border="0" align="left">
  <tr>
    <td colspan="2" align="center"><marquee> <b> ISI ARTIKEL </b> </marquee></td>
  </tr>
  <?php
  while ($row = mysqli_fetch_array($query))
  {
	  $judul = $row['judul'];
	  $isi = $row['isi'];
	  $gambar = $row['gambar'];
  ?>
  <tr>
    <td width="13%" rowspan="2"><img src="Gambar/<?=$gambar;?>" width="200" height="200"  /></td>
    <td width="87%"><b> <?=$judul;?> </b></td>
  </tr>
  <tr>
    <td align="justify"><?=$isi;?></td>
  </tr>
  <tr>
    <td colspan="2"><hr /> </hr></td>
  </tr>
  <?php
  }
  ?>
  <tr>
    <td><a href="tambah_artikel.php">Tambah Artikel </a></td>
    <td><a href="index.php?page=artikel">Kembali</a></td>
  </tr>
</table>
</body>
</html>