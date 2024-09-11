<?php
abstract class Course //Deklarasi class abstract
{
  abstract public function getCourseDetails(); //Metode abstract

}

class onlineCourse extends course //Kelas dosen mawarisi kelas pengguna
{
  private $nama; //Menambah atribut matkul
  private $modul;

  public function __construct($nama, $modul)
  {
    //Menginisialisasi atribut nama
    $this->nama= $nama;
    $this->modul = $modul;
  }
  public function getCourseDetails()
  {
    return "Nama : $this->nama Modul : $this->modul";
  }
}

class  OfflineCourse extends Course //Kelas mahasiswa mewarisi kelas pengguna
{
  private $nama;
  private $matkul;

  public function __construct($nama, $matkul)
  {
    //Menginisialisasi atribut nama
    $this->nama = $nama;
    $this->matkul = $matkul;
  }
  public function getCourseDetails()
  {
    return "Nama: $this->nama Matkul: $this->matkul";
  }
}

$online = new onlineCourse("Ageng Wahyudi <br>", "Pemrograman<br>"); //objek dibuat dari kelas dosen
$offline = new offlineCourse("Amel Adellia Fahrani<br>", "Bahasa Inggris"); //objek dibuat dari kelas mahasiswa
echo $online->getCourseDetails();
echo "<br>";
echo $offline->getCourseDetails();
