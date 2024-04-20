<?php

require_once 'Helper/Input.php';
require_once 'Services/RemoveTodoList.php';

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO :" . PHP_EOL;
    $pilihan = input('nomor (x unutk batal)');
    if ($pilihan == "x") {
        echo "Bata menghapus Todo " . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);
        if ($success) {
            echo "Sukes menghapus todo nomor $pilihan " . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan " . PHP_EOL;
        }
    }
}
