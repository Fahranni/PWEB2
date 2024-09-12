<?php

/**
 * Nama   : Amel Adellia Fahrani
 * Kelas  : TI-2B
 * NPM    : 230102026
 */
//Buat class Mahasiswa
class Mahasiswa
{ //Mendeklarasikan Atribut class Mahasiswa yang bisa diakses diluar kelas
  public $nama;
  public $nim;
  public $jurusan;

  public function __construct($nama, $nim, $jurusan)
  { //Menginisialisasi atribut kelas dan memberikan nilai
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
  }
  public function tampilkanData()
  { //Metode tampilkanData
    return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan"; //Mengembalikan nilai
  }
 
  public function updateJurusan($jurusan){//Metode mengubah nilai jurusan
    $this->jurusan = $jurusan;
  }

  public function setNIM($nim)//Metode mengubah nilai nim
  {
    $this->nim = $nim;
  }
}
$Mahasiswa1 = new Mahasiswa("Fahri Fauzan", "23034567", "Kesehatan");
echo $Mahasiswa1->tampilkanData(); //Memanggil metode tampildata()
echo "<br>"."<br>";
$Mahasiswa1->updateJurusan("Komunikasi");//Mengubah nilai jurusan
echo $Mahasiswa1->tampilkanData();//Menampilkan data setelah dirubah
echo "<br>"."<br>";
$Mahasiswa1->setNIM("230102011");//Mengubah nilai nim
echo $Mahasiswa1->tampilkanData();//Menampilkan data