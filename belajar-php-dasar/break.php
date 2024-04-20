<?php
$counter = 1;

while (true) {
    echo "counte ke-$counter" . PHP_EOL;
    $counter++;
    if ($counter >= 10) {
        break;
    }
}
