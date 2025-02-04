<?php


//join() / implode() => Menggabungkan array menjadi string
var_dump(join(",", [1,2,3,4,5])); //Result "1,2,3,4,5"


//explode() => memecah string menjadi array
var_dump(explode(" ", "Faizal Rahmat Nursaori")); //Result ["Faizal", "Rahmat", "Nursaori]


//strtolower() => mengubah string menjadi lowercase
var_dump(strtolower("Faizal")); //faizal


//strtoupper() => mengubah string menjadi upper
var_dump(strtoupper("Faizal")); //FAIZAL

//substr => mengambi sebagian string
var_dump(substr("Faizal Rahmat Nursaori", 0, 6));


//trim() => menghapus whitespace di depan dan di belakang string
var_dump(trim("  Faizal  "));

