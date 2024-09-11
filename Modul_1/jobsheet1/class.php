<?php 
/**
 * Nama   : Amel Adellia Fahrani
 * Kelas  : TI-2B
 * NPM    : 230102026
 */
//Buat class Mahasiswa
class Mahasiswa{//Mendeklarasikan Atribut class Mahasiswa yang bisa diakses diluar kelas
 public $nama;
 public $nim;
 public $jurusan;

 public function __construct($nama,$nim,$jurusan){//Menginisialisasi atribut kelas dan memberikan nilai
  $this->nama = $nama;
  $this->nim = $nim;
  $this->jurusan = $jurusan;
 }
 public function tampilkanData(){//Metode tampilkanData
  return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";//Mengembalikan nilai
 }
}
$Mahasiswa1 = new Mahasiswa ("Amel Adellia Fahrani" , "230102026" , "Komputer dan Bisnis");
echo $Mahasiswa1->tampilkanData();//Memanggil metode tampildata() dari objek mahasiswa1 dan menampilkan hasilnya menggunakan echo
?>