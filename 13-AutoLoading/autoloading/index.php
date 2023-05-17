<?php  
require_once 'App/init.php';
//object yang di instansiasi ke class child Komik dan Game
 $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

 $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);


//instansisasi CetakInfoProduk
 $cetakProduk = new CetakInfoProduk();

// tambahkan produknya dengan jalankan fungsi tanbahProduk(objek produk1)
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

//bisa melakukan instancyacy class produk kalau ini dijalankan tdk akan error
//padahal kita tidak pengen produk itu bisa di intansiasi karena sifatnya abstract kalau ditambahkan object baru, maka aobject tsbt apakah termasuk Komik atau Game???.
// $tes = new Produk();

echo "<hr>";

new Coba();