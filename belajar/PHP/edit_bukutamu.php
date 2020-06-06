<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
//<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Buku Tamu</title>
</head>
<body>
<?php
$koneksi=mysqli_connect("localhost","root","", "db_berita")or die(mysqli_error());
$query=mysqli_query($koneksi,"SELECT * FROM buku_tamu WHERE id='".$_GET['id']."'") or die ("gagal".mysqli_error());
$row=mysqli_fetch_array($query);
$a=$row['id'];
$b=$row['nama'];
$c=$row['email'];
$d=$row['pesan'];
?>

<form id="form1" name="form1" method="post" action="update_bukutamu.php">
<br>
    <table align=center>
        <tr>
        <td colspan=3 align=center><h2 style="font:Tahoma, Geneva, sans-serief; color: #30F;">EDIT BUKU TAMU</h2><td>
        </tr>
        <tr>
            <td>Id Buku Tamu</td>
            <td><input type="text" name="nama" id="nama" value="<?php echo $a; ?>" readonly=readonly/></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" id="nama" value="<?php echo $b; ?>"/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" id="email" value="<?php echo $c; ?>"/></td>
        </tr>
        <tr>
            <td>Pesan</td>
            <td>
            <textarea rows="3" cols="45" name="pesan" id="pesan" input type="text" value="<?php echo $d; ?>"></textarea>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
            <input type="submit" name="update" id="kirim" value="UPDATE">
            <input type="reset" name="cancel" id="cancel" value="CANCEL">
            </td>
        </tr>
    </table>
</form>
</body>
</html>