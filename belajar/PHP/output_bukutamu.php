<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Buku Tamu</title>
</head>
<body>
<?php
//$koneksi=mysqli_connect("localhost","root","")or die(mysqli_error());
//mysqli_select_db("db_berita");
$koneksi=mysqli_connect("localhost","root","", "db_berita")or die(mysqli_error());

//$tampil="SELECT * FROM buku_tamu ORDER BY id";
$query=mysqli_query($koneksi,"SELECT * FROM buku_tamu ORDER BY id") or die ("gagal".mysqli_error());
$jumlah=mysqli_num_rows($query);
?>

<br>
    <table align=center border=1 style="border:#000">
        <tr>
        <td colspan=6 align=center><h2 style="font:Tahoma, Geneva, sans-serief; color: #30F;">BUKU TAMU</h2></td>
        </tr>
        <tr align=center bgcolor="#0066FF">
            <td><b>No<b></td>
            <td><b>Nama<b></td>
            <td><b>Email<b></td>
            <td><b>Pesan<b></td>
            <td colspan=2><b>Action<b></td>
        </tr>
<?php
while ($row=mysqli_fetch_array($query))
    {
        $a=$row['id'];
        $b=$row['nama'];
        $c=$row['email'];
        $d=$row['pesan'];
?>
        <tr align=center>
        <td><?php echo $a;?></td>
        <td><?php echo $b;?></td>
        <td><?php echo $c;?></td>
        <td><?php echo $d;?></td>
        <td><a href="delete_bukutamu.php?id=<?=$a;?>" onclick="return confirm('Anda Yakin ingin Menghapus Item Ini?');">HAPUS</a></td>
        <td><a href="edit_bukutamu.php?id=<?=$a;?>">EDIT</a></td>
        </tr>
    <?php } ?>
    <tr>
        <td colspan=6>Jumlah Record : <?php echo $jumlah; ?></td>
    </tr>
    </table>

</body>
</html>