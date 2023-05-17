Namespace -> Sebuah cara untuk mengelompokkan file program ke sebuah package/identitas tersendiri. teknik ini juga disebut dengan teknik Enkapsulation.

kenapa harus dikelompokkan??? karena pada dasarnya PHP tidak mengijinkan kita untuk memiliki 2 Class dengan nama yang sama. jika ada nama yang sama ketika di render maka akan terjadi error. tidak masalah jika kita bekerja sendiri bisa mengetahui nama class yang telah dibuat dan bisa dibaut berbedad, Bagaimana jika programmnya sudah besar kemudian dikerjakan dalam tim maka ini akan sangat merepotkan jika harus membuat class dengan nama yang berbeda ??
bagaimana jika kita menggunakan script/library dari pihak ke-tiga? contoh composer untuk menginstal packet scpit yang telah didesain oleh orang lain tentunya kita tidak mengetahui apa nama class yang dimuat didalamnya bukan?
maka dari itu ada teknik enkapsulasi yang tepat untuk memecahkan masalah ini yakni dengan : Namespace.

contoh penulisan namespace : 
 FolderA/FolderB/fileC.php punya class Name {...script...}
 dalam fileC.php namespace FolderA\FolderB

  FolderX/FolderY/fileZ.php punya class Name {...script...}
namespace FolderX\FolderY
