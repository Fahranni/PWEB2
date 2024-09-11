<?php 
//Inheritance
class person{//Membuat kelas dengan nama person 
  protected $nama ; //nama sebagai atribut kelas
   public function __construct($nama) {
    $this->nama = $nama;
   }
   public function getName(){
    return $this->nama;
   }
}
class student extends person{
  private $studentID;

  public function __construct($nama, $studentID)
  {
    parent::__construct($nama);
    $this->$studentID = $studentID;
  }
  public function getstudentID()
  {
    return $this->studentID;
  }
}
  //Polymorphism
  class Teacher extends person{
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


?>