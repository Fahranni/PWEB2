
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
public function tampilkanData(){
  return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
 }
}
```
Method untuk menampilkan class. Metode publik untuk mengembalikan nilai string informasi mengenai mahasiswa dan menggabungkan nilai atribut nama, nim, dan Jurusan.

```php
$Mahasiswa1 = new Mahasiswa();
```
Membuat instansi objek dari kelas Mahasiswa
```php
$Mahasiswa1->nama = "AmelAdellia Fahrani";
$Mahasiswa1->nim = "230102026";
$Mahasiswa1->jurusan="Komputer dan Bisnis";
```
Mengatur nilai atribut yang ada dalam kelas
```php
echo $Mahasiswa1->tampilkanData();
```
Memanggil metode guna menampilkan objek
#### Kode Program
```php
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
```
#### Output
![output_1](/Dokumentasi/output1.png)

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
$Mahasiswa1 = new Mahasiswa();
```
Mahasiswa1 adalah objek baru dari kelas mahasiswa
```php
$Mahasiswa1->setNama("Amel Adellia Fahrani<br>"); 
$Mahasiswa1->setNIM("230102026<br>");
$Mahasiswa1->setJurusan("Komputer<br>");
```
Mengubah nilai atribut dengan set
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
#### Kode Program
```php
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
```
#### Output
![output_1](/Dokumentasi/output2.png)
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
### Kode Program
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
### Output
![output_1](/Dokumentasi/Output_3.png)

### 4. Polymorphism
Polymorphism merupakan konsep pada OOP yang memungkinkan suatu objek menggunakan metode yang sama namun memiliki implementasi yang berbeda berdasarkan tipe objek yang memanggilnya. Polymorphism dapat digunakan oleh objek meski daro kelas yang berbeda.
```php
class pengguna
{
  protected $nama;
  public function __construct($nama)
  {
    $this->nama = $nama;
  }
  public function aksesFitur()
  {
    return $this->nama;
  }
}
```
Mendeklarasikan class pengguna sebagai kelas induk dengan atribut nama dan metode aksesFitur. Atribut nama hanya dapat diakses dalam kelas pengguna dan oleh kelas turunannya. aksesFitur mengembalikan nilai dari atribut nama.
```php
class dosen extends pengguna//Kelas dosen mewarisi kelas pengguna
{
  private $matkul;

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
```
Kelas dosen mewarisi atribut dan method dari kelas pengguna. 
atribut matkul merupakan atribut tambahan di kelas dosen dan hanya bisa diakses oleh kelas dosen karena bersifat privat. metode aksesFitur() menggantikan menggantikan metode yang sama dikelas induk.

```php
class  Mahasiswa extends pengguna
{
  private $nim;

  public function __construct($nama, $nim)
  {
    parent::__construct($nama);
    $this->nim = $nim;
  }
  public function aksesFitur()
  {
    return "Nama: $this->nama NIM : $this->nim";
  }
}
```
kelas mahasiswa mewarisi atribut dan method dari kelas pengguna. 
atribut nim merupakan atribut tambahan di kelas mahasiswa dan hanya bisa diakses oleh kelas mahasiswa karena bersifat privat. metode aksesFitur() menggantikan menggantikan metode yang sama dikelas induk.
``php
$Dsn1 = new dosen("Ageng Wahyudi <br>", "Pemrograman<br>");
```
Membuat objek baru bernama Dsn1 dari kelas dosen dengan nama dosen "Ageng Wahyudi" dan mata kuliah "Pemrograman"
```php
$Mhs = new mahasiswa ("Amel Adellia Fahrani<br>", "230102026");
```
Membuat objek baru bernama Mhs dari kelas mahasiswa dengan nama mahasiswa "Amel Adellia Fahrani" dan NIM "230102026"
```PHP
echo $Dsn1->aksesFitur();
echo "<br>";
echo $Mhs->aksesFitur();
```
Memanggil metode aksesFitur() pada objek Dsn1 dan Mhs.
### Kode Program
```php
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
?>
```
### Output
![output_1](/Dokumentasi/output_4.png)
### 5. Abstraction
Konsep pada OOP yang Menyembunyikan detail implementasi yang kompleks dan hanya menampilkan fungsi penting. Tujuan dari abstraction yaitu menyederhanakan kompleksitas suatu fungsi dengan cara hanya menampilkan aspek-aspek yang penting dan menyembunyikan detail implementasi yang tidak perlu.
```php
abstract class pengguna//Deklarasi class abstrac
{
  protected $nama;
  public function __construct($nama)
  {
    $this->nama = $nama;
  }
 
```
Deklarasi class abstract dengan nama  pengguna dengan atribut nama "proctected" artinya atribut bisa diakses oleh kelas itu sendiri dan turunannya.Constructor ini digunakan untuk menginisialisasi atribut $nama ketika objek dari kelas turunan dibuat.
```php
 abstract public function aksesFitur();
``
Method abstract ini dideklarasikan tanpa diimplementasikan dikelas induk, maksudnya kelas turunan wajib mengimplementasikan method ini sesuai dengan kebutuhan
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
Membuat kelas dosen sebagai turunan dari kelas abstract pengguna artinya kelas dosen mewarisi atribut dan method darai kelas abstract pengguna. Parent memanggil constructor dari kelas pengguna untuk menginisialisasi atribut nama, setelah itu matkul diinisialisasi untuk menyimpan nilai mata kuliah.
```php
 }
  public function aksesFitur()
  {
    return "Nama : $this->nama Mata Kuliah : $this->matkul";
  }
}
```
Method aksesFitur() mengubah method abstract aksesFitur() dari kelas pengguna, dan implementasi dikelas dosen dengan menampilkan nama dosen dan matkul.
```php
class  Mahasiswa extends pengguna
{
  private $nim;

  public function __construct($nama, $nim)
  {
    parent::__construct($nama);
    $this->nim = $nim;
  }
  public function aksesFitur()
  {
    return "Nama: $this->nama NIM : $this->nim";
  }
}
```
Kelas mahasiswa mewarisi semua atribut dan method dari kelas pengguna. Atribut NIM bersifat privat artinya haya bisa diakses oleh kelas mahasiswa saja
```php
$Dsn1 = new dosen("Ageng Wahyudi <br>", "Pemrograman<br>");
```
Dsn1 merupakan objek baru dari kelas dosen dengan nama "Ageng Wahyudi" dan matkul "Pemrograman"
```php
$Mhs = new mahasiswa("Amel Adellia Fahrani<br>", "230102026");
```
Mhs merupakan objek baru dari kelas mahasiswa dengan nama "Amel Adellia Fahrani" dan NIM "230102026"
```php
echo $Dsn1->aksesFitur();
echo "<br>";
echo $Mhs->aksesFitur();
```
Memanggil metode aksesFitur() untuk memanggil metode aksesFitur() pada objek Dsn1 dan Mhs
### Kode Program
```php
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
?>
```
### Output
![output_1](/Dokumentasi/output_5.png)


