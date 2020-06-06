<?php 
function salam() {
    return "Selamat Datang, Admin";
}
function salam_nama($nama) {
    return "Selamat Datang, $nama!";
}
function salam_nama_waktu($waktu, $nama) {
    return "Selamat $waktu, $nama!";
}
function slm($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam(); ?></h1>
    <h2><?= salam_nama("Fadli"); ?></h2>
    <h3><?= salam_nama_waktu("Pagi", "Fadli"); ?></h3>
    <h1><?= slm("Pagi"); ?></h1>
</body>
</html>