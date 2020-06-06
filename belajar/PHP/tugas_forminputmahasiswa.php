<html>
<head>
    <title>Input Mahasiswa</title>
</head>
<body bgcolor=pink>
<h1 align=center>PENGELOLAAN DATA MAHASISWA</h1>
<br>
<form action="tugas_tampilmahasiswa.php" method="post">
    <table align=center>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" size="25"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" size="25"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
            <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
            </td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td>
            <select name="pekerjaan">
                <option value="Wirausaha">Wirausaha</option>
                <option value="Karyawan">Karyawan</option>
                <option value="Mahasiswa">Mahasiswa</option>
                <option value="Guru">Guru</option>
                <option value="Dosen">Dosen</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td>
            <input type="checkbox" name="hobi[]" value="Olahraga "><label>Olahraga</label>
            <input type="checkbox" name="hobi[]" value="Musik "><label>Musik</label>
            <input type="checkbox" name="hobi[]" value="Jalan-Jalan"><label>Jalan-Jalan</label>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
            <input type="submit" value="Kirim">
            <input type="reset" value="Batal">
            </td>
        </tr>
    </table>
</form>
</body>
</html>