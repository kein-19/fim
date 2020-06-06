<html>
<head>
    <title>Input Data Pegawai</title>
</head>
<body>
<h1 align=center>Formulir Pegawai Negeri Konoha</h1>
<br>
<form action="tampilpegawainegerikonoha.php" method="post">
    <table border=1 align=center>
        <tr>
            <td colspan=2><center>Isi Data Di Bawah ini :</center></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" size="25"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" rows="5" cols="27"></textarea></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempat_lahir" size="25"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="text" name="tanggal_lahir" size="25"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
            <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
            </td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            <td>
            <select name="pendidikan">
                <option value="SMA">SMA</option>
                <option value="SMK">SMK</option>
                <option value="D3">D3</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
            </select>
            </td>
        </tr>
            <td colspan=2>
            <center>
            <input type="submit" value="Submit">
            <input type="reset" value="Cancel">
            </center>
            </td>
        </tr>
    </table>
</form>
</body>
</html>