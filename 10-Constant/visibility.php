<?php  
// membuat class
class Produk{
    //membuat property
    public $judul , 
           $penulis ,
           $penerbit;
           
         protected $diskon=0;//bisa diakses oleh class sendiri dan turunannya
           
            private $harga;//contoh visibility lebih sempit hanya bisa diakses oleh class sendiri  contoh: getHarga()


    public function __construct( $judul= "judul", $penulis= "penulis", $penerbit= "penerbit", $harga = 0 ){

        //this masukknya ke property sedangkan -> apa? masukknya ke parmeter construct
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
    }  
    

    public function getLabel(){
   
        return "$this->penulis, $this->penerbit";
    }


    public function getInfoProduk(){
        $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }


    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);//contoh penggunan property private
    }
}

//extends artinya sudah membuat child class, artinya class komik kita perbolehkan untuk menggunakan semua method dan property dari class parentnya yakni class produk.
class Komik extends Produk{
    public $jmlHalaman;

    public function __construct($judul= "judul", $penulis= "penulis", $penerbit= "penerbit", $harga = 0, $jmlHalaman = 0){

        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman; 

    }


    public function getInfoProduk(){
        
        $str = "Komik :  " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";

        return $str;

    }

}

class Game extends Produk{
    
    public $waktuMain;

    public function __construct($judul= "judul", $penulis= "penulis",           $penerbit= "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga );

        $this->waktuMain= $waktuMain;
    }

    public function setDiskon( $diskon ){
        return $this->diskon = $diskon;
    }//penggunaan property protected diskon hanya dikasi untuk produk Game

  

    public function getInfoProduk(){
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}


//method khusus mencetak info;
class CetakInfoProduk{
    //inputan parameter/object $produk, agar fungsi cetak menerima secara spesific class produk tinggal tambahkan typenya
    public function cetak(Produk $produk ){
        $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
        return $str;

    }

}

//object 
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);


echo $produk1->getInfoProduk();
echo"<br>";
echo $produk2->getInfoProduk();
echo"<hr>";

//$produk2->harga=5000;//dipaksa tampil dilayar 5000 seharusnya 250000
//dengan visibility public kita bisa mengubah property//bahayanya adalah jgn biarkan sesuatu diluar kelas memodifikasi isi dari property.
//untuk mengubah ubah visibilitynya untuk property harga menjadi protected.
//tapi yang jadi problem adalah kita tidak bisa mengakses harganya karna dilindungi, yang punya akses ke dalam property $harga hanya classnya aja beserta turunannya/child classnya class Komik dan class Game

// $produk2->diskon = 90; //dipaksa agar diskonnya jadi 90 ubah visibility menjadi protected;
$produk2->setDiskon(50);
//Error setDiskon hanya ada di  class Game di Komik tdk ada
// $produk1->setDiskon(50);
echo $produk2->getHarga();
//kalau diubah menjadi visibilitynya lebih sempit lagi menjadi private maka hak aksesnya hanya bisa diakses oleh class itu sendiri, oleh sebab itu buat method/fungtionnya ke dalam class Produk