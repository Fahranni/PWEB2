<?php 
class BankAccount{//Definisi kelas Bank account
  private $balance;//atribut bersifat private, hanya bisa diakses dalam kelas ini
  
  public function __construct($balance){//Menginisialisasi saldo awal
    $this->balance = $balance;
  }

  public function deposit($amount){//Metode untuk menambah saldo jika jumlah amount lebih besar dari 0
    if ($amount > 0 ){
      $this->balance += $amount;//metode untuk menambah jumlah saldo
    }
  }

  public function withdraw($amount){//Metode mengurangi jumlah saldo jika jumlah yang diambil lebih dari 0 dan tidak lebih dari jumlah saldo yang ada
    if($amount > 0 && $amount <= $this->balance){
      $this->balance -= $amount;//metode untuk mengurangi jumlah saldo
    }
  }

  public function getBalance(){//Mengembalikan nilai saldo
    return $this->balance;
  }
}
$account = new BankAccount(1000);//Membuat objek dengan saldo awal 1000
$account->deposit(500);//menambah 500 ke saldo
$account->withdraw(200);//mengurangi 200 dari saldo
echo "Current Balance". $account->getBalance();//menampilkan jumlah saldo setelah penambahan dan pengurangan
?>