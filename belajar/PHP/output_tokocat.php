<html>
<head>
    <title>Toko Cat Guna Bangun Jaya</title>
</head>
<body>
<h2 align=center>TOKO CAT GUNA BANGUN JAYA</h2>
<br>
    <table align=center>
        <tr>
        <td colspan=5>----------------------------------------------------------</td>
        </tr>
        <tr>
            <td>Nama Customer</td>
            <td>:</td>
            <td><?php echo $_POST["nama_customer"];?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>
            <?php echo $_POST["alamat"];?>
            </td>
        </tr>
        <tr>
            <td>Jenis Cat</td>
            <td>:</td>
            <td><?php echo $_POST["jenis_cat"];?></td>
        </tr>
        <tr>
            <td>Warna Cat</td>
            <td>:</td>
            <td><?php echo $_POST["warna_cat"];?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td></td>
            <td>Rp. </td>
            <td align=right>
            <?php
            if ($_POST["jenis_cat"] == "Mowilex")
            {$harga = 20000;}
            elseif ($_POST["jenis_cat"] == "Danapaint")
            {$harga = 30000;}
            elseif ($_POST["jenis_cat"] == "Catylac")
            {$harga = 40000;}
            echo $harga;
            ?>
            </td>
        </tr>
        <tr>
            <td>Jumlah Beli</td>
            <td>:</td>
            <td></td>
            <td></td>
            <td align=right><?php echo $_POST["jumlah_beli"];?></td>
        </tr>
        <tr>
        <td colspan=5>----------------------------------------------------------</td>
        <td> (*)</td>
        </tr>
        <tr>
            <td>Total Harga</td>
            <td>:</td>
            <td></td>
            <td>Rp. </td>
            <td align=right>
            <?php
            if ($_POST["jenis_cat"] == "Mowilex")
            {$total = $_POST['jumlah_beli'] * $harga;}
            elseif ($_POST["jenis_cat"] == "Danapaint")
            {$total = $_POST['jumlah_beli'] * $harga;}
            elseif ($_POST["jenis_cat"] == "Catylac")
            {$total = $_POST['jumlah_beli'] * $harga;}
            echo $total;
            ?>
            </td>
        </tr>
        <tr>
            <td>Diskon</td>
            <td>:</td>
            <td></td>
            <td>Rp. </td>
            <td align=right>
            <?php
            if ($_POST['jumlah_beli'] >= 5 and $_POST['jumlah_beli'] < 10)
            {$diskon = $total * 5/100;}
            elseif ($_POST['jumlah_beli'] >= 10)
            {$diskon = $total * 10/100;}
            else
            {echo $diskon = 0;}
            echo $diskon;
            ?>
            </td>
        </tr>
        <tr>
        <td colspan=5>----------------------------------------------------------</td>
        <td> (-)</td>
        </tr>
        <tr>
            <td>Total Bayar</td>
            <td>:</td>
            <td></td>
            <td>Rp. </td>
            <td align=right>
            <?php
            {$totalbayar = $total - $diskon;}
            echo $totalbayar;
            ?>
            </td>
        </tr>
        <tr>
        <td colspan=5>----------------------------------------------------------</td>
        </tr>
        <tr>
        <td><br><a href="http://localhost/belajar/php/input_tokocat.php">Kembali</a></td>
        </tr>
    </table>
</body>
</html>