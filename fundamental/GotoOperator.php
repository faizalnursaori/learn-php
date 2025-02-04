<?php

goto a;
echo "Hello World" . PHP_EOL; // Ini nanti diskip

a:
echo "Hello A" . PHP_EOL;

//Menggunakan while loop

$counter = 1;

while (true) {
    echo "Ini adalah loop ke-$counter" . PHP_EOL;
    $counter++;

    if($counter > 10){
        goto end; //Kondisinya langsung skip ke end
    }
}

end:
echo "End loop";