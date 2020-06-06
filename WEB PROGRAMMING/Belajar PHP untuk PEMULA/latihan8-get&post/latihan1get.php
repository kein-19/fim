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
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li>
                <a href="latihan2get.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>

    </ul>
</body>
</html>