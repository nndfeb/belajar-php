<?php
$valueString = (string)100;
$valueInt = (int)"200";
$valueFloat = (float)"300.10";

var_dump($valueString);
var_dump($valueInt);
var_dump($valueFloat);

$names = "eko";
$names[0] = "O";

var_dump($names);

// Variable parsing
$data = "Eko";
echo "Hallo $data selamat belajar" . PHP_EOL;

$var = "nedi";
echo "hallo {$var}s ";
