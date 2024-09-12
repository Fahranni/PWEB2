<?php
class pengguna//Deklarasi class
{
  public $nama;
  public function aksesFitur()
  {
    return $this->nama;//Mengembalikan nilai
  }
}

class dosen extends pengguna//Kelas dosen mewarisi kelas pengguna
{
  public $matkul;//Menambah atribut baru matkul
  public function aksesFitur()
  {
    return "Nama : $this->nama Mata Kuliah : $this->matkul";

  }
}

class  Mahasiswa extends pengguna//Buat kelas mahasiswa yang merupakan turunan dari kelas pengguna
{
  public $nim;//menambah atribut
  public function aksesFitur()//mengembalikan nilai
  {
    return "Nama: $this->nama NIM : $this->nim";
  }
}

$Dsn1 = new dosen();//buat objek Dsn1 dibuat dari kelas dosen
//Mengatur nilai atribut
$Dsn1->nama = "Ageng" ."<br>";
$Dsn1->matkul= "Sastra Inggris";
echo $Dsn1->aksesFitur();//menampilkan informasi objek
echo "<br>"."<br>";

$Mhs = new Mahasiswa();//buat objek baru dari kelas Mahasiswa
//Mengatur nilai atribut
$Mhs->nama="Royyan Riski". "<br>";
$Mhs->nim="23090987";
echo $Mhs->aksesFitur();//Menampilkan informasi objek


