<!-- CONTOH KASUS -->
<?php


class BUAH {
    private $warna;

    public function makan() {
        //kunyah
        //nyam... nyam...nyam... 
    }

    public function setWarna($warna){
        $this->warna = $warna;
    }
}

class APEL extends BUAH {
    public function makan() {
        //kunyah
        //sampai bagian tengah
    }
}


class JERUK extends BUAH {
    public function makan() {
        //kupas
        //kunyah
    }
}

//instansiasi objek dikasih buah $apel
$Apel = new APEL();
$Apel->makan();
//ilustasi : jika disuruh makan() buah objek $Apel itu maka kita akan jawab rasanya $Apel, kita langsung tahu objeknya apa? karena yang di instansiasi merupakan objek di class APEl

$Buah = new BUAH();
$Buah->makan();
//ilustasi : jika disuruh makan() BUAH obj $Buah itu maka kita akan bingung itu buah rasanya apa anying...??? harus jelas dulu buahnya buah apa / instansiasi ke kelas apa? apakah $Buah itu masuk ke Class APEL atau Jeruk agar mengetahui objek apa yang sedang di makan() maka harus di instansiasi ke class yang jelas atau spesifik ke class turunanya APEL atau JERUK,
//sepertinya Buah itu bukan class yang akan di instansiasi, karena yang akan diinstnsiasi adalah APEL atau JERUK. 
//kalau ada kasus ini maka penerapan yang cocok adalah kelas abstarak, dimana class BUAH dijadikan class abstract sehingga class BUAH tidak bisa di instansiasi ketika itu dilakukan maka akan terjadi error..., 

// CARA MEMBUAT CLASS ABSTACT

//class abstrak
abstract class FRUIT{
    private $color;

    //method abstrak hanya interfacenya/namanya saja
    //implementasinya, ada di kelas turunannya
    //minimal punya 1 method abstrac
    abstract public function eat();

    public function setWarna($color){
        $this->color = $color;
    }
}

//wajib mengimplementasikan method yang sama untuk class turunannya
class DURIAN extends FRUIT{

 public function eat(){
        //kunyah
        //nyam... nyam...nyam... 
    }
 }

