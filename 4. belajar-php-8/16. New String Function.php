<?php


/**
 * Function untuk memanipulasi string
 * https://wiki.php.net/rfc/str_contains
 * https://wiki.php.net/rfc/add_str_starts_with_and_ends_with_functions  
 */


var_dump(str_contains("abc", "a")); // true
var_dump(str_contains("abc", "d")); // false

// $needle is an empty string
var_dump(str_contains("abc", ""));  // true
var_dump(str_contains("", ""));     // true

var_dump(str_starts_with("Eko kurniawan", "eko")); // false
var_dump(str_starts_with("Eko kurniawan", "Eko")); // true

var_dump(str_ends_with("Eko kurniawan", "kurniawan")); // true
var_dump(str_ends_with("Eko kurniawan", "Kurniawan")); // false
 