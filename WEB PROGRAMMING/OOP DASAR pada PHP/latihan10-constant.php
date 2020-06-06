<?php

// define('NAMA', 'Fadli Ibnu Malik');
// echo NAMA;

// echo "<br>";

// const UMUR = 25;
// echo UMUR;

// echo "<br>";

// class Coba {
//     const NAMA = 'Fadli';
// }

// echo Coba::NAMA;
// echo "<br>";

function coba() {
    return __FUNCTION__;
}
echo coba();
echo "<br>";


class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

?>