
<?php
require_once "Helper/MathHelper.php";

use Helper\MathHelper;

$mathHelper = new MathHelper();
// echo $this->mathHepe->name . PHP_EOL; //error
echo MathHelper::$name . PHP_EOL; //Hasus seprti ini karna properti static

// Merubah isi properti
MathHelper::$name = "Nendi";
echo MathHelper::$name . PHP_EOL;

// Memanggil static function
$result = MathHelper::sum(10, 20, 30, 40);
echo "Result  $result" . PHP_EOL;
