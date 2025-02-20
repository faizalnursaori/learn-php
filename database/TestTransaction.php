<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments (email, comment) VALUES ('rahmatf@gmail.com', 'Halo')");
$connection->exec("INSERT INTO comments (email, comment) VALUES ('rahmatfr@gmail.com', 'Halo juga')");
$connection->exec("INSERT INTO comments (emails, comment) VALUES ('rahmatfrn@gmail.com', 'Halo bro')");


$connection->commit();
// $connection->rollBack(); Kalau mau rollback data
$connection = null;
