<?php
abstract class Course //Deklarasi class abstract
{
  abstract public function getCourseDetails(); //Metode abstract

}

class onlineCourse extends course //Kelas dosen mawarisi kelas pengguna
{
  public $nama; //Menambah atribut matkul
  public $modul;

  
  public function getCourseDetails()
  {
    return "Nama : $this->nama <br> Modul : $this->modul";
  }
}

class  OfflineCourse extends Course //Kelas mahasiswa mewarisi kelas pengguna
{
  public $nama;
  public $matkul;

  public function getCourseDetails()
  {
    return "Nama: $this->nama <br> Matkul: $this->matkul";
  }
}

$online = new onlineCourse(); //membuat objek baru
$online->nama ="Ageng Wahyudi";//Memberikan nilai atribut
$online->modul="Pemrograman";
echo $online->getCourseDetails();//Memanggil metode dan menampilkan

$offline = new offlineCourse(); //Membuat objek baru
$offline->nama="Amel Adellia Fahrani";//Memberikan nilai atribut
$offline->matkul="Bahasa Inggris";
echo "<br>". "<br>";
echo $offline->getCourseDetails();//Memanggil metode dan menampilkan
