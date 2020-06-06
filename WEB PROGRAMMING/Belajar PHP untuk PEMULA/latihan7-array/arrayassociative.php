<?php 
// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Fadli",
        "nim" => "12190199",
        "email" => "fadli@nusamandiri.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Ibnu",
        "nim" => "12190200",
        "email" => "ibnu@nusamandiri.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Malik",
        "nim" => "12190201",
        "email" => "malik@nusamandiri.ac.id",
        "jurusan" => "Teknik Informatika",
        "tugas" => [90, 80, 100]
    ],      
];

echo $mahasiswa[2]["tugas"][2];

?>