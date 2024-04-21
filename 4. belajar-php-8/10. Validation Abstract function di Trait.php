<?php

/**
 * di PHP 8 sekarang terdapat validasi ketika kite mengimplementasikan absract fucntion di class dari trait
 * di PHP 7 saat kita mengubah properti seperti parameter dan retun valuenya, hal itu dika menjadi masalah
 * namun PHP 8 jika kita menguah implementasinya dari absract function nya maka otomatis error
 * https://wiki.php.net/rfc/abstract_trait_method_validation
 */

trait SampleTrait
{
    public abstract function sampleFunction(string $name): string;
}

class SampleTraitImpl
{
    use SampleTrait;
    function sampleFunction(string $name): string
    {
        return "Hello" . PHP_EOL;
    }
}

/**
 ** Validation di function Overriding
 * Sebelumnya kita atahu bahwa melakukan overrifing dengan mengubah signature function hanya akan menimbulkan warning
 * di PHP 8 hal tersebut sekarang akan menimbulkan error
 * sehingga kita tidak bisa lagi mengubah signature dari function yang kita override, seperti mengubah argument atau sebuah return value 
 * https://wiki.php.net/rfc/lsp_errors 
 */
