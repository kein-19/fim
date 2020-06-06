<?php 
$mahasiswa = [
    [
        "nama" => "Fadli",
        "nim" => "12190199",
        "email" => "fadli@nusamandiri.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "shikamaru.jpg"
    ],
    [
        "nama" => "Ibnu",
        "nim" => "12190200",
        "email" => "ibnu@nusamandiri.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "naruto.jpg"
    ],
    [
        "nim" => "12190201",
        "nama" => "Malik",
        "email" => "malik@nusamandiri.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "choji.jpg"
    ],      
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"] ?></li>
            <li>NIM : <?= $mhs["nim"] ?></li>
            <li>Jurusan : <?= $mhs["jurusan"] ?></li>
            <li>Email : <?= $mhs["email"] ?></li>
            <br>

        <?php endforeach ?>
    </ul>

</body>
</html>