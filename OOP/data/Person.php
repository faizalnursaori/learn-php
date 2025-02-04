<?php

class Person{
    var string $name;
    var? string $address; //Nullable atau jadi bisa optional atau jadi bisa kosong
    var string $country = "Indonesia"; //Set default value

// $name → Mengacu pada parameter yang diterima oleh fungsi sayHello (Budi).
// $this->name → Mengacu pada properti name milik objek Person (Faizal).
    function sayHello(?string $name){
        if(is_null($name)){
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }
}