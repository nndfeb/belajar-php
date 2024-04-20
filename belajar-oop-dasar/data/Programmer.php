<?php

// Parent
class Programmer
{
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

// Child
class BackendProgrammer extends Programmer
{
}


// Child
class FrontendProgrammer extends Programmer
{
}


class Company
{
    public Programmer $programmer;
}
