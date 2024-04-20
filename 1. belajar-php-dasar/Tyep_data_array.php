<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$values[] = "Kuyha";
var_dump($values);

echo count($values);
?>

<?php
$names = ["eko", "Kurniawan", "Jeje"];

$names[0] = "Nendi";

var_dump($names);

unset($names[1]);
var_dump($names);

?>

<?php

$eko = array(
    "id" => "eko",
    "name" => "eko kurniawan",
    "age" => 30,
);

$budi = array(
    "id" => "budi",
    "name" => "budi nugraha",
    "age" => 35,
);

var_dump($eko["name"]);

?>

<?php

$nendi = [
    "id" => "nendi",
    "name" => "nendi kurniawan",
    "age" => 30,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indoensia",
    ]
];

var_dump($nendi);
