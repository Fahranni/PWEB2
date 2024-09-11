<?php 
class dosen{//Deklarasi class
  //Deklarasi atribut
  public $nama;
  public $NIP;
  public $matkul;

  public function __construct($nama,$NIP,$matkul){//Metode untuk class baru yang baru dibuat
    $this->nama = $nama;
    $this->NIP = $NIP;
    $this->matkul = $matkul;
  }

  public function tampilkanDosen(){//Metode yang digunakan untuk menampilkan informasi dosen
    return "Nama : $this->nama <br> NIP : $this->NIP <br> Mata Kuliah : $this->matkul";//Mengembalikan nilai
  }
}

$Dosen1 = new dosen ("Farida Angelin", "1908798765", "Sastra");//Membuat objek baru
echo $Dosen1->tampilkanDosen();//Menampilkan informasi dosen


?>