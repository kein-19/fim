<?php 
$mahasiswa = [
    ["Fadli", "12190199", "Teknik Informatika", "fadli@nusamandiri.ac.id"],
    ["Ibnu", "12190200", "Teknik Informatika", "ibnu@nusamandiri.ac.id"],
    ["12190201", "Malik", "Teknik Informatika", "malik@nusamandiri.ac.id"]
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
            <li>Nama : <?= $mhs[0] ?></li>
            <li>NIM : <?= $mhs[1] ?></li>
            <li>Jurusan : <?= $mhs[2] ?></li>
            <li>Email : <?= $mhs[3] ?></li>
            <br>

        <?php endforeach ?>
    </ul>

</body>
</html>