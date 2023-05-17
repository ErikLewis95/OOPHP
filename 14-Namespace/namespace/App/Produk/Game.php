<?php  namespace App\Produk;
//child class
//class Game mewarisi semua method dan property class Product dan juga mengimplementasikan interface InfoProduk
class Game extends Produk implements InfoProduk{
    public $waktuMain;

    public function __construct($judul= "judul", $penulis= "penulis",           $penerbit= "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga );
        $this->waktuMain= $waktuMain;
    }

    //kalau paret::getinfoProduk dia mengambil method abstrak yang tdk punya implementasi
    public function getInfoProduk(){
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }

     public function getInfo(){
        $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        return $str;
    } 
}
