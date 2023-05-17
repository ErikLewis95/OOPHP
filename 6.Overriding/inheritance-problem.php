<?php  
// membuat class
class Produk{
    //membuat property
    public $judul , 
           $penulis ,
           $penerbit ,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;
    
           //membuat constuctor kenapa pake "__" karena merupakan magic method yang dimiliki oleh PHP
           //"judul", "penulis", "penerbit", "harga" merupakan nilai default
    public function __construct( $judul= "judul", $penulis= "penulis", $penerbit= "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe ){

        //this masukknya ke propertu sedangkan -> masukknya ke parmeter
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;

        
    }       
    
    //membuat method/function yang ada didalam class;
    public function getLabel(){
        //lingkup variabel diluar method berbeda dengan didalam biasanya mengunakan keyword global di pemlajaran variable global PHP dasar kalau didalam OOP memanggil property kedalam method menggunakan $this->apa?
        return "$this->penulis, $this->penerbit";
    }



    public function getInfoLengkap(){
//Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

//untuk menampilkan jmlHalaman dan waktuMain jika tipe berbeda kalau dibuat $str akan mencetak nilai keduanya sekaligi halaman 100 waktu main =50
        if($this->tipe == "Komik"){
            //gabungkan dengan str concate
            $str .= " - {$this->jmlHalaman} Halaman.";
        }else if($this->tipe == "Game"){
            $str .= " ~ {$this->waktuMain} Jam.";
        }
        return $str;
    }
}

//method khusus mencetak info;
class CetakInfoProduk{
    //inputan parameter/object $produk, agar fungsi cetak menerima secara spesific class produk tinggal tambahkan typenya
    public function cetak(Produk $produk ){
        //pake kurung kurawal/curly bracket agar tidak repo" menggabungkan string.
        //$produk->getLabel() = menampilkan penulis dan penerbit
        $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
        return $str;
    }

}


 //Object Komik
 //parameter baru akan dikirim ke method construct
 //untuk membuat propety baru dimana komik punya property jmlHalaman dan Game WaktuMain; problemnya adalah : propety yang lain punya nama yang sama sementara property yang baru berbeda, tidak ada property yang dapat membedakan keduanya mau tidak mau harus ditambahkan keduanya ke dalam class Produk agar dapat mengenaili jmlHalaman dan waktuMain untuk masing" object atau instace untuk mempermudahnya ditambahkan tipe nya agar dapat membedakan property apa untuk object apa 
 
 //produk1 komik jmlHalaman = 100 dan waktuMain=0
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");


//var_dump($produk1);

//Object Game
 //produk2 Game jmlHalaman = 0 dan waktuMain=50
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0 , 50, "Game");


echo $produk1->getInfoLengkap();
echo"<br>";
echo $produk2->getInfoLengkap();


//ini baru 2 tipe yang berbeda coba bayangkan kalau ada tipe lain dan bagaimana kalau perilaku lain yang berbeda tentu merepotkan jika ingin menambahkan poperty, parameter dan membuat kondisi lagi maka gunakan solusi inheritance