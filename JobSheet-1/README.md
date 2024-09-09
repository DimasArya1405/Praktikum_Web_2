# JobSheet-1
### Class
```php
class Hewan
```
Class adalah cetak biru atau template untuk membuat objek. Class mendefinisikan properti dan metode.
### Object
```php
$hewan = new Hewan;
```
Object adalah Instance dari class yang memiliki atribut (properties) dan perilaku (methods).
### Atribut (Properti)
```php
public $makanan;
private $jenis;
protected $tinggi;
```
Atribut adalah variabel yang didefinisikan di dalam sebuah class dalam pemrograman OOP, digunakan untuk menyimpan data atau karakteristik dari sebuah objek. 

* Private: Atribut atau metode hanya dapat diakses dari dalam class itu sendiri.
* Public: Atribut atau metode dapat diakses dari mana saja.
* Protected: Atribut atau metode dapat diakses dari class itu sendiri dan class turunan.
### Methods
```php
public function tampilkanInfo() {
return "Nama: $this->nama, Penulis: $this->penulis";
}
```
Methods dalam OOP adalah fungsi yang didefinisikan di dalam class dan digunakan untuk mendefinisikan perilaku atau aksi yang bisa dilakukan oleh objek yang dibuat dari class tersebut.
### Encapsulation
```php
public $nama;
private $nim;
protected $jurusan;
```
Encapsulation: Menyembunyikan detail implementasi dan hanya memberikan
akses melalui metode tertentu.
### Inheritance
Inheritance: Kelas dapat mewarisi properti dan metode dari kelas lain.
```php
class Dosen extends Pengguna
```
Kelas dosen adalah turunan dari kelas pengguna.
### Polymorphism
Polymorphism: Metode yang sama dapat memiliki implementasi berbeda
dalam class yang berbeda.
```php
class Pengguna {
    protected $nama, $nim, $nip;

    public function aksesFitur(){
        echo "Ini adalah fitur PENGGUNA <br>";
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }
}
class Dosen extends Pengguna{
    public function aksesFitur(){
        echo "Ini adalah fitur DOSEN dengan nama ".$this->getNama()."<br>";
    }
}
```
Method aksesFitur() pada class Pengguna memiliki output "Ini adalah fitur PENGGUNA".
Sedangkan pada class Dosen output nya "Ini adalah fitur DOSEN dengan nama ...".
### Abstraction
Abstraction: Menyembunyikan detail implementasi dan hanya menampilkan
fungsi penting.
```php
abstract class Pengguna {
    protected $nama, $nim, $nip;

    abstract public function aksesFitur();
}
```
class Pengguna tidak bisa menghasilkan object dikarenakan menggunakan abstract.
Method aksesFitur() menggunakan abstract menjadi lebih singkat.
