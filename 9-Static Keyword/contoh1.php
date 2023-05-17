<?php 

//Class
class Mobil{
    //property
    //public semua kelas dapat mengakses
    public $nama,
           $merek,
           $warna,
           $kecepatanMaksimal,
           $jumlahPenumpang;
    //private hanya dalam class Mobil
    private $harga;
    //protected bisa diakeses oleh class parent dan turunannya/child
    protected $diskon;

    //method
    public function tambahKecepatan(){
        
    }
    public function kurangiKecepatan(){

    }
    public function gantiKecepatan(){

    }
}

//objek yang namanya avanza di instanciacy  oleh class Mobil "new"
$avanza = new Mobil();

