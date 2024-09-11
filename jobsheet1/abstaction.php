<?php
abstract class pengguna//Deklarasi class abstract
{
  protected $nama;//atribut bisa diakses oleh turunannya
  public function __construct($nama)
  {
    $this->nama = $nama;
  }
 abstract public function aksesFitur();//Metode abstract
  
}

class dosen extends pengguna//Kelas dosen mawarisi kelas pengguna
{
  private $matkul;//Menambah atribut matkul

  public function __construct($nama, $matkul)
  {
    parent::__construct($nama);//Menginisialisasi atribut nama
    $this->matkul = $matkul;
  }
  public function aksesFitur()
  {
    return "Nama : $this->nama Mata Kuliah : $this->matkul";
  }
}

class  Mahasiswa extends pengguna//Kelas mahasiswa mewarisi kelas pengguna
{
  private $nim;

  public function __construct($nama, $nim)
  {
    parent::__construct($nama);//Menginisialisasi atribut nama
    $this->nim = $nim;
  }
  public function aksesFitur()
  {
    return "Nama: $this->nama NIM : $this->nim";
  }
}

$Dsn1 = new dosen("Ageng Wahyudi <br>", "Pemrograman<br>");//objek dibuat dari kelas dosen
$Mhs = new mahasiswa("Amel Adellia Fahrani<br>", "230102026");//objek dibuat dari kelas mahasiswa
echo $Dsn1->aksesFitur();
echo "<br>";
echo $Mhs->aksesFitur();
