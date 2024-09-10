<?php
class person
{ //Membuat kelas dengan nama person 
  protected $nama; //nama sebagai atribut kelas yang bisa diakses oleh kelas itu sendiri dan turunannya
  public function __construct($nama)//method otomatis saat objek dibuat
  {
    $this->nama = $nama;
  }
  public function getName()//mengambil nilai nama
  {
    return $this->nama;
  }
}
class student extends person//membuat kelas turunan dari kelas person
{
  private $studentID;//Menambah atribut 

  public function __construct($nama, $studentID)//Menyimpan nilai dari dua parameter
  {
    parent::__construct($nama);
    $this->studentID = $studentID;
  }
  public function getstudentID()//mengembalikan nilai atribut
  {
    return $this->studentID;
  }
}
$studentID1 = new student ("Yogi Gunawan", "67699090");//membuat objek baru dari atribut student
echo "Nama : ". $studentID1->getName();//memanggil method dari kelas person untuk menampilkan nama
echo "<br>";
echo "ID Student :"." ". $studentID1->getstudentID();//memanggil method dari kelas student untuk menampilkan ID student

?>