<?php

class SocialMedia
{
    public string $name;
}

// final class tidak bisa diturunkan lagi
// final class Facebook extends SocialMedia
// {
// }

class Facebook extends SocialMedia
{

    // final function login(string $username, string $password): bool
    // {
    //     return True;
    // }
    function login(string $username, string $password): bool
    {
        return True;
    }
}

// Error
// class FakeFacebook extends Facebook
// {
// }


class FakeFacebook extends Facebook
{
    function login(string $username, string $password): bool
    {
        return True;
    }
}
