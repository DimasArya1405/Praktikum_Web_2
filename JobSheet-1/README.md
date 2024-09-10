# Pertemuan 1 - 2
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
# JobSheet-1
### 1. Membuat class dan object
* Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
  ```php
  class Mahasiswa{
      public $nama;
      public $nim;
      public $jurusan;
  }
  ```
* Buat metode tampilkanData() dalam class Mahasiswa.
```php
public function tampilkanData(){
    echo "Nama  : ".$this->nama."<br>";
    echo "Nim  : ".$this->nim."<br>";
    echo "Jurusan  : ".$this->jurusan."<br>";
}
```
* Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
```php
$mhs = new Mahasiswa("Dimas Arya Nugraha","230202033","Komputer dan Bisnis");
echo $mhs->tampilkanData();
```
  
![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/JobSheet-1/img_pweb_2/class%20%26%20object.png)
Output :

![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/JobSheet-1/img_pweb_2/1.png)
### 2. Encapsulation
* Ubah atribut dalam class Mahasiswa menjadi private.
```php
private $nama;
private $nim;
private $jurusan;
```
* Buat metode getter dan setter untuk atribut nama, nim, dan jurusan.
```php
public function setNama($nama){
    $this->nama = $nama;
}
public function getNama(){  
    echo $this->nama;
}
public function setNim($nim){
    $this->nim = $nim;
}
public function getNim(){    
    echo $this->nim;
}
public function setJurusan($jurusan){    
    $this->nim = $jurusan;
}
public function getJurusan(){ 
    echo $this->jurusan;
}
```
* Demonstrasikan akses ke atribut menggunakan metode getter dan setter.
```php
$mhs = new Mahasiswa("Dimas Arya Nugraha","230202033","Komputer dan Bisnis");
echo $mhs->getNama(). "<br>";
echo $mhs->getNim(). "<br>";
echo $mhs->getJurusan(). "<br>";
```

  ![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/JobSheet-1/img_pweb_2/encapsulation.png)
Output :

![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/JobSheet-1/img_pweb_2/2.png)
### 3. Inheritance
* Buat class Pengguna dengan atribut nama dan metode getNama().
```php
class Pengguna{
    public $nama;
    public function __construct($nama){
        $this->nama = $nama;
    }
    public function getNama(){
        return $this->nama;
    }
}
```
* Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut
mataKuliah.
```php
class Dosen extends Pengguna{
    private $mata_kuliah;
    public function __construct($nama,$mata_kuliah){
        parent::__construct($nama);
        $this->mata_kuliah = $mata_kuliah;
    }
    public function getMatkul(){
        return $this->mata_kuliah;
    }
}
```
* Instansiasi objek dari class Dosen dan tampilkan data dosen.
```php
$dosen = new Dosen("Dimas Arya Nugraha","Pemrograman Web");
echo $dosen->getNama(). "<br>";
echo $dosen->getMatkul();
```

  ![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/JobSheet-1/img_pweb_2/inheritance.png)
Output :

![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/JobSheet-1/img_pweb_2/3.png)
### 4. Polymorphism
* Buat class Pengguna dengan metode aksesFitur().
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
```
* Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan
Mahasiswa.
```php
class Dosen extends Pengguna{
    public function aksesFitur(){
        echo "Ini adalah fitur DOSEN dengan nama ".$this->getNama()."<br>";
    }
}
class Mahasiswa extends Pengguna{
    public function aksesFitur(){
        echo "Ini adalah fitur MAHASISWA dengan nama ".$this->getNama()."<br>";
    }
}
```
* Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode
aksesFitur().
```php
$pengguna = new Pengguna();
$pengguna->aksesFitur();

$dosen = new Dosen();
$dosen->setNama("Pak Abda'u");
$dosen->aksesFitur();

$mahasiswa = new Mahasiswa();
$mahasiswa->setNama("Dimas Arya Nugraha");
$mahasiswa->aksesFitur();
```

![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/JobSheet-1/img_pweb_2/polymorphism.png)
Output :

![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/JobSheet-1/img_pweb_2/4.png)
### 5. Abstraction
* Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
```php
abstract class Pengguna {
    protected $nama, $nim, $nip;

    abstract public function aksesFitur();

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }
}
```
* Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan
metode abstrak tersebut.
```php
class Dosen extends Pengguna{
    public function aksesFitur(){
        echo "Ini adalah fitur DOSEN dengan nama ".$this->getNama()."<br>";
    }
}
class Mahasiswa extends Pengguna{
    public function aksesFitur(){
        echo "Ini adalah fitur MAHASISWA dengan nama ".$this->getNama()."<br>";
    }
}
```
* Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang
diinstansiasi.
```php
$dosen = new Dosen();
$dosen->setNama("Pak Abda'u");
$dosen->aksesFitur();

$mahasiswa = new Mahasiswa();
$mahasiswa->setNama("Dimas Arya Nugraha");
$mahasiswa->aksesFitur();
```

![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/JobSheet-1/img_pweb_2/abstract.png)
Output :

![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/JobSheet-1/img_pweb_2/4.png)





  
