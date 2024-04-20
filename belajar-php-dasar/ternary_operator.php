<?php

$gender = "PRIA";
$hi = null;

if ($gender == "PRIA") {
    $hi = "Hi Broo!";
} else {
    $hi = "Hi Nona!";
}

echo $hi . PHP_EOL;

// Jika menggunakan ternary operator
$hi = $gender == "PRIA" ? "Hi Broo!" : "Hi Nona!";
echo $hi . PHP_EOL;
