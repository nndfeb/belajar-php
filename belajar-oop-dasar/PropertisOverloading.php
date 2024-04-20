<?php
class Zero
{
    private array $properties = [];
    public string $firstName = "NEndi";

    // Jika ditambahkan ini tidak akan error
    public function __get($name)
    {
        echo "Access properti $name" . PHP_EOL;
        return "Contoh!";
    }

    function __set($name, $value)
    {
        echo "Set Properti $name with value $value " . PHP_EOL;
    }

    function __call($name, $arguments)
    {
        $join  = join(",", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join  = join(",", $arguments);
        echo "Call static function $name with arguments $join" . PHP_EOL;
    }
}

$zero = new Zero();
echo $zero->firstName . PHP_EOL;
echo $zero->middleName . PHP_EOL; // dikannakan properti middleName tidak ada jadi otomatis menjalankan methode __get()
echo $zero->middleName = "Eko" . PHP_EOL; // dikannakan properti middleName tidak ada jadi otomatis menjalankan methode __set()
// Call methode yg tidak ada maka akan otomatis menjalankan metode __call()
$zero->sayHello('Eko', 'Khandey');
