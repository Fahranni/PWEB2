<?php 
class dosen{//Deklarasi class
  //Deklarasi atribut
  public $nama;
  public $NIP;
  public $matkul;

  public function tampilkanDosen(){//Metode yang digunakan untuk menampilkan informasi dosen
    return "Nama : $this->nama <br> NIP : $this->NIP <br> Mata Kuliah : $this->matkul";//Mengembalikan nilai
  }
}

$Dosen1 = new dosen();//Membuat objek baru
//Mengatur nilai atribut
$Dosen1->nama = "Kiraina Hana";
$Dosen1->NIP = "17829423231";
$Dosen1->matkul = "Bahasa Inggris";
echo $Dosen1->tampilkanDosen();//Menampilkan informasi dosen
?>