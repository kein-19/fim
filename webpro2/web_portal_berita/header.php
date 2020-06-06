<div id="topbar">
    <div class="header">
        <h1>Portal Berita Mahasiswa</h1>
        <p>Berita terkini dan terupdate dikalangan mahasiswa</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="index.php" title="Home">Beranda</a></li>
            <li><a href="#" title="Berita">Berita</a></li>
            <li><a href="#" title="Kontak Kami">Kontak Kami</a></li>
            <?php $sesianggota = $_SESSION['member'];
            if (isset($sesianggota)) {
                $anggota = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM tb_anggota WHERE id_anggota = '$sesianggota'"));

            ?>
                <li><a href="#">Login : <?= $anggota['nama']; ?></a></li>

            <?php } else {  ?>
                <li><a href="anggota/index.php" title="Login Anggota">Login Anggota</a></li>

            <?php
            }
            ?>
            <!-- <li><a href="admin/index.php" title="Login">Login Admin</a></li> -->
        </ul>
    </div>
</div>