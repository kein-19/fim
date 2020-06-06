<?php include "../koneksi.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita Mahasiswa</title>
    <link rel="stylesheet" href="../assets/reset.css">
    <link rel="stylesheet" href="../assets/styleberita.css">
</head>
<body>

    <div id="container">
        <div id="topbar">
            <div class="header">
                <h1>Portal Berita Mahasiswa</h1>
                <p>Berita terkini dan terupdate dikalangan mahasiswa</p>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#" title="Home">Beranda</a></li>
                    <li><a href="#" title="Berita">Berita</a></li>
                    <li><a href="#" title="Kontak Kami">Kontak Kami</a></li>
                    <li><a href="#" title="Login Anggota">Login Anggota</a></li>
                    <li><a href="#" title="Login Admin">Login Admin</a></li>
                </ul>
            </div>
        </div>
        <div class="konten">
            <div class="konten-kiri">
                <?php

                $data=mysqli_query($koneksi,"SELECT * FROM tb_berita, tb_admin where tb_berita.id_admin=tb_admin.id_admin order by id_berita desc");
                while ($row = mysqli_fetch_array($data)) {
                
                ?>

                <div class="feedberita">
                    <img src="../gambar/<?= $row['gambar'];?>" alt="<?= $row['judul'];?>" style="width: 300px; height: 200px; float: left; margin: 10px;">
                    <a href="#"><h3><?= $row['judul'];?></h3></a>
                    <hr>
                    <p><?=$row['text_berita'];?></p>
                    <br>
                    <br>
                    <p>Diposting oleh : <?= $row['nama_lengkap'];?>, Tanggal : <?= $row['tgl_posting'];?></p>
                    <div style="clear:left;"></div>
                </div>

                <?php } ?>
                                
                
            </div>
        </div>
        <div class="footer">
            <p>Copyright Fadli Ibnu Malik 2020 - All Right Reserved</p>
        </div>
        <div style="clear:both;"></div>
    </div>
    
</body>
</html>