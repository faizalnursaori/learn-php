<?php

function getConnection(): PDO
{
    $host = "localhost";
    $port = "3306";
    $database = "belajar_php_database";
    $username = "root";
    $password = "Kabizal123";



    return new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
}
