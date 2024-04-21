<?php

/**
 * Saat kita membuat function dan ketika kita mengirim argument dengan tipe data yang salah, maka akan berakibat TypeError
 * sayangnya di PHP banyak function bawaan yang tidak mengembalikan TypeError, malah memberi warning
 * Agar konsisten sekarang PHP 8 banyak functon bawaan yang akan error TypeError jika kita salah mengirim type data
 *  
 * https://wiki.php.net/rfc/consistent_type_errors
 */


//  Example 1
function foo(int $tye)
{
}
echo foo("Hello"); // TypeError

// Example 2
// strlen([]);
