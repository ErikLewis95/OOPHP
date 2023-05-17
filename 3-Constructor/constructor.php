<?php  
// membuat class
class Produk{
    //membuat property
    public $judul , 
           $penulis ,
           $penerbit ,
           $harga;
    
           //membuat constuctor kenapa pake "__" karena merupakan magic method yang dimiliki oleh PHP
           //"judul", "penulis", "penerbit", "harga" merupakan nilai default
    public function __construct( $judul= "judul", $penulis= "penulis", $penerbit= "penerbit", $harga = 0){
        // hasil dilayar hello world akan dicetak 2 kali karena objectnya kita instanciacy 2 kali
        //echo "hello, world!";

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;


        
    }       
    
    //membuat method/function yang ada didalam class;
    public function getLabel(){
        //lingkup variabel diluar method berbeda dengan didalam biasanya mengunakan keyword global di pemlajaran variable global PHP dasar kalau didalam OOP memanggil property kedalam method menggunakan $this->apa?
        return "$this->penulis, $this->penerbit";
    }
}

 //Object Komik
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);


//var_dump($produk1);

//Object Game
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
$produk3 = new Produk("Super Mario");

echo "Komik :" . $produk1->getLabel();
echo "<br>";
echo "Game  :" . $produk2->getLabel();
echo "<br>";
var_dump($produk3);
echo "<br>";
echo "Game  :" . $produk3->getLabel();

//construcor method adalah methode khusus yang dijalankan ketika kita membuat instance dari sebuah class.
//constructor method biasanya dipakai ketika koneksi ke database.
