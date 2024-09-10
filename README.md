# Pemrograman Web II
Repository ini dibuat untuk memenuhi tugas mata kuliah praktikum pemrograman web II.

**Nama   : Amel Adellia Fahrani  
Kelas    : TI-2B  
NPM      : 230102024**

## Materi yang dipelajari :
Object Oriented Programming (OOP) adalah Paradigma pemrograman yang berfokus pada koonsep object. Program disusun dengan mengelompokkan objek-objek yang mewakili entitas. Setiap objek memiliki atribut dan metode yang berinteraksi dengan objek lain.Paradigma ini berfokus pada bagaimana objek-objek tersebut berinteraksi satu sama lain dan bagaimana mereka berfungsi dalam sistem. Prinsip darsar OOP meliputi:
- Encapsulation 
- Inheritance
- Polymorphism
- Abstraction
## Jobsheet 1 (Modul 1-2)
### 1. Membuat class dan object
```php
class Mahasiswa{
 public $nama;
 public $nim;
 public $jurusan;
```
Mendeklarasikan kelas dengan nama Mahasiswa dengan atributnya nama,nim dan jurusan yang bisa diakses secara publik artinya bisa diakses diluar kelas.
```php
public function __construct($nama,$nim,$jurusan)
  $this->nama = $nama;
  $this->nim = $nim;
  $this->jurusan = $jurusan;
 }
```
 Metode ini digunakan untuk menginisialisasi atribut kelas dengan nilai yang diberikan saat objek diciptakan.

```php
public function tampilkanData(){
  return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
 }
}
```
Method untuk menampilkan class. Metode publik untuk mengembalikan nilai string informasi mengenai mahasiswa dan menggabungkan nilai atribut nama, nim, dan Jurusan.

```php
$Mahasiswa1 = new Mahasiswa ("Amel Adellia Fahrani" , "230102026" , "Komputer dan Bisnis");
echo $Mahasiswa1->tampilkanData();
?>
```
Membuat instansi objek dari kelas Mahasiswa dengan parameter yang diberikan (nama, nim, dan jurusan). Menampilkan data kelayar dengan echo
#### Skrip Program
```php
<?php 

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
```
#### Output
![output_1](Dokumentasi/output_1.png)

### 2. Encapsulation
Enkapsulasi adalah konsep untuk membantu dalam menyembunyikan dan membungkus detail internal dari objek dengan menggunakan atribut privat dan metode publik (getter dan setter).

