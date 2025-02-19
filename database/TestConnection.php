<?php

$host = "localhost";
$port = "3306";
$database = "belajar_php_database";
$username = "root";
$password = "Kabizal123";



try {
    $connection = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
    echo "Connected successfully" . PHP_EOL;

    $connection = null;
} catch (PDOException $exception) {
    echo "Connection failed: " . $exception->getMessage() . PHP_EOL;
}
