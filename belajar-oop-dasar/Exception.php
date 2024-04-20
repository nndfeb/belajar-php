<?php
require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "Helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "  ";
$loginRequest->password = "  ";
// $loginRequest->username = "Nendi";
// $loginRequest->password = "password";
// $loginRequest->password = "";


// try {
//     validationLoginRequest($loginRequest);
// } catch (ValidationException $exception) {
//     echo "Validation error : {$exception->getMessage()}" . PHP_EOL;
// } catch (Exception $exception) {
//     echo "error salah!! : {$exception->getMessage()}" . PHP_EOL;
// }


// Atau bisa speri ini
try {
    validationLoginRequest($loginRequest);
    echo 'Valid' . PHP_EOL;
} catch (\Throwable | ValidationException $exception) {
    echo "error salah!! : {$exception->getMessage()}" . PHP_EOL;
    var_dump($exception->getTrace());
    // echo $exception->getTraceAsString();
} finally {
    echo "Error atau tidak ini di jalankan";
}
