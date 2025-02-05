<?php

//Destructor adalah function yang akan dipanggil ketika object dihapus memory
require_once "data/Person.php";

$person = new Person("Faizal", "Karawang");

echo "Program selesai" . PHP_EOL;