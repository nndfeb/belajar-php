<?php

/**
 * Trow adalah sebuah statemnt
 * Hal ini menyebabkan kadang kita kesulitan menggunakna throw di beberapa tempat yang membutuhkan expression seperti ternary operator misalnya,
 * di PHP 8 sekarang throw adalah sebuah expresion artinya dia memiliki ninai dan sekarang kita bisa gunkana di tempat-tempat yang memang membutuhkan expresion, sperti ternary operator
 * https://wiki.php.net/rfc/throw_expression
 */


//  Example 1
$name = "eko";
$result = $name == "eko" ? 'sukses' : throw new Exception('Ups!');

function validate(?string $name)
{
    $result = $name ?? throw new Exception("Null");
    echo "Hello $result" . PHP_EOL;
}


validate("Nei");
