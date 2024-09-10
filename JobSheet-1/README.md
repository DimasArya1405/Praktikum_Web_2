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
* Buat metode tampilkanData() dalam class Mahasiswa.
* Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
  
![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/JobSheet-1/img_pweb_2/class%20%26%20object.png)
Output :

![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/JobSheet-1/img_pweb_2/1.png)
### 2. Encapsulation
* Ubah atribut dalam class Mahasiswa menjadi private.
* Buat metode getter dan setter untuk atribut nama, nim, dan jurusan.
* Demonstrasikan akses ke atribut menggunakan metode getter dan setter.

  ![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/JobSheet-1/img_pweb_2/encapsulation.png)
Output :

![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/JobSheet-1/img_pweb_2/2.png)
### 3. Inheritance
* Buat class Pengguna dengan atribut nama dan metode getNama().
* Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut
mataKuliah.
* Instansiasi objek dari class Dosen dan tampilkan data dosen.

  ![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/JobSheet-1/img_pweb_2/inheritance.png)
Output :

![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/JobSheet-1/img_pweb_2/3.png)
### 4. Polymorphism
* Buat class Pengguna dengan metode aksesFitur().
* Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan
Mahasiswa.
* Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode
aksesFitur().

![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/JobSheet-1/img_pweb_2/polymorphism.png)
Output :

![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/JobSheet-1/img_pweb_2/4.png)
### 5. Abstraction
* Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
* Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan
metode abstrak tersebut.
* Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang
diinstansiasi.

![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/JobSheet-1/img_pweb_2/abstract.png)
Output :

![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/JobSheet-1/img_pweb_2/4.png)





  
