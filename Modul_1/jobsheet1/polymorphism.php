<?php
class pengguna//Deklarasi class
{
  protected $nama;
  public function __construct($nama)
  {
    $this->nama = $nama;
  }
  public function aksesFitur()
  {
    return $this->nama;//Mengembalikan nilai
  }
}

class dosen extends pengguna//Kelas dosen mewarisi kelas pengguna
{
  private $matkul;//Menambah atribut baru matkul

  public function __construct($nama, $matkul)
  {
    parent::__construct($nama);
    $this->matkul = $matkul;
  }
  public function aksesFitur()
  {
    return "Nama : $this->nama Mata Kuliah : $this->matkul";

  }
}

class  Mahasiswa extends pengguna
{
  private $nim;

  public function __construct($nama, $nim)
  {
    parent::__construct($nama);//Mengakses constructor kelas pengguna
    $this->nim = $nim;
  }
  public function aksesFitur()
  {
    return "Nama: $this->nama NIM : $this->nim";
  }
}

$Dsn1 = new dosen("Ageng Wahyudi <br>", "Pemrograman<br>");//objek Dsn1 dibuat dari kelas dosen
$Mhs = new mahasiswa ("Amel Adellia Fahrani<br>", "230102026");//objek Mhs dibuat darai kelas mahasiswa
//Memanggil medode akses fitur
echo $Dsn1->aksesFitur();
echo "<br>";
echo $Mhs->aksesFitur();


