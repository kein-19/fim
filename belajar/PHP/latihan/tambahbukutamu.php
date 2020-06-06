<html>
<head>
<title>United Document</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="simpanbukutamu.php">
<table width+"53%" border="0" align="left">
	<tr>
		<td colspan="3" align="center"><h2 style="font:Tahoma, Ganeva, sans-serif; color: #30F;">BUKU TAMU</h2></td>
	</tr>
    <tr>
		<td width="16%">Nama</td>
        <td width="4%">:</td>
        <td width="80%"><input type="text" name="nama" id="nama" /></td>
	</tr>
	<tr>
		<td>Email</td>
        <td>:</td>
        <td><input type="text" name="email" id="email" /></td>
	</tr>
    <tr>
		<td>Pesan</td>
        <td>:</td>
        <td><textarea name="pesan" id="pesan" cols="45" rows="5"></textarea></td>
    </tr>
	<tr>
    	<td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="kirim" id="kirim" value="KIRIM" />
        	<input type="reset" name="batal" id="batal" value="BATAL" />
            <a href="tampilbukutamu.php">[  LIHAT BUKU TAMU  ]</a></td>
    </tr>
</table>
</form>
</body>
</html>