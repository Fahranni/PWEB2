<?php 
class mobil {//Definisi kelas
  //definisi atribut
  public $merk;
  public $warna;

  public function __construct($merk,$warna){
    $this->merk = $merk;
    $this->warna = $warna;
  }

  public function deskripsi() {
    return "Mobil ini adalah $this->merk berwarna $this->warna";

  }
}
$mobil1 = new mobil("Toyota", "Kuning");
echo $mobil1->deskripsi();
?>