<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="simpan_buku_tamu.php">
  <table width="395" border="0">
    <tr>
      <td colspan="3" align="center"><h1> BUKU TAMU </h1></td>
    </tr>
    <tr>
      <td width="69">Nama</td>
      <td width="11">:</td>
      <td width="301"><input type="text" name="nama" size="25"  /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td>:</td>
      <td><input type="text" name="email" size="25"  /></td>
    </tr>
    <tr>
      <td>Pesan</td>
      <td>:</td>
      <td><textarea cols="50" rows="5" name="pesan"> </textarea></td>
    </tr>
    <tr>
      <td colspan="3" align="center">
      <input type="submit" name="submit" value="Kirim" />
      <input type="reset" name="reset" value="Batal"  />
      <a href="tampil_buku_tamu.php">[ Lihat Buku Tamu ] </a>
      </td>
    </tr>
  </table>
</form>
</body>
</html>