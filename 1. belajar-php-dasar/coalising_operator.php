<?php
// tanpa coalising operator
$data = [
    "act" => null
];

if (isset($data['act'])) {
    $act = $data['act'];
} else {
    $act = "nothing!";
}

echo $act;

// Solusi coalising operator
$action = $data['act'] ?? 'Nothing!';
echo $action;
