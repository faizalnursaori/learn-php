<?php

//setTime($hour, $minute, $second) => mengubah waktu date time
//setDate($year, $month, $day)=> mengubah tanggal date time
//setTimeStamp($unixTimestamp) => Mengubah unix timestamp DateTime

$dateTime = new DateTime();
$dateTime->setDate(2001, 1, 20); //Mengubah tahun, bulan, hari

var_dump($dateTime);
