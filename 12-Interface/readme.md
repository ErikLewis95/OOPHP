Abstact Class(1);

1. Sebuah kelas yang tidak dapat di-instansiasi, tidak bisa buat objek dari class Abstact, agar bisa di intansiasi menggunakan class child /turunannya.

2. Kelas "abstract" kelas" yang sesungguhnya adalah kelas turunannya.

3. Berperan sebagai "kerangka dasar" untuk kelas turunannya

4. Mendefenisikan interface untuk kelas lain yang menjadi turunannya.

5. Memiliki minimal 1 method abstrak.

6. Digunakan dalam 'pewarisan'/inheritance untuk 'memaksakan' implementasi method abstrak yang sama untuk semua turunannya.

Abstract Class(2);
1. Semua kelas turunan, harus mengimplementasikan method abstrak yang ada di kelas abstraknya
2. Kelas abstrak boleh memiliki property/ method re guler
3. Kelas abstrak boleh memiliki property / static method.

Contoh Kelas Abstrak;
1. class Mobil Extends Kendaraan
2. class Laptop Extends Komputer
3. class Email Extends Komunikasi


KENAPA menggunakan kelas Abstrak?

1. Mempresentasikan ide atau konsep dasar yang akan diimplementasikan kepada kelas turunannya(child class).

2. "Composition over Inheritance" sebaiknya kita melakukan komposisi dibandingkan inheritance/pewarisan begitu saja. sebenarnya tanpa menggunakan kelas abstract juga bisa hanya menggunakan inheritance saja seperti yang ada di file abstract.php class buah diawal inheritancenya tidak error cuman agak aneh ketika kita melaukan instansiasi class buah, sebenarnya kalau class Buah tidak pernah di instansiasi tidak masalah composisi disini maksudnya menggunakan abtraksi atau interface.

3. Salah satu cara menerapkan POLIMORPHISM->konsep Object Oriented yang kompleks tapi untuk sampai kesana harus paham abstract atau interface.

4. Sentralisasi Logic.

5.Mempermudah pengerjaan TIM. dengan abstrack class yang disebut base class(class utama) nanti didalam class tersebut akan ditulis beberapa method abstrak sehingga ketika TIM akan membuat sub class/class turunannya rekan TIM tersebut akan mengetahui bahwa didalam class childnya wajib ada sebuah metod sebagai implentasi dari method abstractnya.

Iterface(1) 
1. Kelas Abstrak yang sama sekali tidak memiliki implementasi atau {}. Class abstrak punya minimal 1 method abstact, ketika memiliki method abstract maka dia tidak boleh memiliki implementasi atau hanya defebisinya saja implementasinya dilakukan di method class childnya.

2. Murni merupakan template untuk kelas turunannya. Class interface semuanya harus defenisinya saja tdk boleh ada implementasi pada methodnya.

3. Tidak boleh memiliki property, hanya deklarasi method saja.

4. Semua method harus dideklarasikan dengan visibility public

5. boleh mendeklarasika __construct()

6. Satu kelas boleh mengimplementasikan banyak Interface

interface(2)
1. Dengan menggunakan type-hinting dapat melakukan 'Depedency Injection'.
type-hinting dibahas dlm Object Type dimana sebuah objek bisa dijadikan parameter. Depedency Injection->memaksakan sebuah method untuk menerima parameternya adalah objek.

2. Pada akhirnya ketika melakukan abstarksi dan interface akan mencapai POLYMORPHISM 
