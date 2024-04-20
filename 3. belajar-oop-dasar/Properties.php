<?php
require_once "data/Person.php";

$person = new Person();
$person2 = new Person();

$person->name = "Eko";
$person->address = "Karawang";

$person2->name = "Budi";
$person2->address = "Bekasi";

var_dump($person);
var_dump($person2);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

// Error
// $person2->name = [];
