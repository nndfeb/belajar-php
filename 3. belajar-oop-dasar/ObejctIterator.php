<?php
class Data implements IteratorAggregate
{
    var string $var = "properti var";
    public string $public = "properti public";
    protected string $protected = "properti protected";
    private string $private = "properti private";

    public function getIterator(): Traversable
    {
        $array = [
            "var" => "properti var",
            "public" => "properti public",
            "protected" => "properti protected",
            "private" => "properti private",
        ];

        return new ArrayIterator($array);
    }
}

$data = new Data();

foreach ($data as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
