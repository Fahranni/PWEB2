<?php
abstract class pengguna//Deklarasi class abstract
{
  public $nama;//atribut bisa diakses oleh turunannya
 
 abstract public function aksesFitur();//Metode abstract 
  
}

class dosen extends pengguna//Kelas dosen mawarisi kelas pengguna
{
  public $NIDN;//Menambah atribut matkul

  public function aksesFitur()
  {
    return "Nama : $this->nama NIDN : $this->NIDN";
  }
}

class  Mahasiswa extends pengguna//Kelas mahasiswa mewarisi kelas pengguna
{
  public $nim;
  
  public function aksesFitur()
  {
    return "Nama: $this->nama NIM : $this->nim";
  }
}

$Dsn1 = new dosen();//objek dibuat dari kelas dosen
$Dsn1->nama = "Toto Kusuma". "<br>";//Mengatur nama dosen
$Dsn1->NIDN="1786524379"; //Mengatur NIDN
echo $Dsn1->aksesFitur();//Menampilkan hasil metode akses fitur
echo "<br>" . "<br>";

$Mhs = new Mahasiswa();//Buat objek baru
$Mhs->nama = "Latif al Fauzan". "<br>";//Mengatur nama
$Mhs->nim = "24580927";//Mengatur nim
echo $Mhs->aksesFitur();//Menampilkan hasil metode