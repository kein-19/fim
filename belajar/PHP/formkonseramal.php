<html>
<head>
    <title>Judul Halaman Web</title>
</head>
<body>
<h2 align=center>KONSER AMAL INDAHNYA BERBAGI</h2>
<br>
<form action="tampilkonseramal.php" method="post">
    <table align=center>
        <tr>
            <td>Nama Pemesan</td>
            <td>:</td>
            <td><input type="text" name="nama_pemesan" size="25"></td>
        </tr>
        <tr>
            <td>Kode Studio</td>
            <td>:</td>
            <td>
            <select name="kode_studio">
                <option value="Studio 1">Studio 1</option>
                <option value="Studio 2">Studio 2</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Jenis Kelas</td>
            <td>:</td>
            <td>
            <input type="radio" name="jenis_kelas" value="VIP">VIP
            <input type="radio" name="jenis_kelas" value="Festival">Festival
            </td>
        </tr>
        <tr>
            <td>Jumlah Tiket</td>
            <td>:</td>
            <td><input type="text" name="jumlah_tiket" size="25"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
            <input type="submit" value="Tampil">
            <input type="reset" value="Batal">
            </td>
        </tr>
    </table>
</form>
</body>
</html>