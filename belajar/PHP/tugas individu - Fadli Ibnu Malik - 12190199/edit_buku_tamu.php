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

$stmt = "SELECT * FROM buku_tamu WHERE id='".$_GET['id']."'";

$query = mysqli_query($con,$stmt) or die ("Gagal Memunculkan" . mysqli_error());
$row = mysqli_fetch_array($query);

$id = $row['id'];
$nama = $row['nama'];
$email = $row['email'];
$pesan = $row['pesan'];

?>

<form id="form1" name="form1" method="post" action="update_buku_tamu.php">
  <table width="495" border="1">
    <tr>
      <td colspan="3" align="center"><h2> EDIT BUKU TAMU </h2></td>
    </tr>
    <tr>
      <td width="100">Id Buku Tamu</td>
      <td width="15">:</td>
      <td width="365"><input type="text" name="id" value="<?=$id;?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><input type="text" name="nama" value="<?=$nama;?>" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td>:</td>
      <td><input type="text" name="email" value="<?=$email;?>" /></td>
    </tr>
    <tr>
      <td>Pesan</td>
      <td>:</td>
      <td><textarea cols="50" rows="5" name="pesan"><?=$pesan;?></textarea></td>
    </tr>
    <tr>
      <td colspan="3" align="center">
      <input type="submit" name="submit" value="Update" />
      <input type="reset" name="reset" value="Batal" /></td>
    </tr>
  </table>
</form>
</body>
</html>