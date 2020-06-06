<?php include "koneksi.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita Mahasiswa</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>
<body>

    <div id="container">
        <?php include "header.php"; ?>
        <div class="konten">
            <div class="konten-kiri">
                <h2>BERITA TERBARU</h2>
                <?php

                $data=mysqli_query($connect,"SELECT * FROM tb_berita, tb_admin where tb_berita.id_admin=tb_admin.id_admin order by id_berita desc");
                while ($row = mysqli_fetch_array($data)) {
                
                ?>
                <div class="feedberita">
                    <img src="gambar/<?= $row['gambar'];?>" alt="<?= $row['judul'];?>" style="width: 300px; height: 200px; float: left; margin: 10px;">
                <a href=""><h3><?= $row['judul'];?></h3></a>
                <hr>
                <p><?= substr($row['text_berita'],0,150);?>...<a href="#">Baca Selengkapnya</a></p>
                <p>Diposting oleh : <?= $row['nama_lengkap'];?>, Tanggal : <?= $row['tgl_posting'];?></p>
                <div style="clear:both;"></div>

                </div>
                <?php } ?>
				
            </div>
            <div class="konten-kanan"></div>
            <div style="clear:both;"></div>
        </div>
        <?php include "footer.php"; ?>
    
</body>
</html>