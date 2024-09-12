<?php
class pengguna//Mendeklarasikan class pengguna sebagai class induk
{
  public $nama;//deklarasi atribut yang haya bisa diakses oleh kelas itu sendiri dan kelas yang mewarisinya
  
  public function getNama()//Mengembalikan nilai dari atribut 
  {
    return $this->nama;
  }
}

class dosen extends pengguna//Deklarasi class dosen yang mewarisi kelas pengguna
{
  public $matkul;//Menambah atribut matkul

 
  public function getmatkul()//Mengembalikan nilai darai atribut matkul yang digunakan untuk mengakses matkul
  {
    return  $this->matkul;
  }
}

$Dsn1 = new dosen();//Membuat objek dari class dosen dan memberikan nilai
$Dsn1->nama = "Fajar Enggar Maulana";//Mengisi nilai atribut
$Dsn1->matkul ="Matematika Diskrit";
echo "Nama Dosen :". $Dsn1->getNama();//Menampilkan Nama dengan Memanggil metode get dari kelas induk
echo "<br>";
echo "Mata Kuliah :".$Dsn1->getmatkul();//Memanggil metode get yang dipanggil dari kelas dosen dan menampilkan nilainya
?>