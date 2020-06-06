<html>
<head>
<title>Untitled Document</title>
</head>
<body>
<?php
$koneksi=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("db_berita");
$tampil="SELECT * FROM buku_tamu ORDER BY id";
$query=mysql_query($tampil) or die ("gagal".mysql_error());
$jumlah=mysql_num_rows($query);
?>
<table width-"70%" border="1" style="border:#000" align="center">
	<tr>
    	<td colspan="6" align="center"><h1><b>DATA BUKU TAMU</b></h1></td>
	</tr>
    <tr align="center" bgcolor="#0066FF">
    	<td width="6%"><b>No</b></td>
        <td width="20%"><b>Nama</b></td>
        <td width="25%"><b>Email</b></td>
        <td width="29%"><b>Pesan</b></td>
        <td width="20%" colspan="2"><b>Action</b></td>
    </tr>
    <?php
	while ($row=mysql_fetch_array($query))
	{
		$a=$row['id'];
		$b=$row['nama'];
		$c=$row['email'];
		$d=$row['pesan'];
	?>
    <tr align="center">
    <td><?php echo $a;?></td>
    <td><?php echo $b;?></td>
    <td><?php echo $c;?></td>
    <td><?php echo $d;?></td>
    <td><a href="hapusbukutamu.php?id=<?=$a;?>" onClick="return confirm('Anda Yakin Ingin Menghapus Item Ini?');">HAPUS</a></td>
    <td><a href="editbukutamu.php?id=<?=$a;?>">EDIT</a></td>
    </tr>
    <?php } ?>
    <tr>
    <td colspan="6">Jumlah Record : <?php echo $jumlah; ?></td>
    </tr>
</table>
</body>
</html>