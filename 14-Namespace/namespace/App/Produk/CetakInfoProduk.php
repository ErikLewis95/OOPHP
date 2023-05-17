<?php  namespace App\Produk;
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