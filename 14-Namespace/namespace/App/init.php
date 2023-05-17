<?php  
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';


// require_once 'Service/User.php';



//standard php library(spl)
//menggunakan closure fungsi tanpa nama

spl_autoload_register(function($class){
    //explode adalah fungsi pemecah string berdasarkan pemisah tertentu
    // tanda pemecah \ backslash disangka escape character jadi harus '\\'
    // App\Produk\User = ["App", "Produk", "User"]
    //contoh lain App\Produk\Game = ["App", "Produk", "Game"]
    // kalau gk ada name space : Komik  = ["Komik]
    $class = explode ('\\', $class);
    //Ambil Usernya aja yang tadi class itu array[], User adalah nama Class yang pasti berada di akhir arraynya end().
    $class = end($class);
    require_once __DIR__ . '/Produk/' . $class . '.php';

});

spl_autoload_register(function($class){
    // App\Service\User = ["App", "Service", "User"]
    $class = explode ('\\', $class);
    $class = end($class);

    require_once __DIR__ . '/Service/' . $class . '.php';

});