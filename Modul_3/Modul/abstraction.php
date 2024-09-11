<?php 
abstract class shape{//deklarasi kelas abstrak shape 
  abstract public function area();//metode yang harus diimplementasikan di kelas turunan
}
class rectangle extends shape{//kelas rectangle merupakan turunan dari kelas shape
  private $width;
  private $height;

  public function __construct($width,$height){//menginisialisi(memberi nilai awal) atribut
    $this->width = $width;
    $this->height = $height;

  }
  public function area(){//implementasi atribut menghitung luas persegi panjang
    return $this->width * $this->height;
  }
  }
class circle extends shape{//kelas circle sebagai kelas turunan dari shape
  private $radius;//menambah atribut radius yang bersivat private
  
  public function __construct($radius){//menginisialisasi atribut
    $this->radius = $radius;
  }
  public function area(){//implementasi metode menghitung luas lingkaran
    return pi() * pow($this->radius,2);
  }
}
$rectangle = new rectangle(5,10);//Membuat objek retengle dengan lebar 5 dan tinggi 10
echo "Area of Rectangle:". " ".$rectangle->area();//Menampilkan hasil perhitungan
echo "<br>";

$circle = new circle(7);//Membuat objek dengan jari-jari 7
echo "Area of circle :"." ". $circle->area();//Menampilkan hasil perhitungan
?>