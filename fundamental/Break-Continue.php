<?php

// $counter = 1;

// //Break
// while(true){
//     echo "Looping ke-{$counter}" . PHP_EOL;
//     $counter++;

//     if($counter > 10){
//         break;
//     }
// }

//Continue

for ($i = 0; $i  < 100; $i++) {
    if($i % 2 === 0){
        continue; //Kalau hasilnya genap bakal diskip
    } 
    echo "Hello continue ke-{$i}" . PHP_EOL;
}