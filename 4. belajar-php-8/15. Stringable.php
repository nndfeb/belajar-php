<?php

/**
 * di PHP 8 sekarang diperkenalkan interface baru bernama Stringable
 * Jika kita melakukan override madic function __toString, maka secara otomatis class kita akan implement interface Stringable
 * https://wiki.php.net/rfc/stringable
 */


function sayHello(Stringable $stringable): void
{
    echo "Hello {$stringable->__toString()}" . PHP_EOL;
}

class Person
{
    function __toString(): string
    {
        return "Person";
    }
}


sayHello(new Person());
