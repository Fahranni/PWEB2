<?php
//Polymorphism
class person
{ //Membuat kelas dengan nama person sebagai kelas induk
  protected $nama; //nama sebagai atribut kelas
  public function __construct($nama)//Menerima satu parameter nama
  {
    $this->nama = $nama;//menyimpan nilai
  }
  public function getName()//mengembalikan nilai atribut nama
  {
    return $this->nama;
  }
}
class Teacher extends person//Membuat kelas turunan 
{
  private $teacherID;//Menambah atribut kelas

  public function __construct($nama, $teacherID)//Menerima dua patameter
  {
    parent::__construct($nama);
    $this->$teacherID = $teacherID;
  }
  public function getName()//Mengembalikan nilai
  {
    return $this->nama;
  }
}
class student extends person//Membuat kelas turunan
{
  private $studentID;//menambah atribut

  public function __construct($nama, $studentID)
  {
    parent::__construct($nama);
    $this->$studentID = $studentID;
  }
  public function getName()
  {
    return $this->nama;
  }
}

$teacher1 = new Teacher("Fadilah Tri Hastuty ", "0092"); //objek teacher1 dibuat dari kelas teacher
$student1 = new student("Faisal Damar", "11239"); //objek student1 dibuat dari kelas student
//Memanggil metode 
echo "Nama :". $teacher1->getName();//mengembalikan nilai atribut dan menampilkan
echo "<br>";
echo "Nama :". $student1->getName();

 ?>