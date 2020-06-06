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
$db_name = 'komunitas';

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if ( mysqli_connect_errno() )
{
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt = "SELECT * FROM kontak WHERE id='".$_GET['id']."'";

$query = mysqli_query($con,$stmt) or die ("Gagal Memunculkan" . mysqli_error());
$row = mysqli_fetch_array($query);

$id = $row['id'];
$nama = $row['nama'];
$email = $row['email'];
$pesan = $row['pesan'];

?>

<form id = "form1" name = "form1" method="post"   action = "update.php">
	<table width="64%" border="0" align="center">
    	<tr>
        	<td colspan="2" align="center" bgcolor="#FFFF99"> <h2 style="font:'Courier New', Courier, monospace"; color:#F36>EDIT KONTAK LIST</h2></td>
        </tr>
        <tr>
        	<td>Kontak List</td>
		</tr>
		<tr>
        	<td>Id</td>
        	<td><input type="text" name="id" id="nama" value="<?=$id; ?>" readonly="readonly"/> </td>
        </tr>
		<tr>
        	<td>Nama</td>
        	<td><input type="text" name="nama" id="nama" value="<?=$nama; ?>" /> </td>
        </tr>
        <tr>
        	<td>Email</td>
        	<td><input type="text" name="email" id="email" value="<?=$email; ?>" /></td>
        </tr>
        <tr>
        	<td>Pesan</td>
			<td><textarea cols="50" rows="5" name="pesan"><?=$pesan;?></textarea></td>
        </tr>
        <tr>
        	<td>&nbsp;</td>
            <td><input type = "submit" name="update" id="update" value="UPDATE" />
         <input type = "reset" name="cancel" id="cancel" value="CANCEL" /></td>
		</tr>
		<tr>
			<td><a href="http://localhost/komunitas/table/table.php">Kembali</a>
		</tr>
        </table>
</form>
</body>
</html>