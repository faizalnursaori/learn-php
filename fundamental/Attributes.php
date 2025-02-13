<?php

#[Attribute(Attribute::TARGET_PROPERTY)]
class NotBlank // NotBlank adalah nama Attribute
{}

class LoginRequest
{
    #[NotBlank]
    public ?string $username;

    #[NotBlank]
    public ?string $password;
}

function validate(object $object): void
{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();

    foreach ($properties as $property) {
        validateNotBlank($property, $object);
    }
}

function validateNotBlank(ReflectionProperty $property, object $object): void
{
    $attributes = $property->getAttributes(NotBlank::class); // Simpan hasil getAttributes

    if (count($attributes) > 0) {
        if (!$property->isInitialized($object)) {
            throw new Exception("Property '" . $property->getName() . "' is not initialized (null).");
        }

        $value = $property->getValue($object);
        if ($value === null || $value === '') { // Perbaikan pengecekan nilai kosong
            throw new Exception("Property '" . $property->getName() . "' cannot be null or empty.");
        }
    }
}

// Contoh penggunaan:
$request = new LoginRequest();
$request->username = "faizal";
$request->password = null;
validate($request);
