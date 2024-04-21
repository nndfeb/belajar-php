<?php

/**
 * di PHP 7 saat kita membuat fucntion tetapu ternyata di parent nya terdapat fucntion dengan nama yang sama, walapun private hal itu dianggap Overriding
 * Pdahal sudah jelas bahwa private function tidak bisa diakses oleh turunannya
 * di PHP 8 sekarang private function tidak ada hubungannya lagi dengan child class nya, sehingga kita bisa bebas membuat function dengan nama yang sama walaupun di parent ada function private dengan nama yang sama
 * https://wiki.php.net/rfc/inheritance_private_methods
 * 
 */

//  Example 1
class Manager
{
    private function test(): void
    {
    }
}

class VicePresident extends Manager
{
    function test(string $name): string
    {
        return "Hello";
    }
}
