<?php  

// class ContohStatic{
//     public static $angka = 1;

//     public static function hallo(){
//         //biasnya mengakses property dengan object instancyacy biasa menggunakan $this->angka tapi dengan static keyword tidak berlaku harus menggunakan self::$angka; 
//         return "Hallo " . self::$angka++ . " kali.";
//     }
// }
// //melakukan instancyacy
// $obj = new  contohStatic();

// //tanpa melakukan instancyacy

// echo ContohStatic::$angka; 
// echo "<br>";
// echo ContohStatic::hallo(); 
// echo "<hr>";
// echo ContohStatic::hallo();


class Contoh {
    public static $angka = 1;

    public function halo(){
        return "Hallo " . self::$angka++ . " kali <br>";
    }
}

$obj = new Contoh;

echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
