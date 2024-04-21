<?php

/**
 * Match Expresion adalah struktur control yang mirip dengan switch case, namun lebih baik
 * Mathc adalah expresion, artinya akan mengembalikan value
 * https://wiki.php.net/rfc/match_expression_v2
 * https://www.php.net/manual/en/control-structures.match.php
 */


//  Switch Case
$value = "A";
$result = "";
switch ($value) {
    case "A":
    case "B":
    case "C":
        $result = "Anda Lulus";
        break;
    case "D":
        $result = "Anda tidak Lulus";
        break;
    case "E":
        $result = "Anda salah jurusan!";
        break;

    default:
        $result = "Apa itu?";
        break;
}

echo $result . PHP_EOL;


// With Match Expresion
$nilai = "E";
$nilaiAkhir = match ($nilai) {
    "A", "B", "C" => "Anda Lulus",
    "D" => "Anda Tidak Lulus",
    "E" => "Anda Salah Jurusan!",
    default => "Nilai apa itu?"
};
echo $nilaiAkhir . PHP_EOL;

// Example 2
$data = 80;
$res = match (true) {
    $data > 80 => "A",
    $data > 70 => "B",
    $data > 60 => "C",
    $data > 50 => "D",
    default => "E",
};
echo $res . PHP_EOL;


// Example 3
$name = "Mr. Nendi";
$output = match (true) {
    str_contains($name, "Mr.") => "Hello Sir",
    str_contains($name, "Mrs.") => "Hello Mam",
    default => "Hello"
};
echo $output . PHP_EOL;
