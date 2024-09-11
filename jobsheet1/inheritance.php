<?php
class pengguna//Mendeklarasikan class pengguna sebagai class induk
{
  protected $nama;//deklarasi atribut yang haya bisa diakses oleh kelas itu sendiri dan kelas yang mewarisinya
  public function __construct($nama)//  Menginisialisasikan atribut
  {
    $this->nama = $nama;
  }
  public function getNama()//Mengembalikan nilai dari atribut 
  {
    return "Nama : $this->nama";
  }
}

class dosen extends pengguna//Deklarasi class dosen yang mewarisi kelas pengguna
{
  private $matkul;//Menambah atribut matkul

  public function __construct($nama, $matkul)
  {
    parent::__construct($nama);//Memanggil contruct dari class pengguna 
    $this->matkul = $matkul;//inisialisasi atribut
  }
  public function getmatkul()//Mengembalikan nilai darai atribut matkul yang digunakan untuk mengakses matkul
  {
    return "Mata Kuliah : $this->matkul";
  }
}

$Dsn1 = new dosen("Ageng Wahyudi <br>", "Pemrograman");//Membuat objek dari class dosen dan memberikan nilai
echo $Dsn1->getNama();//Menampilkan Nama dengan Memanggil metode get dari kelas induk
echo $Dsn1->getmatkul();//Memanggil metode get yang dipanggil dari kelas dosen dan menampilkan nilainya
?>