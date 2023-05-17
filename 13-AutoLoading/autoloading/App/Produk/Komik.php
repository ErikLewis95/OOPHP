<?php  
//membuat class child 
//extends artinya class komik kita perbolehkan untuk menggunakan semua method dan property dari class parentnya yakni class produk.
class Komik extends Produk implements InfoProduk{
    public $jmlHalaman;

    public function __construct($judul= "judul", $penulis= "penulis", $penerbit= "penerbit", $harga = 0, $jmlHalaman = 0){

        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman; 

    }

    //pemanggilan parent getInfoProduk tdk lagi menggunakan syntax parent::getInfoproduk() karena itu hanya interface
    public function getInfoProduk(){
        
        $str = "Komik :  " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";

        return $str;

    }

    public function getInfo(){
        $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        return $str;
    } 
}
