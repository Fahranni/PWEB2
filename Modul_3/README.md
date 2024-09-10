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
?>
```
#### Output
![output_2](/Dokumentasi/output_8.png)
### 1. Polymorphism (Polimorfisme)
Polymorphism memungkinkan satu metoden memiliki banyak bentuk.
```php
class person
{
  protected $nama;
```
Membuat kelas person sebagai kelas induk dengan atribut nama
```php
public function __construct($nama)//Menerima satu parameter nama
  {
    $this->nama = $nama;//menyimpan nilai
  }
  public function getName()//mengembalikan nilai atribut nama
  {
    return $this->nama;
  }
```
Constructor ini memanggil parent::__construct($nama) untuk menginisialisasi atribut $nama dari kelas induk person.
```php
class Teacher extends person
{
  private $teacherID;

  public function __construct($nama, $teacherID)
  {
    parent::__construct($nama);
    $this->$teacherID = $teacherID;
  }
  public function getName()
  {
    return $this->nama;
  }
}
```
Buat kelas teacher yang mewarisi atribut dan method dari kelas person dengan menambahkan atribut teacherID.
```php
class student extends person//Membuat kelas turunan
{
  private $studentID;//menambah atribut

  public function __construct($nama, $studentID)
  {
    parent::__construct($nama);
    $this->$studentID = $studentID;
  }
  public function getName()
  {
    return $this->nama;
  }
}
```
Membuat kelas student yang juga kelas turunan dari kelas person, dalam kela strudent ditambah atribut studentID yang bersifat prifat artinya hanya bisa diakses kelas itu saja.
```php
$teacher1 = new Teacher("Fadilah Tri Hastuty ", "0092"); //objek teacher1 dibuat dari kelas teacher
$student1 = new student("Faisal Damar", "11239"); //objek student1 dibuat dari kelas student
```
Membuat objek baru
```php
echo "Nama :". $teacher1->getName();
echo "Nama :". $student1->getName();
```
Mengembalikan nilai atributdan menampilkan
#### Kode Program
```php
<?php
//Polymorphism
class person
{ //Membuat kelas dengan nama person sebagai kelas induk
  protected $nama; //nama sebagai atribut kelas
  public function __construct($nama)//Menerima satu parameter nama
  {
    $this->nama = $nama;//menyimpan nilai
  }
  public function getName()//mengembalikan nilai atribut nama
  {
    return $this->nama;
  }
}
class Teacher extends person//Membuat kelas turunan 
{
  private $teacherID;//Menambah atribut kelas

  public function __construct($nama, $teacherID)//Menerima dua patameter
  {
    parent::__construct($nama);
    $this->$teacherID = $teacherID;
  }
  public function getName()//Mengembalikan nilai
  {
    return $this->nama;
  }
}
class student extends person//Membuat kelas turunan
{
  private $studentID;//menambah atribut

  public function __construct($nama, $studentID)
  {
    parent::__construct($nama);
    $this->$studentID = $studentID;
  }
  public function getName()
  {
    return $this->nama;
  }
}

$teacher1 = new Teacher("Fadilah Tri Hastuty ", "0092"); //objek teacher1 dibuat dari kelas teacher
$student1 = new student("Faisal Damar", "11239"); //objek student1 dibuat dari kelas student
//Memanggil metode 
echo "Nama :". $teacher1->getName();//mengembalikan nilai atribut dan menampilkan
echo "<br>";
echo "Nama :". $student1->getName();

 ?>
```
#### Output
![output_2](/Dokumentasi/output_9.png)

