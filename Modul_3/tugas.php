<?php
class person
{ //Membuat kelas dengan nama person 
  protected $nama; //nama sebagai atribut kelas
  public function __construct($nama)//Inisialisasi
  {
    $this->nama = $nama;
  }
  public function getName()//mengambil nilai daro atribut nama
  {
    return $this->nama;
  }
  public function getrole(){//menampilkan peran yang berbeda
    return "belum diketahui";
  }
}

class Dosen extends person//Membuat kelas Dosen yang merupakan turunan dari kelas person
{
  private $NIDN;//menambah atribut NIDN

  public function __construct($nama, $NIDN)//Inisialisasi
  {
    parent::__construct($nama);
    $this->NIDN = $NIDN;
  }
  public function getNIDN()//Mengambil nilai NIDN
  {
    return $this->NIDN;
  }
  public function getrole(){//mengatur peran dosen sebagai dosen
    return "Dosen";
  }
}

class Mahasiswa extends person//Membuat kelas Mahasiswa yang turunan dari kelas person
{
  private $NIM;//Menambah atribuut NIM untuk kelas mahasiswa

  public function __construct($nama, $NIM)
  {
    parent::__construct($nama);
    $this->NIM = $NIM;
  }
  public function getNIM()
  {
    return $this->NIM;
  }
  public function getrole(){//mengatur peran mahasiswa sebagai mahasiswa
    return "Mahasiswa";
  }
}
abstract class Jurnal //Deklarasi class abstract
{
  protected $judul; //atribut bisa diakses oleh turunannya
  public function __construct($judul)
  {
    $this->judul = $judul;
  }
  abstract public function getPengajuan(); //Metode abstract

}

class JurnalDosen extends Jurnal //Kelas JurnalDosen mawarisi kelas Jurnal
{


  public function __construct($judul)
  {
    parent::__construct($judul); //Menginisialisasi atribut judul
    
  }
  public function getPengajuan()//Metode
  {
    return $this->judul;
  }
}
class JurnalMahasiswa extends Jurnal //Kelas JurnalMahasiswa mawarisi kelas Jurnal
{


  public function __construct($judul)
  {
    parent::__construct($judul); //Menginisialisasi atribut judul

  }
  public function getPengajuan()
  {
    return $this->judul;
  }
}
//Membuat Objek baru
$Dosen1 = new Dosen("Tatang Agus", "179072534143");
$Mahasiswa1 = new Mahasiswa("Feby Putri", "256175272");
$JurnalDosen1 = new JurnalDosen("Pemrograman");
$JurnalMahasiswa1 = new JurnalMahasiswa ("Teknologi informasi");
echo "Nama Dosen : " ." ". $Dosen1->getName(). "<br>"."NIDN :". " ".$Dosen1->getNIDN(). "<br>"."Role: ". " ".$Dosen1->getrole()."<br>"."Diajukan oleh dosen dengan judul :". " ".$JurnalDosen1->getPengajuan();
echo "<br>";
echo "<br>";
echo "Nama Mahasiswa : " ." ". $Mahasiswa1->getName() . "<br>" . "NIM :" ." ". $Mahasiswa1->getNIM() . "<br>" . "Role : ". " ". $Mahasiswa1->getrole()."<br>"."Diajukan oleh mahasiswa dengan judul :" . $JurnalMahasiswa1->getPengajuan();
?>

