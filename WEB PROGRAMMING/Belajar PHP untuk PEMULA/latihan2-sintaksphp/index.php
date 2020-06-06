<?php 

// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Ouput
// echo, print
// print_r
// var_dump

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

?>

<!-- 1. PHP di dalam HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo "Fadli"; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p>
</body>
</html>

 <!-- 2. HTML di dalam PHP -->
 <!-- tidak direkomendasikan -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php 
        // echo "<h1>Halo, Selamat Datang Fadli</h1>" 
    ?>
</body>
</html> -->