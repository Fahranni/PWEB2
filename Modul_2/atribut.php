<?php
class buku
{ //Definisi kelas
  //definisi atribut
  public $judul;
  public $penulis;

  public function __construct($judul, $penulis)//mengisi nilai awal atribut
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
  }

  public function tampilkanInfo()//metode untuk menampilkan info
  {
    return "Buku $this->judul ditulis oleh $this->penulis";
  }
}
$buku1 = new buku("Pemrograman PHP", "Jhon Doe");//Objek baru dengan judul "pemrograman PHP" dan penulis "Jhon Doe"
echo $buku1->tampilkanInfo();//menampilkan 
