<?php
class buku {//Buat kelas buku
  //judul dan penulis atribut yang bersifat private, haya dapat diakses didalam kelas
  private $judul;
  private $penulis;

  public function __construct($judul, $penulis){//menginisialisasi nilai awal atribut judul dan penulis
    $this->judul = $judul;
    $this->penulis = $penulis;
  }
  public function getJudul(){//metode getter untuk mengambil nilai atribut judul
    return $this->judul;
  }
  public function setJudul($judul){//metode setter untuk mengubah nilai Judul
    $this->judul = $judul;
  }
} 
$buku1 = new buku("Pemrograman PHP", "Andi Prasetyo");//membuat objek baru dari kelas buku dengan judul pemrograman PHP dan penulis Andi Prasetyo
echo $buku1->getJudul();//Menampilkan informasi buku dan memanggil metode getter
 ?>