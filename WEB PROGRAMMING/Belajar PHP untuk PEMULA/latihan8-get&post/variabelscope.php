<?php 
// Variable Scope / Lingkup variable
$x = 10;

// function tampilx() {
//     $x = 20;
//     echo $x;
// }
function tampilx() {
    // dengan global, maka variable xnya akan mencari diluar lingkungan function
    global $x;
    echo $x;
}

tampilx();

?>