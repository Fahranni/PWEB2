<?php 
//Definisi class
class buku{
  //judul dan penulis atribut atau properties yang bersifat public, maka bisa diakses diluar kelas
  public $judul;
  public $penulis;

  //constructor
  public function __construct($judul, $penulis) {//memberikan nilai awal untuk atribut judul dan penulis
    $this->$judul = $judul;
    $this->$penulis = $penulis;
  }
  public function tampilkanInfo(){//metode menampilkan informasi Buku
    return "Judul: $this->judul, Penulis: $this->penulis";
  }
}

//Instasi objek
$buku1 = new buku("Pemrograman", "Andi Prasetyo");//membuat ojek baru buku1 dari kelas buku 
echo $buku1->tampilkanInfo();//menampilkan dan memanggil metode 

?>