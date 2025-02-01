<?php

//Syntax
// if (expression) {
//     statement;
// }

$nilai = 75;
$absen = 80;

// if ($nilai >= 70 && $absen >= 70){
//     echo "Anda lulus" . PHP_EOL;
// } else {
//     echo "Anda tidak lulus" . PHP_EOL;
// }

if($nilai >= 85 && $absen >= 80){
    echo "Anda mendapatkan nilai A" . PHP_EOL;
} else if($nilai >= 75 && $absen >= 70){
    echo "Anda mendapatkan nilai B" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60){
    echo "Anda mendapatkan nilai C" . PHP_EOL;
} else {
    echo "Anda harus remedial" . PHP_EOL;
}