<?php 
// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "fadli ibnu malik";
echo "Halo, nama saya $nama";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo $nama;?>
</h1>
</body>
</html>

<?php 
// Operator
// aritmatika
// + - * / %
$x = 10;
$y = 20;
echo $x * $y;
?>

<?php 
echo "<br>";
// Assignment
// =, +=, -=, /=, %=, .=
$x = 1;
// $x += 5;
$x -= 5;
echo $x;

echo "<br>";
$name = "fadli";
$name .= " ";
$name .= "ibnu malik";
echo $name;
echo "<br>";
?>

<?php 
echo "<br>";
// Perbandingan
//  <, >, <=, >=, ==
// tidak peduli tipe datanya sama atau berbeda
var_dump(1 > 5);
var_dump(1 == "1");
echo "<br>";
?>

<?php 
echo "<br>";
// Identitas
// ===, !==
var_dump(1 === "1");
echo "<br>";
?>

<?php
echo "<br>";
// Logika
// &&, ||, !
$x = 10;
var_dump($x < 20 && $x %2 ==0);
echo "<br>";
?>