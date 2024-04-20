<?php
// Jika file tidak ada akan error
// require "lib/myFunction.php";

// hanya sekali file ini di load
require_once "lib/myFunction.php";
// include_once "lib/myFunction.php";

// Jika file tidak ada haya akan warning tapi program akan dijalankan
// require "lib/tidakada.php";

echo sayHello("Eko", "Kurniawan");
