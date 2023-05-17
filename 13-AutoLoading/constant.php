<?php 
//variable yang tidak berubah
// define ("NAMA", "Erik Lewis" );
// echo NAMA;

// echo "<br>";

// const UMUR = 27;
// echo UMUR;
namespace Enemy; // membuat namespace harus paling atas sebelum tag php
//penggunaan dalam konsep OOP define tdk bisa digunkan kedalam sebuah class
//sedangkan const bisa digunakan ke dalam class

class Coba{
    //  define("NAMA", "Erik Lewis");

    const NAMA ="Erik";
}

echo "Ini adalah value Const : ". Coba::NAMA;

echo "<br><br>";


// membuat trait
trait Makhluk {
    function printTrait() {
        echo "Nama Trait adalah: ".__TRAIT__;
    }
}

class ManusiaSerigala {

    use Makhluk;

}

// membuat objek
$aku = new ManusiaSerigala();
$aku->printTrait();

echo "<h1>Magic Variable<h1>";
echo "<br>";
echo "<h3>Ini baris ke :<h3>";
echo __LINE__; //posisi constant line ini sekarang yakni 24
echo "<hr>";
echo "<h3> File ini berada di :<h3>";
echo __FILE__; //menampilkan alamat file yang bersangkutan
echo "<hr>";
echo "<h3>File ini berada di Directory :<h3>";
echo __DIR__;
echo "<hr>";
echo "<h3>Nama Fungsi ini adalah :<h3>";
function coba(){
    return __FUNCTION__;
}
echo coba();
echo "<hr>";
echo "<h3>Nama class adalah :<h3>";
class IPA5{
    public $kelas=__CLASS__;
}
$obj = new IPA5;
echo $obj->kelas;
echo "<hr>";
class Kelas {

    function lari(){
        echo "ini adalah method: ".__METHOD__."<br>";
    }

    function lompat(){
        echo "ini adalah method: ".__METHOD__."<br>";
    }
}

// membuat objek
$aku = new Kelas();
$aku->lari();
$aku->lompat();


echo "<hr>";

class OOPHP {

    function printNamaNamespace(){
        echo "Nama namespace adalah: ".__NAMESPACE__;
    }
}

// membuat objek
$aku = new OOPHP();
$aku->printNamaNamespace();

