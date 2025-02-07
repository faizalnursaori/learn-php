<?php

require_once "ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "";



try {
    validateLoginRequest($loginRequest);
} catch (ValidationException | Exception $exception) {
    echo "Validation Error : {$exception->getMessage()}" . PHP_EOL;
} finally {
    echo "Ini akan selalu dieksekusi" . PHP_EOL;
}

// echo "Valid" . PHP_EOL;
