<?php

/**
 * PHP8 memiliki nullsafe operator seprti di bhasa prmprograman Kotlin ayau Typescript
 * Bisanya kita ingin mengakses suatu dari sebuah object yang bisa memungkina nilai null,
 * maka kita akan melakukan pengecekan apakah object tersebut null atau tidak, jika tidak baru kita akses object tersebut
 * Dengan nullsafe operator, kita tidak perlau melakukan itu, kita hanya perlu menggunakan karakter ? (tanda tanya) secara otomatis  PHP akan melakukan pengecekan null tersebut
 * 
 * https://wiki.php.net/rfc/nullsafe_operator
 */

class Address
{
    public ?string $country;
}
class User
{
    public ?Address $address;
}

// Without nullsafe operator
function getCountry(?User $user): ?string
{
    if ($user != null) {
        if ($user->address->country != null) {
            return $user->address->country;
        }
    }
    return null;
}

echo getCountry(null) . PHP_EOL;


// With Nullsafe Operator
function getCountryWithNullsafe(?User $user): ?string
{
    return $user?->address?->country;
}
echo getCountryWithNullsafe(null) . PHP_EOL;