_Getter_ adalah metode yang digunakan untuk mengambil nilai dari atribut privat   
_Setter_ adalah metode yang digunakan untuk memperbarui nilai dari atribut privat
```php
class Mahasiswa//Deklarasi class Mahasiswa
{
  private $nama;
  private $nim;
  private $jurusan;
```
Deklarasi kelas dengan nama mahasiswa beserta atributnya yaitu nama,nim dan jurusan secara privat artinya atribut haya dapat diakses oleh kelas itu saja.
```php
public function __construct($nama, $nim,$jurusan)
  {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
  }
```
Memanggil method construct(menginisialisasi) atribut nama, nim, dan jurusan ketika objek baru dari kelas mahasiswa dibuat.
```php
public function getNama()
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
```
Method yang digunakan untuk mengambil nilai dari atribut privat, maka kode diatas digunakan untuk mengambil nilai dari atribuut nama, nim, dan jurusan.
```php
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
```
Method setter digunakan untuk mengubah nilai dari atribut.
```php
$Mahasiswa1 = new Mahasiswa("Amel Adellia Fahrani<br>", "230102026<br>" , "Komputer dan Bisnis<br>");
```
Mahasiswa1 adalah objek baru dari kelas mahasiswa dengan nilai awal untuk atribut nama,nim,kelas.
```php
echo $Mahasiswa1->getNama();
echo $Mahasiswa1->getNIM();
echo $Mahasiswa1->getJurusan();
```
Memanggil metode getter untuk mendapatkan nilai atribut nama, NIM dan Jurusan.
```php

$Mahasiswa1->setNama("Fahranni<br>");
$Mahasiswa1->setNIM("230102011<br>");
$Mahasiswa1->setJurusan("Komunikasi");
```
Method setter digunakan untuk mengubah nilai dari atribut Nama, NIM dan Jurusan.
```php
echo $Mahasiswa1->getNama();
echo $Mahasiswa1->getNIM();
echo $Mahasiswa1->getJurusan();
```
Dengan kode diatas akan menampilkan nilai baru untuk atribut Nama, NIM dan Jurusan
#### Skrip Program
```php
<?php
//Buat class Mahasiswa
class Mahasiswa//Deklarasi class Mahasiswa
{
  //Deklarasi atribut secacra privat yang artinya hanya dapat diakses didalam kelas
  private $nama;
  private $nim;
  private $jurusan;

  public function __construct($nama, $nim,$jurusan)//Menginisialisasi nilai atribut class
  {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
  }

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
$Mahasiswa1 = new Mahasiswa("Amel Adellia Fahrani<br>", "230102026<br>" , "Komputer dan Bisnis<br>");
//Memanggil metode untuk menampilkan nilai atribut 
echo "Sebelum Setter";
echo "<br>";
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
?>
```
#### Output
![output_1](Dokumentasi/output_2.png)
### 3. Inheritance
Inhertance adalah konsep dasar dalam OOP dimana sebuah kelas mewariskan atribut/properti dan metode dari kelas lain. Kelas yang wewarisi disebut kelas anak(child class) sedangkan kelas yang diwarisi disebut kelas induk(superclass,parent class). Dengan Inheritance dapat menghindari perulangan kode. Kelas anak dapat menambah maupun mengubah perilaku dari kelas induk
```php
class pengguna
  protected $nama;
  public function __construct($nama)
  {
    $this->nama = $nama;
  }
  public function getNama()
  {
    return "Nama : $this->nama";
  }
}
```
Deklarasi kelas pengguna sebagai kelas induk dan berfungsi sebagai template dasar.
Atribut distel protected artinya haya bisa diakses oleh kelas itu dan kelas turunannya.
Method Construct digunakan untuk menginisialisasikan atribut nama, Getter digunakan untuk mengembalikan nilai dari atribut nama
```php
class dosen extends pengguna
{
  private $matkul;

  public function __construct($nama, $matkul)
  {
    parent::__construct($nama);
    $this->matkul = $matkul;
  }
```
Class dosen adalah kelas turunan dari class pengguna,bererti class dosen mewarrisi semua atribut dan metode class pengguna.
Menambahkan atribut matkul yang distel privat artinya hanya dapat diakses oleh kelas dosen. Method constructor menerima dua parameter yaitu $nama dan $matkul, artinya memanggil $nama dari kelas induk dan menambah $matkul untuk objek dosen.
```php
$Dsn1 = new dosen("Ageng Wahyudi <br>", "Pemrograman");
echo $Dsn1->getNama();
echo $Dsn1->getmatkul()
```
Membuat objek baru  dengan nama Dsn1 dari kelas dosen. GetNama() memanggil method dari objek $dosen1 yang diwarisi dari kelas pengguna maka akan mengebalikan "Nama : Ageng Wahyudi", dan untuk getmatkul() mengembalikan nilai "Mata Kuliah : Pemrograman"
### Skrip Program
```php
<?php
class pengguna//Mendeklarasikan class pengguna sebagai class induk
{
  protected $nama;//deklarasi atribut yang haya bisa diakses oleh kelas itu sendiri dan kelas yang mewarisinya
  public function __construct($nama)//  Menginisialisasikan atribut
  {
    $this->nama = $nama;
  }
  public function getNama()//Mengembalikan nilai dari atribut 
  {
    return "Nama : $this->nama";
  }
}

class dosen extends pengguna//Deklarasi class dosen yang mewarisi kelas pengguna
{
  private $matkul;//Menambah atribut matkul

  public function __construct($nama, $matkul)
  {
    parent::__construct($nama);//Memanggil contruct dari class pengguna 
    $this->matkul = $matkul;//inisialisasi atribut
  }
  public function getmatkul()//Mengembalikan nilai darai atribut matkul yang digunakan untuk mengakses matkul
  {
    return "Mata Kuliah : $this->matkul";
  }
}

$Dsn1 = new dosen("Ageng Wahyudi <br>", "Pemrograman");//Membuat objek dari class dosen dan memberikan nilai
echo $Dsn1->getNama();//Menampilkan Nama dengan Memanggil metode get dari kelas induk
echo $Dsn1->getmatkul();//Memanggil metode get yang dipanggil dari kelas dosen dan menampilkan nilainya
?>
```
### Output Program










