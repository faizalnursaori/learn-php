<?php

class Address
{
    public ?string $country;
}

class User
{
    public Address $address;
}

//Menggunakan if statement

// function getCountry(?User $user): ?string
// {
//     if ($user != null) {
//         if ($user->address != null) {
//             return $user->address->country;
//         }
//     }
//     return null;
// }

//Menggunaka null safe operator

function getCountry(?User $user): ?string
{
    return $user?->address?->country;
}

echo getCountry(null) . PHP_EOL;
