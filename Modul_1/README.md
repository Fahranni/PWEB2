
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
echo $Mahasiswa1->tampilkanData();//Memanggil metode tampildata() dari objek mahasiswa dan menampilkan hasilnya menggunakan echo
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
  public $nama;

  public function getNama()
  {
    return "Nama : $this->nama";
  }
}
```
Deklarasi kelas pengguna sebagai kelas induk dan berfungsi sebagai template dasar.
Atribut distel prublic artinya haya bisa diakses diluar kelas
```php
class dosen extends pengguna
{
  public $matkul;

  public function getmatkul()
  {
    return  $this->matkul;
  }
}

```
Class dosen adalah kelas turunan dari class pengguna,bererti class dosen mewarisi semua atribut dan metode class pengguna.
Menambahkan atribut matkul yang distel public artinya dapat diakses diluar kelas dosen. 
```php
$Dsn1 = new dosen();
```
Membuat objek baru dengan nama Dsn1 dari kelas dosen
```php
$Dsn1->nama = "Fajar Enggar Maulana";
$Dsn1->matkul ="Matematika Diskrit";
```
Memberikan nilai untuk atribut nama dan matkul
```php
echo "Nama Dosen :". $Dsn1->getNama();
echo "<br>";
echo "Mata Kuliah :".$Dsn1->getmatkul();
```
### Kode Program
```php
<?php
class pengguna//Mendeklarasikan class pengguna sebagai class induk
{
  public $nama;//deklarasi atribut yang haya bisa diakses oleh kelas itu sendiri dan kelas yang mewarisinya
  
  public function getNama()//Mengembalikan nilai dari atribut 
  {
    return $this->nama;
  }
}

class dosen extends pengguna//Deklarasi class dosen yang mewarisi kelas pengguna
{
  public $matkul;//Menambah atribut matkul

 
  public function getmatkul()//Mengembalikan nilai darai atribut matkul yang digunakan untuk mengakses matkul
  {
    return  $this->matkul;
  }
}

$Dsn1 = new dosen();//Membuat objek dari class dosen dan memberikan nilai
$Dsn1->nama = "Fajar Enggar Maulana";//Mengisi nilai atribut
$Dsn1->matkul ="Matematika Diskrit";
echo "Nama Dosen :". $Dsn1->getNama();//Menampilkan Nama dengan Memanggil metode get dari kelas induk
echo "<br>";
echo "Mata Kuliah :".$Dsn1->getmatkul();//Memanggil metode get yang dipanggil dari kelas dosen dan menampilkan nilainya
?>
```
### Output
![output_1](/Dokumentasi/output3.png)

### 4. Polymorphism
Polymorphism merupakan konsep pada OOP yang memungkinkan suatu objek menggunakan metode yang sama namun memiliki implementasi yang berbeda berdasarkan tipe objek yang memanggilnya. Polymorphism dapat digunakan oleh objek meski daro kelas yang berbeda.
```php
class pengguna
{
  public $nama;
  public function aksesFitur()
  {
    return $this->nama;
  }
}
```
Mendeklarasikan class pengguna sebagai kelas induk dengan atribut nama dan metode aksesFitur. aksesFitur mengembalikan nilai dari atribut nama.
```php
class dosen extends pengguna
{
  public $matkul;
  public function aksesFitur()
  {
    return "Nama : $this->nama Mata Kuliah : $this->matkul";

  }
}
```
Kelas dosen mewarisi atribut dan method dari kelas pengguna. 
atribut matkul merupakan atribut tambahan di kelas dosen. metode aksesFitur() menggantikan metode yang sama dikelas induk.

```php
class  Mahasiswa extends pengguna
{
  public $nim;
  public function aksesFitur()
  {
    return "Nama: $this->nama NIM : $this->nim";
  }
}
```
kelas mahasiswa mewarisi atribut dan method dari kelas pengguna. 
atribut nim merupakan atribut tambahan di kelas mahasiswa. metode aksesFitur() menggantikan menggantikan metode yang sama dikelas induk.
``php
$Dsn1 = new dosen();
```
Membuat objek baru bernama Dsn1 dari kelas dosen
```php
$Dsn1->nama = "Ageng" ."<br>";
$Dsn1->matkul= "Sastra Inggris";
echo $Dsn1->aksesFitur();
```
Mengatur nilai atribut nama dan matkul pada objek serta menampilkan informasi objek
```PHP
$Mhs = new Mahasiswa();
```
Membuat objek baru bernama Mhs dari kelas Mahasiswa
```php
$Mhs->nama="Royyan Riski". "<br>";
$Mhs->nim="23090987";
echo $Mhs->aksesFitur();
```
Mengatur nilai atribut nama dan nim serta memanggil metode aksesFitur() untuk menampilkan objek Mhs
### Kode Program
```php
<?php
class pengguna//Deklarasi class
{
  public $nama;
  public function aksesFitur()
  {
    return $this->nama;//Mengembalikan nilai
  }
}

class dosen extends pengguna//Kelas dosen mewarisi kelas pengguna
{
  public $matkul;//Menambah atribut baru matkul
  public function aksesFitur()
  {
    return "Nama : $this->nama Mata Kuliah : $this->matkul";

  }
}

class  Mahasiswa extends pengguna//Buat kelas mahasiswa yang merupakan turunan dari kelas pengguna
{
  public $nim;//menambah atribut
  public function aksesFitur()//mengembalikan nilai
  {
    return "Nama: $this->nama NIM : $this->nim";
  }
}

$Dsn1 = new dosen();//buat objek Dsn1 dibuat dari kelas dosen
//Mengatur nilai atribut
$Dsn1->nama = "Ageng" ."<br>";
$Dsn1->matkul= "Sastra Inggris";
echo $Dsn1->aksesFitur();//menampilkan informasi objek
echo "<br>"."<br>";

$Mhs = new Mahasiswa();//buat objek baru dari kelas Mahasiswa
//Mengatur nilai atribut
$Mhs->nama="Royyan Riski". "<br>";
$Mhs->nim="23090987";
echo $Mhs->aksesFitur();//Menampilkan informasi objek
```
### Output
![output_1](/Dokumentasi/output4.png)
### 5. Abstraction
Konsep pada OOP yang Menyembunyikan detail implementasi yang kompleks dan hanya menampilkan fungsi penting. Tujuan dari abstraction yaitu menyederhanakan kompleksitas suatu fungsi dengan cara hanya menampilkan aspek-aspek yang penting dan menyembunyikan detail implementasi yang tidak perlu.
```php
class dosen extends pengguna
{
  public $NIDN;

}
 
```
Deklarasi class abstract dengan nama  pengguna
```php
public function aksesFitur()
  {
    return "Nama : $this->nama NIDN : $this->NIDN";
  }
``
Method abstract ini dideklarasikan tanpa diimplementasikan dikelas induk, maksudnya kelas turunan wajib mengimplementasikan method ini sesuai dengan kebutuhan
```php
class dosen extends pengguna
{
  public $NIDN;

