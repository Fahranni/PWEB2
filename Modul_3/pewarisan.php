<?php
class person
{ //Membuat kelas dengan nama person 
  public $nama; //nama sebagai atribut kelas yang bisa diakses oleh kelas itu sendiri dan turunannya
  
  public function getName()//mengambil nilai nama
  {
    return $this->nama;
  }
}
class student extends person//membuat kelas turunan dari kelas person
{
  public $studentID;//Menambah atribut 


  public function getstudentID()//mengembalikan nilai atribut
  {
    return $this->studentID;
  }
}
$student = new student (); //membuat objek baru dari kelas student
$student->nama = "Yogi Gunawan";//Mengatur nilai nama
echo "Nama : " . $student->getName();//Menampilkan
echo "<br>";
$student->studentID = "136673";
echo "ID Student : ". $student->getStudentID();


?>