<html>
    <head>
        <title>Menghitung Luas Lingkaran</title>
    </head>
    <body>
    <?php
    // Konstanta untuk nilai Judul
    define("Judul","Hitung Luas Lingkaran");
    // Konstanta untuk nilai phi
    define("PHI", 3.14);
    echo Judul;
    $r=10;
    echo "<br>Jari-jari : $r<br>\n";
    $luas=PHI*$r*$r;
    echo "Luas Lingkaran = $luas";
    ?>
    </body>
</html>