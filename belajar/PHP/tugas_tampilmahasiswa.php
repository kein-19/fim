<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <table border=1 bgcolor="cyan" align=center>
        <tr>
            <td colspan=3><h2>DATA MAHASISWA</h2></td>
        </tr>
        <tr>
            <td>Nama Anda</td>
            <td><?php echo $_POST["nama"];?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?php echo $_POST["alamat"];?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $_POST["jenis_kelamin"];?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td><?php echo $_POST["pekerjaan"];?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>
            <?php
            $checkbox = $_POST['hobi'];
            $i=0;
            while($i < sizeof($checkbox))
            {
                echo $checkbox[$i];
                $i++;
            }
            ?>
            </td>
        </tr>
    </table>
<br><a href="http://localhost/belajar/php/tugas_forminputmahasiswa.php"><center>INPUT DATA LAGI</center></a>
</body>
</html>