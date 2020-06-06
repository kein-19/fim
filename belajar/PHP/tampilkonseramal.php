<html>
<head>
    <title>Judul Halaman Web</title>
</head>
<body>
<h2 align=center>KONSER AMAL INDAHNYA BERBAGI</h2>
<br>
    <table align=center>
        <tr>
        <td colspan=3>=======================================</td>
        </tr>
        <tr>
            <td>Nama Pemesan</td>
            <td>:</td>
            <td><?php echo $_POST["nama_pemesan"];?></td>
        </tr>
        <tr>
            <td>Kode Studio</td>
            <td>:</td>
            <td>
            <?php echo $_POST["kode_studio"];?>
            </td>
        </tr>

        <tr>
            <td>Bintang Tamu</td>
            <td>:</td>
            <td>
            <?php
            if ($_POST["kode_studio"] == "Studio 1" )
            echo 'Opick';
            else
            echo 'Raihan';
            ?>
            </td>
        </tr>
        <tr>
            <td>Jenis Kelas</td>
            <td>:</td>
            <td><?php echo $_POST["jenis_kelas"];?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td>
            <?php
            if ($_POST["jenis_kelas"] == "VIP")
            {$harga = 500000;}
            elseif ($_POST["jenis_kelas"] == "Festival")
            {$harga = 250000;}
            echo $harga;
            ?>
            </td>
        </tr>
        <tr>
            <td>Jumlah Beli</td>
            <td>:</td>
            <td><?php echo $_POST["jumlah_tiket"];?></td>
        </tr>
        <tr>
        <td colspan=3>=======================================</td>
        </tr>
        <tr>
            <td>Total Harga</td>
            <td>:</td>
            <td>
            <?php
            if ($_POST["jenis_kelas"] == "VIP")
            {$total = $_POST['jumlah_tiket'] * $harga;}
            elseif ($_POST["jenis_kelas"] == "Festival")
            {$total = $_POST['jumlah_tiket'] * $harga;}
            echo $total;
            ?>
            </td>
        </tr>
    </table>
<br><a href="http://localhost/belajar/php/formkonseramal.php"><center>INPUT DATA LAGI</center></a>
</body>
</html>