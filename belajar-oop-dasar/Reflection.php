<?php
require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "Helper/ValidationUtil.php";

$request = new LoginRequest();

$request->username = "Eko";
$request->password = "sandi";
// $request->username = null;
// $request->password = null;
// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);


class RegisterUserRequest
{
    public ?string $username;
    public ?string $email;
    public ?string $password;
    public ?string $address;
}

$reqgister = new RegisterUserRequest();
$reqgister->username = "eko";
$reqgister->email = "eko@gmail.com";
$reqgister->password = "sandi";
$reqgister->address = null;

ValidationUtil::validateReflection($reqgister);
