<?php


function validationLoginRequest(LoginRequest $request)
{
    if (!isset($request->username)) {
        throw new ValidationException("Username is Null");
    } else if (!isset($request->password)) {
        throw new ValidationException("Password is Null");
    } else if (trim($request->username) == "") {
        throw new Exception("Username is Empty", 1);
    } else if (trim($request->password) == "") {
        throw new Exception("Password is Empty", 1);
    }
}
