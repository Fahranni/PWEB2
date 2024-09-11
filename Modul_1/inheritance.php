<?php 
class produk {//membuat class produk sebagai kelas induk
  protected $nama;//nama sebagai atribut kelas produc, bersifat proctected maka bisa diakses didalam kelas dan oleh kelas turunananya
  public function __construct($nama){//memberikan nilai awal untuk nam
    $this->nama = $nama;
  }
  public function getNama(){//metode getnama
    return $this->nama;
  }
}
//membuat kelas buku yang mewarisi atribut dan metode dari kelas produk
class buku extends produk{
  private $penulis;//menambah atribut penulis yang bersifat private, haya bias diakses didalam kelas

  public function __construct($nama, $penulis){//memberikan nilai awal nama dan penulis
    parent::__construct($nama);
    $this->penulis = $penulis;
  }
  public function getPenulis(){//metode get mengambil nilai penulis
    return $this->penulis;
  }
}

$buku1 = new buku("Pemrograman PHP", "Andi Prasetyo");//objek baru buku1 dari kelas bukku
echo $buku1->getNama();//menampilkan nama dari buku dengan memanggil metode getter
?>