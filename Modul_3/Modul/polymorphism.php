<?php
class animal
{ //Buat class animal
  protected $name; //atribut bersifat protected bisa digunakan oleh kelas animal dan kelas turunannya

  public function __construct($name)
  { //Menentukan nilai awal
    $this->name = $name;
  }
  public function getName()
  { //Metode mengambil dan mengembalikan nilai nama
    return $this->name;
  }
  public function makeSound(){
    return "kosong";
  }
}
class dog extends animal
{ //kelas dog sebagai turunan dari kelas animal
  public function makeSound()
  { //metode
    return "Woof!";
  }
}
class cat extends animal
{ //Membuat cat sebagai kelas turunan dari kelas anima
  public function makeSound()
  {
    return "Meow!";
  }
}
class printer{
  public function print(animal $animal){
    echo $animal->getName(). " "."says". " ".$animal->makeSound()."<br>";
  }
}

$dog1 = new dog("Buddy"); //Instansiasi membuatobjek baru dengan nama dog1 dan memberikan nilai
$cat1 = new cat("Kitty");
$printer = new printer();
$printer->print($dog1);
$printer->print($cat1);

