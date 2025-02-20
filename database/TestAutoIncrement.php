<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();
$sql = "INSERT INTO comments(email, comment) VALUES('rahmat@gmail.com', 'halo')";
$connection->exec($sql);

$id = $connection->lastInsertId();

echo "Id yang terakhir : " . $id . PHP_EOL;

$connection = null;
