## Jobsheet 3 (Modul 3-4) : Menerapkan konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction dalam PHP
### 1. Inheritance (Pewarisan)
Konsep Dimana sebuah kelas mewarisi atribut dan metode dari kelas lain.
```php
class person
{ //Membuat kelas dengan nama person 
  protected $nama; 
  public function __construct($nama)
  {
    $this->nama = $nama;
  }
```
Code diatas adalah membuat kelas person sebagai kelas induk dengan atribut nama. Atribut nama bersifat "protected" artinya hanya bisa diakses oleh kelas peson dan kelas turunannya.
```php
public function getName()//mengambil nilai nama
  {
    return $this->nama;
  }
```
Metode khusus yang dijalankan saat objek dari sebuah kelas dibuat. Atribut akan diisi dengan nilai yang diberikan ketika objek diciptakan.
```php
class student extends person
{
  private $studentID;
```
Membuat kelas turunan dari kelas person dengan nama student dengan StudentID sebagai atribut. Atribut bersifat "privat" maka hanya bisa diakses oleh kelas student.
```php
 public function __construct($nama, $studentID)//Menyimpan nilai dari dua parameter
  {
    parent::__construct($nama);
    $this->studentID = $studentID;
  }
```
Dengan metode ini memberikan nilai awal pada atribut.
```php
public function getstudentID()//mengembalikan nilai atribut
  {
    return $this->studentID;
  }
```
Mengembalikan nilai dari atribut nama
```php
$studentID1 = new student ("Yogi Gunawan", "67699090");
```
Membuat objek baru dari kelas student dan mengisi nilainya
```php
echo "Nama : ". $studentID1->getName();
echo "ID Student :"." ". $studentID1->getstudentID();
```
Memanggil method dari kelas person dan student untuk menampilkan nilai yang sudah disimpan.
#### Kode Program
```php
<?php
class person
{ //Membuat kelas dengan nama person 
  protected $nama; //nama sebagai atribut kelas yang bisa diakses oleh kelas itu sendiri dan turunannya
  public function __construct($nama)//method otomatis saat objek dibuat
  {
    $this->nama = $nama;
  }
  public function getName()//mengambil nilai nama
  {
    return $this->nama;
  }
}
class student extends person//membuat kelas turunan dari kelas person
{
  private $studentID;//Menambah atribut 

  public function __construct($nama, $studentID)//Menyimpan nilai dari dua parameter
  {
    parent::__construct($nama);
    $this->studentID = $studentID;
  }
  public function getstudentID()//mengembalikan nilai atribut
  {
    return $this->studentID;
  }
}
$studentID1 = new student ("Yogi Gunawan", "67699090");//membuat objek baru dari atribut student
echo "Nama : ". $studentID1->getName();//memanggil method dari kelas person untuk menampilkan nama
echo "<br>";
echo "ID Student :"." ". $studentID1->getstudentID();//memanggil method dari kelas student untuk menampilkan ID student
```
#### Output
![output_2](/Dokumentasi/output_8.png)
?>
```
