<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tambah Artikel</title>
</head>

<body>
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="simpan_artikel.php">
  <table width="412" border="1" align="center">
    <tr>
      <td height="50" colspan="3" align="center"> <b> <h2> TAMBAH ARTIKEL </h2> </b></td>
    </tr>
    <tr>
      <td width="69">Judul</td>
      <td width="12">:</td>
      <td width="309"><input type="text" name="judul" size="25" /></td>
    </tr>
    <tr>
      <td>Isi Artikel</td>
      <td>:</td>
      <td><textarea name="artikel" rows="5" cols="40"></textarea></td>
    </tr>
    <tr>
      <td>Gambar</td>
      <td>:</td>
      <td><input type="file" name="gambar" /></td>
    </tr>
    <tr>
      <td colspan="3" align="center">
      <input type="submit" name="submit" value="Simpan" />
      <input type="reset" name="batal" value="Batal"  />
      <a href="index.php?page=artikel">Kembali</a></td>
    </tr>
  </table>
</form>
</body>
</html>