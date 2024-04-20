<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("nendi");


function sayGoodBye(string $name, $filter)
{
    $final_name = $filter($name);
    echo "Goodbye $final_name " . PHP_EOL;
}


sayGoodBye("Eko", function (string $name): string {
    return strtoupper($name);
});
?>

<?php

$first_name = "Eko";
$last_name = "kurniawan";
$sayHelloEko = function () use ($first_name, $last_name) {
    echo "Hello $first_name, $last_name" . PHP_EOL;
};
$sayHelloEko();
