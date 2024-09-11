<?php 
class mobil {//Definisi kelas
  //definisi atribut, bersifat public maka bisa diakses diluar kelas
  public $merk;
  public $warna;

  public function __construct($merk,$warna){//inisialisasi atau memberikan nilai awal pada merk adan warna
    $this->merk = $merk;
    $this->warna = $warna;
  }

  public function deskripsi() {//metode deskripsi untuk menampilkan informasi mobil
    return "Mobil ini adalah $this->merk berwarna $this->warna";

  }
}
$mobil1 = new mobil("Toyota", "Kuning");//Objek baru dari kelas mobil dengan merk toyota dan warna kuning
echo $mobil1->deskripsi();//menampilkan deskripsi dan memanggil metode deskripsi
?>