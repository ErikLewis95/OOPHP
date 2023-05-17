<?php  
// membuat parent class

use Produk as GlobalProduk;

abstract class Produk{
    //membuat property dengan visibility
    //private hanya bisa diakses didalam class
    private $judul , 
            $penulis ,
            $penerbit,
            $diskon=0,// diskon dibuat private karna agar mempermudah membuar diskon di masing Komik atau Game tinggal buat method setter-geter didalam class;
            $harga;

    //membuat magic method "__" 
    public function __construct( $judul= "judul", $penulis= "penulis", $penerbit= "penerbit", $harga = 0 ){

        //this masukknya ke property sedangkan -> apa? masukknya ke parmeter construct
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
    }  
    

    //setter-geter Judul
    public function setJudul($judul){
        // if(!is_string($judul)){
        //     throw new Exception("Judul harus string");
        // } //memumngkin membuat validasi jika tidak string jalankan error jika sting udah judul
        $this->judul = $judul;
    }
    public function getJudul(){//getter method ->menampilkan value pada property objek
        return $this->judul;
    }
    

    //setter-getter Penulis
    public function setPenulis( $penulis ){
        $this->penulis = $penulis;
    }
    public function getPenulis(){
        return $this->penulis;
    }
    
    //setter-getter Penerbit
    public function setPenerbit ( $Penerbit ){
        $this->penerbit;
    }
    public function getPenerbit(){
        return $this->penerbit;
    }
    

    //setter-getter Diskon
    public function setDiskon( $diskon ){
        $this->diskon = $diskon;
    }
    public function getDiskon($diskon){
        return $this->diskon;
    }

  

    //sette-getter Harga
    public function setHarga( $harga ){
       $this->harga =  $harga;
    }
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);//contoh penggunan property private
    }


    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    //method abstrack tidak boleh punya implementasi{}, hanya interfacenya aja 
    abstract public function getInfoProduk();//method abstrak dilakukan karena disetiap class childnya dilakukan pemanggilan terhadap method getinfoproduk()

    //buat method baru hasil implentasi dasi method abstrak dan methodnya bukan lah abstrak
    public function getInfo(){
        $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        return $str;
    }  
}

//membuat class child 
//extends artinya class komik kita perbolehkan untuk menggunakan semua method dan property dari class parentnya yakni class produk.
class Komik extends Produk{
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

}

//child class
class Game extends Produk{
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
}


//method khusus mencetak info;
class CetakInfoProduk{
    public $daftarProduk = array();//array kosong yang digunakan untuk menyimpan produk" yang akan dicetaksekaligus 

    //method menambahkan produk kedalam array. 
    //(Produk $produk) $produk merupakan parameter inputan yang akan mencetak data satupersatu kedalam class Produk.
    public function tambahProduk(Produk $produk){
       //cara menambahkan element baru pada array parameter $produk merupakan property yang akan di tambah valuenya
        $this->daftarProduk[] = $produk;
    }
       
    public function cetak( ){
        $str = "DAFTAR PRODUK : <br>";

        //looping ke array $daftarProduk dari daftarProduk kita ambil objeknya satu persatu $p
        foreach($this->daftarProduk as $p){
            //membangun string concat str dengan getInfoProduk()
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;

    }

}



//object yang di instansiasi ke class child Komik dan Game
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);


//instansisasi CetakInfoProduk
$cetakProduk = new CetakInfoProduk();

//tambahkan produknya dengan jalankan fungsi tanbahProduk(objek produk1)
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();