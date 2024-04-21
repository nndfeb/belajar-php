<?php

/**
 * https://wiki.php.net/rfc/class_name_literal_on_object
 */

class Login
{
}

$login = new Login();

var_dump($login::class);
var_dump(get_class($login));
var_dump(Login::class);
