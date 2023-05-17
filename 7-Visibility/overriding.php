 <!-- Over memanggil nama fungsion yang sama didalam 1 class yang sama tapi fungsion yang dimaksud adalah method/function yang ada didalam parentnya produk,hal ini dilakukan agar tidak terjadi redundant, maka menggunakan overriding/menimpa -->

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
    public function __construct( $judul= "judul", $penulis= "penulis", $penerbit= "penerbit", $harga = 0 ){

        //this masukknya ke property sedangkan -> masukknya ke parmeter construc
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



    public function getInfoProduk(){
        $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
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
//tidak membutuhkan $this->tipe karena pasti tahu tipenya dari nama class
//$this->judul, $this->getLabel() dicari terlebih dahulu apakah ada di class Komik Jika tidak ada maka cari di class Produk
//". ." menggabungkan string /concatination
$str = "Komik :  " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
return $str;
    }
}

class Game extends Produk{
    
    public $waktuMain;

    public function __construct($judul= "judul", $penulis= "penulis", $penerbit= "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga );

        $this->waktuMain= $waktuMain;
    }

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


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);


//Object Game
 //produk2 Game jmlHalaman = 0 dan waktuMain=50
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);


echo $produk1->getInfoProduk();
echo"<br>";
echo $produk2->getInfoProduk();


//ini baru 2 tipe yang berbeda coba bayangkan kalau ada tipe lain dan bagaimana kalau perilaku lain yang berbeda tentu merepotkan jika ingin menambahkan poperty, parameter dan membuat kondisi lagi maka gunakan solusi inheritance