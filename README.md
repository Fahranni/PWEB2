# PWEB2
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
#### 1. Mendeklarasikan kelas dan atributnya
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
### 2. Method untuk menampilkan class
```php
public function tampilkanData(){
  return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
 }
}
```
Metode publik untuk mengembalikan nilai string informasi mengenai mahasiswa dan menggabungkan nilai atribut nama, nim, dan Jurusan.
### 3. Instansiasi objek dari class Mahasiswa dan menampilkan data mahasiswa
```php
$Mahasiswa1 = new Mahasiswa ("Amel Adellia Fahrani" , "230102026" , "Komputer dan Bisnis");
echo $Mahasiswa1->tampilkanData();
?>
```
Membuat instansi objek dari kelas Mahasiswa dengan parameter yang diberikan (nama, nim, dan jurusan). Menampilkan data kelayar dengan echo
![code_1](Dokumentasi/code_1.png)
![output_1](Dokumentasi/output_1.png)
