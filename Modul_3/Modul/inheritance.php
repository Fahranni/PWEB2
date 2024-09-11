<?php 
class animal{//Buat class animal
  protected $name;//atribut bersifat protected bisa digunakan oleh kelas animal dan kelas turunannya

  public function __construct($name){//Menentukan nilai awal
    $this->name = $name;
  }
  public function getName(){//Metode mengambil dan mengembalikan nilai nama
    return $this->name;
  }
}
class dog extends animal{//kelas dog sebagai turunan dari kelas animal
  public function makeSound(){//metode
    return "Woof!";
  }
}
class cat extends animal{//Membuat cat sebagai kelas turunan dari kelas anima
  public function MakeSound(){
    return "Meow!";
  }
}
$dog1 = new dog ("Buddy");//Instansiasi membuatobjek baru dengan nama dog1 dan memberikan nilai
echo $dog1->getName()." ". "says"." ". $dog1->makeSound();//memanggil metode untuk menampilkan nama dan suara

?>