<html>
<head>
    <title>Toko Cat Guna Bangun Jaya</title>
</head>
<body>
<h2 align=center>TOKO CAT GUNA BANGUN JAYA</h2>
<br>
<form action="output_tokocat.php" method="post">
    <table align=center>
        <tr>
            <td>Nama Customer</td>
            <td>:</td>
            <td><input type="text" name="nama_customer" size="25"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" size="25"></td>
        </tr>
        <tr>
            <td>Jenis Cat</td>
            <td>:</td>
            <td>
            <select name="jenis_cat">
                <option value="Mowilex">Mowilex</option>
                <option value="Danapaint">Danapaint</option>
                <option value="Catylac">Catylac</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Warna Cat</td>
            <td>:</td>
            <td>
            <input type="radio" name="warna_cat" value="Merah">Merah
            <input type="radio" name="warna_cat" value="Biru">Biru
            <input type="radio" name="warna_cat" value="Kuning">Kuning
            </td>
        </tr>
        <tr>
            <td>Jumlah Beli</td>
            <td>:</td>
            <td><input type="text" name="jumlah_beli" size="25"></td>
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