  public function aksesFitur()
  {
    return "Nama : $this->nama NIDN : $this->NIDN";
  }
}
```
Membuat kelas dosen sebagai turunan dari kelas abstract pengguna artinya kelas dosen mewarisi atribut dan method darai kelas abstract pengguna. 

```php
lass  Mahasiswa extends pengguna
{
  public $nim;
  
  public function aksesFitur()
  {
    return "Nama: $this->nama NIM : $this->nim";
  }
}

```
Kelas mahasiswa mewarisi semua atribut dan method dari kelas pengguna. Atribut NIM bersifat public artinya bisa diakses diluar kelas
```php
$Dsn1 = new dosen();
$Mhs = new Mahasiswa();
```
objek baru dari kelas dosen dan mahasiswa
```php
$Dsn1->nama = "Toto Kusuma". "<br>";
$Dsn1->NIDN="1786524379";
Mhs->nama = "Latif al Fauzan". "<br>";
$Mhs->nim = "24580927";
```
Mengatur nilai atribut
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
  public $nama;//atribut bisa diakses oleh turunannya
 
 abstract public function aksesFitur();//Metode abstract 
  
}

class dosen extends pengguna//Kelas dosen mawarisi kelas pengguna
{
  public $NIDN;//Menambah atribut matkul

  public function aksesFitur()
  {
    return "Nama : $this->nama NIDN : $this->NIDN";
  }
}

class  Mahasiswa extends pengguna//Kelas mahasiswa mewarisi kelas pengguna
{
  public $nim;
  
  public function aksesFitur()
  {
    return "Nama: $this->nama NIM : $this->nim";
  }
}

$Dsn1 = new dosen();//objek dibuat dari kelas dosen
$Dsn1->nama = "Toto Kusuma". "<br>";//Mengatur nama dosen
$Dsn1->NIDN="1786524379"; //Mengatur NIDN
echo $Dsn1->aksesFitur();//Menampilkan hasil metode akses fitur
echo "<br>" . "<br>";

$Mhs = new Mahasiswa();//Buat objek baru
$Mhs->nama = "Latif al Fauzan". "<br>";//Mengatur nama
$Mhs->nim = "24580927";//Mengatur nim
echo $Mhs->aksesFitur();//Menampilkan hasil metode
?>
```
### Output
![output_1](/Dokumentasi/output5.png)


