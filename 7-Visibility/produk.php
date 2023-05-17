<?php  

//jualan produk
//Komik
//Game

class Produk{
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    //membuat method/ function yang ada didalam class;
    public function getLabel(){
        //lingkup variabel diluar method berbeda dengan didalam biasanya mengunakan keyword global di pemlajaran variable global PHP dasar kalau didalam OOP memanggil property kedalam method menggunakan $this->apa?
        return "$this->penulis, $this->penerbit";
    }
}
//membuat object dimana instace new
// $produk1 = new Produk();
//panggil object -> nama property = valuenya 
// $produk1 ->judul = "Naruto"; 
// var_dump($produk1); 
 
// $produk2 = new Produk(); 
// $produk2 ->judul = "Uncharted"; 
//menambahkan property yang belum ada
//hati" jika tujuannya menimpa property namanya harus sama
//visibility penting "public" agar tidak sembarang menambah dan mengubah property yang ada
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

 //Object Komik
$produk3 = new Produk();
$produk3 -> judul   = "Naruto";
$produk3 -> penulis = "Masashi Khisimoto";
$produk3 -> penerbit = "Shonen Jump";
$produk3 -> harga = 30000;
//var_dump($produk3);
//membuat label
 //echo "Komik : $produk3->penulis, $produk3->penerbit";
//echo "<br>";
//cara panggil method
//echo $produk3->getLabel();

//Object Game
$produk4 = new Produk();
$produk4 -> judul   = "Uncharted";
$produk4 -> penulis = "Neil Druckmann";
$produk4 -> penerbit = "Sony Computer";
$produk4 -> harga = 250000;

echo "Komik :" . $produk3->getLabel();
echo "<br>";
echo "Game  :" . $produk4->getLabel();
