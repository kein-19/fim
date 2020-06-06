<html>
<head>
    <title>Input Komentar</title>
</head>
<body>
<h1 align=center>BUKU TAMU</h1>
<?php
echo "Komentar dan Saran Anda Sangat Kami Butuhkan<br>";
echo "Untuk Meningkatkan Kualitas Situs Kami<br>";
?>

<br>
<form action="tampilkomentar.php" method="post">
Nama Anda   : <input type="text" name="nama" size="25"><br>
Email Anda  : <input type="text" name="email" size="25"><br>
Komentar    : <textarea rows="3" cols="35" name="komentar" input type="text" size="25"></textarea>
<br><br>
<input type="submit" value="Kirim">
<input type="reset" value="Batal">
</form>
</body>
</html>