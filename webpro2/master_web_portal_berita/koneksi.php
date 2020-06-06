<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "materi_web2";
// $database = "db_web_portal_berita" ;

$connect = mysqli_connect($server, $user, $password, $database) or die("Error Connection!");
