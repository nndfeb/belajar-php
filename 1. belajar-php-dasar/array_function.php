<?php
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];


// Array map merubah data menjadi data array baru sesaui function
// $map_function = fn (int $value) => $value * 10;
// $data_result = array_map($map_function, $data);

$data_result = array_map(fn (int $value) => $value * 10, $data);
var_dump($data_result);

// membuat sort desc
rsort($data);
var_dump($data);

// mengabil key / index nya aja
var_dump(array_keys($data));

// mengabil value nya aja
var_dump(array_values($data));
