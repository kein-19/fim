<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Buku Tamu</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="save_bukutamu.php">
<br>
    <table align=center>
        <tr>
        <td colspan=3 align=center><h2 style="font:Tahoma, Geneva, sans-serief; color: #30F;">BUKU TAMU</h2><td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama" size="25"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email" id="email" size="25"></td>
        </tr>
        <tr>
            <td>Pesan</td>
            <td>:</td>
            <td>
            <textarea rows="3" cols="45" name="pesan" id="pesan" input type="text" size="25"></textarea>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
            <input type="submit" name="kirim" id="kirim" value="KIRIM">
            <input type="reset" name="batal" id="batal" value="BATAL">
            <a href="output_bukutamu.php">[ Lihat Buku Tamu ]</a>
            </td>
        </tr>
    </table>
</form>
</body>
</html>