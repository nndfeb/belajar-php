<?php

class Foo
{
    static public function test()
    {
        var_dump(get_called_class());
    }
}

class Bar extends Foo
{
}

// Cara memanggil nama classnya
Foo::test();
Bar::test();
