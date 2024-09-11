<?php
class Student//uat kelas dengan nama student
{
  //Atribut kelas 
  private $nama;
  private $studentID;

  public function __construct($nama, $studentID)//menginisialisasi atribut
  {
    $this->nama = $nama;
    $this->studentID = $studentID;
  }
  public function getNama()//mengambil nilai dari atribut privat nama
  {
    return $this->nama;
  }
  public function getStudentID()//mengambil nilai dari atribut privat studentID
  {
    return $this->studentID;
  }
  public function setNama($nama)//Metode mengubah nilai atribut nama
  {
    $this->nama = $nama;
  }
  public function setStudentID($studentID)//mengubah nilai atribut studentID
  {
    $this->studentID = $studentID;
  }
}
$student1 = new student("Fanya Asabil", "09090918");//Menciptakan objek dadi kelas student
//Memanggil metode untuk menampilkan nilai atribut 
echo "Sebelum Setter";
echo "<br>";
echo"Nama :"." ". $student1->getNama();//mengambil nilai atribut nama
echo "<br>";
echo "ID Student : ". " ".$student1->getstudentID();//mengambil nilai atribut studentID

echo "<br>";
echo "<br>";

$student1->setNama("Fanya Zaskia"); //Setter, mengubah nilai nama
$student1->setStudentID("24527183");

//Memanggil metode get untuk menampilkan nilai atribut setelah diubah
echo "Setelah Setter";
echo "<br>";
//Mengambil nilai
echo "Nama : ". " ".$student1->getNama();
echo "<br>";
echo "ID Student: ". " ".$student1->getstudentID();

