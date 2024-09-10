
## Jobsheet 2 (Modul 3-4)
### 1. Membuat class dan object
```php
class Mahasiswa
{ 
  public $nama;
  public $nim;
  public $jurusan;
```
Deklarasikan kelas dengan nama Mahasiswa dengan atributnya yang bersifat publik berarti bisa diakses diluar kelas mahasiswa
```php
public function __construct($nama, $nim, $jurusan)
  { //Menginisialisasi atribut kelas dan memberikan nilai
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
  }
```
Menginisialisasi atribut yang ada pada kelas mahasiswa yakni nama,nim,jurusan, dan digunakan untuk menyimpan nilai

```php
public function tampilkanData()
  { 
    return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
  }
```
Mengembalikan nilai dari kelas mahasiswa. Metode tampilData mengakses atribut nama,NIM, Jurusan dari objek tersebut.
```php
public function updateJurusan($jurusan){
    $this->jurusan = $jurusan;
  }
```
Metode untuk mengubah nilai jurusan setelah objek dibuat. akan mengupdate nilai Jurusan yang baru
```php
public function setNIM($nim)
  {
    $this->nim = $nim;
  }
```
Metode untuk mengubah nilai NIM setelah objek dibuat.

```php
Mahasiswa1 = new Mahasiswa("Fahri Fauzan", "23034567", "Kesehatan");
```
Membuat objek baru dengan nama Mahasiswa1 dari kelas Mahasiswa dengan nama "Fahri Fauzan" , NIM "23034567" dari Jurusan "Kesehatan"
```php
echo $Mahasiswa1->tampilkanData();
```
Memanggil metode tampildata() dari objek mahasiswa1 dan menampilkan hasilnya menggunakan echo
```php
echo $Mahasiswa1->updateJurusan("Komunikasi<br>");
```
Mengubah nilai jurusan dari Kesehatan menjadi Komunikasi
```php
echo $Mahasiswa1->tampilkanData();
```
Menampilkan data setelah nilai jurusan diupdate/diganti
```php
$Mahasiswa1->setNIM("230102011");
```
Mengubah nilai NIM dari 23034567 menjadi 230102011
```php
echo $Mahasiswa1->tampilkanData();//Menampilkan data
```
Menampilkan data setelah diubah
#### Skrip Program
```php
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
echo $Mahasiswa1->tampilkanData(); //Memanggil metode tampildata() dari objek mahasiswa1 dan menampilkan hasilnya menggunakan echo
echo $Mahasiswa1->updateJurusan("Komunikasi<br>");//Mengubah nilai jurusan
echo "<br>";
echo "<br>";
echo $Mahasiswa1->tampilkanData();//Menampilkan data setelah dirubah
echo "<br>";
$Mahasiswa1->setNIM("230102011");//Mengubah nilai nim
echo $Mahasiswa1->tampilkanData();//Menampilkan data
```
#### Output
