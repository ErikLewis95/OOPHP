<!-- kalau pada abstrak minimal punya 1 method abstact kalau pada interface semua methodnya harus abstract dan tidak punya implementasi, implementasinya hanya dilakukan pada class childnya saja  -->

<?php  

// contoh abstract
// abstract class FRUIT{ //class abstract
//     private $color;

     //method abstrak hanya interfacenya/namanya saja
     //implementasinya, ada di kelas turunannya
     //minimal punya 1 method abstrac

//     abstract public function eat();

//     public function setColor($color){
//         $this->color = $color;
//     }
// }

// class APPLE extends FRUIT{

//  public function eat(){
         //kunyah
         //nyam... nyam...nyam... 
//     }
//  }

//  class ORANGE extends FRUIT{

//  public function eat(){
//        //kupas
//         //kunyah      
//     }
//  }

//parent class
interface FRUIT{
    public function eat();
    public function setColor($color);
}

interface Benda{
    public function SetUkuran($ukuran);
}

//child class
//satu class boleh mengimplementasikan banyak interface
//wajib menuliskan method implementasi yang ada di Benda,
class APPLE implements FRUIT, Benda{
    protected $color;
    protected $ukuran;

    public function eat(){
        //kunyah
        //sampai bagian tengah
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function SetUkuran($ukuran){
        $this -> ukuran = $ukuran;
    }
}

class ORANGE implements FRUIT {
    protected $color;
    
    public function eat(){
        //kupas
        //kunyah
    }
    public function setColor($color){
        $this->color = $color;
    }

}

