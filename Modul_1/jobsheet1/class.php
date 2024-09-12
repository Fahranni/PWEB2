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

 public function tampilkanData(){//Metode tampilkanData
  return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";//Mengembalikan nilai
 }
}
$Mahasiswa1 = new Mahasiswa();//intansiasi objek
//Mengatur nilai atribut
$Mahasiswa1->nama = "AmelAdellia Fahrani";
$Mahasiswa1->nim = "230102026";
$Mahasiswa1->jurusan="Komputer dan Bisnis";
echo $Mahasiswa1->tampilkanData();//Memanggil metode tampildata() dari objek mahasiswa1 dan menampilkan hasilnya menggunakan echo
?>