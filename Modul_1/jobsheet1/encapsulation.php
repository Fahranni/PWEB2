<?php

/**
 * Nama   : Amel Adellia Fahrani
 * Kelas  : TI-2B
 * NPM    : 230102026
 */
//Buat class Mahasiswa
class Mahasiswa//Deklarasi class Mahasiswa
{
  //Deklarasi atribut secacra privat yang artinya hanya dapat diakses didalam kelas
  private $nama;
  private $nim;
  private $jurusan;

  public function getNama()//Metode getter digunakan untuk mengambil nilai dari atribut
  {
    return "Nama : $this->nama";
  }
  public function getNIM()
  {
    return "NIM : $this->nim";
  }
  public function getJurusan()
  {
    return "Jurusan : $this->jurusan";
  }

  public function setNama($nama)//Metode setter digunakan untuk mengubah nilai atribut
  {
    $this->nama = $nama;
  }
  public function setNIM($nim)
  {
    $this->nim = $nim;
  }
  public function setJurusan($jurusan)
  {
    $this->jurusan = $jurusan;
  }
}
$Mahasiswa1 = new Mahasiswa();
//Memanggil metode untuk menampilkan nilai atribut 
echo "Sebelum Setter";
echo "<br>";
$Mahasiswa1->setNama("Amel Adellia Fahrani<br>"); //Setter, mengubah nilai nama,nim dan jurusan
$Mahasiswa1->setNIM("230102026<br>");
$Mahasiswa1->setJurusan("Komputer<br>");
echo $Mahasiswa1->getNama();
echo $Mahasiswa1->getNIM();
echo $Mahasiswa1->getJurusan();
echo "<br>";
$Mahasiswa1->setNama("Fahranni<br>");//Setter, mengubah nilai nama,nim dan jurusan
$Mahasiswa1->setNIM("230102011<br>");
$Mahasiswa1->setJurusan("Komunikasi");
//Memanggil metode get untuk menampilkan nilai atribut setelah diubah
echo "Setelah Setter";
echo "<br>";
echo $Mahasiswa1->getNama();
echo $Mahasiswa1->getNIM();
echo $Mahasiswa1->getJurusan();
