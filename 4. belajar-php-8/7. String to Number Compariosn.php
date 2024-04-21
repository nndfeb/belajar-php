<?php

/**
 * https://wiki.php.net/rfc/string_to_number_comparison
 */

var_dump(0 == "0"); // true
var_dump(0 == "0.0"); // true
var_dump(0 == "foo"); // flase
var_dump(0 == ""); // false
var_dump(42 == "   42"); // true
var_dump(42 == "42foo"); // false
