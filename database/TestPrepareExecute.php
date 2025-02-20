<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ? ";

$statement = $connection->prepare($sql);
$statement->execute([$username, $password]);


$succes = false;
$find_user = null;
foreach ($statement as $row) {
    $succes = true;
    $find_user = $row["username"];
}

if ($succes) {
    echo "Sukses login : " . $find_user . PHP_EOL;
} else {
    echo "Gagal Login" . PHP_EOL;
}

$connection = null;
