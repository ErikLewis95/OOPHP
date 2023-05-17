<?php  
// membuat parent class
abstract class Produk{
    //membuat property dengan visibility
    //private hanya bisa diakses didalam class
    protected $judul , 
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

    //class abstract minimal punya 1 method abstract;
    //method abstrack tidak boleh punya implementasi{}, hanya interfacenya aja 
   //method abstrak dilakukan karena disetiap class childnya dilakukan pemanggilan terhadap method getinfoproduk()

    //buat method baru hasil implentasi dasi method abstrak dan methodnya bukan lah abstrak

    abstract public function getInfo();
     
}
