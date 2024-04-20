<?php
$names = ['eko', 'kurinaiwan', 'kendey'];

for ($i = 0; $i < count($names); $i++) {
    echo "Hello $names[$i] " . PHP_EOL;
}


foreach ($names as $name) {
    echo "Hello $name" . PHP_EOL;
}
