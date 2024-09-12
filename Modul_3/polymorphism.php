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
    $this->teacherID = $teacherID;
  }
  public function getName()//Mengembalikan nilai
  {
    return "Nama : ".$this->nama."<br>"."Teacher ID :".$this->teacherID;
  }
}
class student extends person//Membuat kelas turunan
{
  private $studentID;//menambah atribut

  public function __construct($nama, $studentID)
  {
    parent::__construct($nama);
    $this->studentID = $studentID;
  }
  public function getName()
  {
    return "Nama :".$this->nama."<br>"."ID student : ". $this->studentID;
  }
}

$teacher1 = new Teacher("Fadilah Tri Hastuty ", "0092"); //objek teacher1 dibuat dari kelas teacher
$student1 = new student("Faisal Damar", "11239"); //objek student1 dibuat dari kelas student
//Memanggil metode 
echo $teacher1->getName();//memanggil metode dan menampilkan 
echo "<br>"."<br>";
echo $student1->getName();

 ?>