<?php
$dateTime = new DateTime();
$dateTime->setDate(1996, 2, 8);
$dateTime->setTime(12, 12, 18);


$dateTime->add(new DateInterval("P1Y")); // Menambah 1 Tahun

$minusOneMonth = new DateInterval("P1M"); //Mengurangi 1 Bulan
$minusOneMonth->invert = true; // mengurangi bernila true
$dateTime->add($minusOneMonth);

var_dump($dateTime);

// Set TimeZone
$now = new DateTime();
$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);

$string = $now->format("Y-m-d H:i:s");
echo "Waktu saat ini : $string " . PHP_EOL;

// Seting format sesuai timezone yang kita inginkan
$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-08 10:10:10", new DateTimeZone("Asia/Jakarta"));
if ($date) {
    # code...
    var_dump($date);
} else {
    echo "Format salah!" . PHP_EOL;
}
