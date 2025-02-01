<?php

$data = [];
$action = $data["action"] ?? "nothing";

echo $action . PHP_EOL; // Result nothing

$data = ["action" => "run"];
$action = $data["action"] ?? "nothing";

echo $action; //Result run