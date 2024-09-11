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
### 3. Encapsulation (Enkapsilasi)
Enkapsulasi adalah menyembunyikn detail internal dari sebuah objek dan hanya membiarkan interaksi melalui metode publik yang tersedia, hal ini guna menjaga data tetap aman.
```php
class Student
{
  //Atribut kelas 
  private $nama;
  private $studentID;

  public function __construct($nama, $studentID)
  {
    $this->nama = $nama;
    $this->studentID = $studentID;
  }
```
Membuat kelas dengan nama student dan menginisialisasi dengan atribut nama dan studentID yang sudah diset secara privat artinya hanya dapat diakses oleh kelas tersebut.
```php
 public function getNama()
  {
    return $this->nama;
  }
  public function getStudentID()
  {
    return $this->studentID;
  }
```
Metode geter untuk mengambil nilai dari atribut nama dan studentID
```php
public function setNama($nama)
  {
    $this->nama = $nama;
  }
  public function setStudentID($studentID)
  {
    $this->studentID = $studentID;
  }
```
Metode setter untuk mengubah nilai dari atribut nama dan studentID
```php
$student1 = new student("Fanya Asabil", "09090918");
```
Menciptakan objek baru dengan nilai atribut nama "Fanya Asabil" dan ID Student "09090918"
```php
echo"Nama :"." ". $student1->getNama();
echo "<br>";
echo "ID Student : ". " ".$student1->getstudentID();
```
Mengambil nilai dari atribut nama dan studentID untuk ditampilkan
```php
$student1->setNama("Fanya Zaskia"); 
$student1->setStudentID("24527183");
```
Mengubah nilai nama dan StudentID
```php
echo "Nama : ". " ".$student1->getNama();
echo "<br>";
echo "ID Student: ". " ".$student1->getstudentID();
```
Mengambil nilai dan menampilkan nama serta studentID setelah diiubah
#### Kode Program
```php
<?php
class Student//uat kelas dengan nama student
{
  //Atribut kelas 
  private $nama;
  private $studentID;

  public function __construct($nama, $studentID)//menginisialisasi atribut
  {
    $this->nama = $nama;
    $this->studentID = $studentID;
  }
  public function getNama()//mengambil nilai dari atribut privat nama
  {
    return $this->nama;
  }
  public function getStudentID()//mengambil nilai dari atribut privat studentID
  {
    return $this->studentID;
  }
  public function setNama($nama)//Metode mengubah nilai atribut nama
  {
    $this->nama = $nama;
  }
  public function setStudentID($studentID)//mengubah nilai atribut studentID
  {
    $this->studentID = $studentID;
  }
}
$student1 = new student("Fanya Asabil", "09090918");//Menciptakan objek dadi kelas student
//Memanggil metode untuk menampilkan nilai atribut 
echo "Sebelum Setter";
echo "<br>";
echo"Nama :"." ". $student1->getNama();//mengambil nilai atribut nama
echo "<br>";
echo "ID Student : ". " ".$student1->getstudentID();//mengambil nilai atribut studentID

echo "<br>";
echo "<br>";

$student1->setNama("Fanya Zaskia"); //Setter, mengubah nilai nama
$student1->setStudentID("24527183");

//Memanggil metode get untuk menampilkan nilai atribut setelah diubah
echo "Setelah Setter";
echo "<br>";
//Mengambil nilai
echo "Nama : ". " ".$student1->getNama();
echo "<br>";
echo "ID Student: ". " ".$student1->getstudentID();
?>
```
#### Output
![output_2](/Dokumentasi/output_10.png)
### 4. Abstraction
Proses menyembunyikan detail implemntasi internal dan hanya menampilkan fungsionalitas utama.
```php
bstract class Course 
{
  abstract public function getCourseDetails();

}

```
Membuat kelas abstrak dengan nama Course dan metodenya getCourseDetail().
```php
class onlineCourse extends course 
{
  private $nama; 
  private $modul;

  public function __construct($nama, $modul)
  {
    
    $this->nama= $nama;
    $this->modul = $modul;
  }
  public function getCourseDetails()
  {
    return "Nama : $this->nama Modul : $this->modul";
  }
}
```
Membuat kelas turunan dari Course dengan nama getCourseDetail dan atributnya nama dan modul
```php
class  OfflineCourse extends Course 
{
  private $nama;
  private $matkul;

  public function __construct($nama, $matkul)
  {
    //Menginisialisasi atribut nama
    $this->nama = $nama;
    $this->matkul = $matkul;
  }
  public function getCourseDetails()
  {
    return "Nama: $this->nama Matkul: $this->matkul";
  }
}
```
Membuat Kelas turunan dari corse dengan namOfflineCourse dan atributnya serta dengan metodenya
```php
$online = new onlineCourse("Ageng Wahyudi <br>", "Pemrograman<br>"); 
$offline = new offlineCourse("Amel Adellia Fahrani<br>", "Bahasa Inggris");
```
Membuat objek dari kedua kelas tersebut
```php
echo $online->getCourseDetails();
echo $offline->getCourseDetails();
```
Memanggil metode dan menampilkan nilanya
#### Kode Program
```php
<?php
abstract class Course //Deklarasi class abstract
{
  abstract public function getCourseDetails(); //Metode abstract

}

class onlineCourse extends course //Kelas dosen mawarisi kelas pengguna
{
  private $nama; //Menambah atribut matkul
  private $modul;

  public function __construct($nama, $modul)
  {
    //Menginisialisasi atribut nama
    $this->nama= $nama;
    $this->modul = $modul;
  }
  public function getCourseDetails()
  {
    return "Nama : $this->nama Modul : $this->modul";
  }
}

class  OfflineCourse extends Course //Kelas mahasiswa mewarisi kelas pengguna
{
  private $nama;
  private $matkul;

  public function __construct($nama, $matkul)
  {
    //Menginisialisasi atribut nama
    $this->nama = $nama;
    $this->matkul = $matkul;
  }
  public function getCourseDetails()
  {
    return "Nama: $this->nama Matkul: $this->matkul";
  }
}

$online = new onlineCourse("Ageng Wahyudi <br>", "Pemrograman<br>"); //objek dibuat dari kelas dosen
$offline = new offlineCourse("Amel Adellia Fahrani<br>", "Bahasa Inggris"); //objek dibuat dari kelas mahasiswa
echo $online->getCourseDetails();
echo "<br>";
echo $offline->getCourseDetails();
?>
```
#### Output
![output_2](/Dokumentasi/output_11.png)
## Tugas
### 1. Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.
```php
class person
{ //Membuat kelas dengan nama person 
  protected $nama; //nama sebagai atribut kelas
  public function __construct($nama)
  {
    $this->nama = $nama;
  }
  public function getName()
  {
    return $this->nama;
  }
  public function getrole(){
    return "belum diketahui";
  }
}
```
Membuat kelas person sebagai kelas induk dengan atribut nama yang bersifat protected artinya bisa diakses kelas person dan kelas turunannya.
Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya.
### 2. Gunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan
```php
class Dosen extends person
{
  private $NIDN;

  public function __construct($nama, $NIDN)
  {
    parent::__construct($nama);
    $this->NIDN = $NIDN;
  }
  public function getNIDN()
  {
    return $this->NIDN;
  }
```
Membuat kelas dosen sebagai turunan dari kelas person dan menambah atribut NIDN 
```php
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
```
Membuat kelas Mahasiswa sebagai turunan dari kelas person dan menambah atribut NIM yang bersifat privat artinya hanya bisa diakses oleh kela itu sendiri.
### 3. Terapkan Polymorphism dengan membuat metode getRole() di kelas Person danoverride metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang berbeda.
```php
 public function getrole(){
    return "Dosen";
  }
```
Mengatur role dosen sebagai dosen
```php
 public function getrole(){
    return "Mahasiswa";
  }
```
Mengatur role mahasiswa sebagai mahasiswa
### 4. Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim dikelas Mahasiswa.
```php
class Dosen extends person
{
  private $NIDN;
```
NIDN bersifat privat artinya hanya dapat diakses oleh kelas dossen
```php
class Mahasiswa extends person
{
  private $NIM;
```
NIM bersifat privat, artinya hanya dapat diakses oleh kelas mahasiswa
### 5. Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing memiliki cara tersendiri untuk mengelola pengajuan jurnal.
```php
abstract class Jurnal
{
  protected $judul; 
  public function __construct($judul)
  {
    $this->judul = $judul;
  }
  abstract public function getPengajuan();
}
```
Buat kelas abstrak Jurnal dengan atribut Judul yang bersifat protected dan metodenya getPengajuan
```php
class JurnalDosen extends Jurnal 
{
  public function __construct($judul)
  {
    parent::__construct($judul);
  }
  public function getPengajuan()
  {
    return $this->judul;
  }
}
```
Membuat kelas JurnalDosen yang mewarisi atribut dan metode dari kelas Jurnal
```php
class JurnalMahasiswa extends Jurnal 
{
  public function __construct($judul)
  {
    parent::__construct($judul); 
  }
  public function getPengajuan()
  {
    return $this->judul;
  }
}
```
Membuat kelas JurnalMahasiswa yang mewarisi atribut dan metode dari kelas Jurnal
```php
$Dosen1 = new Dosen("Tatang Agus", "179072534143");
```
Membuat objek baru Dosen1 dari kelas dosen dan mengisi nilainya.
```php
$Mahasiswa1 = new Mahasiswa("Feby Putri", "256175272");
```
Membuat objek baru Mahasiswa1 dari kelas Mahasiswa dan mengisi nilainya.
```php
$JurnalDosen1 = new JurnalDosen("Pemrograman");
```
Membuat objek baru JurnalDosen1 dari kelas JurnalDosen dan mengisi nilainya.
```php
$JurnalMahasiswa1 = new JurnalMahasiswa ("Teknologi informasi");
```
Membuat objek baru JurnalMahasiswa1 dari kelas JurnalMahasiswa dan mengisi nilainya.
```php
echo "Nama Dosen : " . $Dosen1->getName(). "<br>"."NIDN :".$Dosen1->getNIDN(). "<br>". "Pengajuan Judul Jurnal :".$JurnalDosen1->getPengajuan();
echo "Nama Mahasiswa : " . $Mahasiswa1->getName() . "<br>" . "NIM :" . $Mahasiswa1->getNIM() . "<br>" . "Pengajuan Judul Jurnal :" . $JurnalMahasiswa1->getPengajuan();
```
Menampilkan nilai dari atribut dengann memanggil metodenya
#### Kode Program
```php
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
echo "Nama Dosen : " . $Dosen1->getName(). "<br>"."NIDN :".$Dosen1->getNIDN(). "<br>". "Pengajuan Judul Jurnal :".$JurnalDosen1->getPengajuan();
echo "<br>";
echo "<br>";
echo "Nama Mahasiswa : " . $Mahasiswa1->getName() . "<br>" . "NIM :" . $Mahasiswa1->getNIM() . "<br>" . "Pengajuan Judul Jurnal :" . $JurnalMahasiswa1->getPengajuan();
?>
```
#### Output
![output_2](/Dokumentasi/output_12.png)









