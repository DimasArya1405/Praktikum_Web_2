# Pertemuan 5 - 6
### 1. Inheritance
Inheritance adalah konsep di mana sebuah kelas dapat mewarisi atribut dan
metode dari kelas lain. Ini memungkinkan penggunaan kembali kode dan
menciptakan hubungan hierarkis antara kelas.
```php
class Animal {
protected $name;
public function __construct($name) {
$this->name = $name;
}
public function getName() {
return $this->name;
}
}
class Dog extends Animal {
public function makeSound() {
return "Woof!";
}
}
class Cat extends Animal {
public function makeSound() {

return "Meow!";
}
}
$dog = new Dog("Buddy");
echo $dog->getName() . " says " . $dog->makeSound();
```
Penjelasan :
Kelas Dog dan Cat mewarisi sifat (name) dari kelas Animal dan dapat memiliki
metode tambahan (makeSound()).
### 2. Polymorphism
Polymorphism memungkinkan satu metode untuk memiliki banyak bentuk,
biasanya melalui metode overriding di kelas turunan. Dengan ini, objek dapat
diperlakukan sebagai bentuk umum dan khusus sesuai kebutuhan.
```php
class Printer {
public function print(Animal $animal) {
echo $animal->getName() . " says " . $animal->makeSound() . "<br>";
}
}
$dog = new Dog("Buddy");
$cat = new Cat("Kitty");
$printer = new Printer();
$printer->print($dog); // Output: Buddy says Woof!
$printer->print($cat); // Output: Kitty says Meow!
```
Penjelasan :
Metode print() di kelas Printer dapat menerima objek dari kelas Animal atau
turunannya (Dog atau Cat), menunjukkan bagaimana metode ini bekerja secara
berbeda berdasarkan objek yang diterima.
### 3. Encapsulation
Encapsulation menyembunyikan detail internal dari sebuah objek dan hanya
membiarkan interaksi melalui metode publik yang tersedia, menjaga data internal tetap aman dari perubahan tak terduga.
```php
<?php
class BankAccount {
private $balance;
public function __construct($balance) {
$this->balance = $balance;
}

public function deposit($amount) {
if ($amount > 0) {
$this->balance += $amount;
}
}
public function withdraw($amount) {
if ($amount > 0 && $amount <= $this->balance) {
$this->balance -= $amount;
}
}
public function getBalance() {
return $this->balance;
}
}
$account = new BankAccount(1000);
$account->deposit(500);
$account->withdraw(200);
echo "Current Balance: " . $account->getBalance(); // Output: Current Balance:1300
```
Penjelasan:
Atribut balance di kelas BankAccount dienkapsulasi dengan tingkat akses private, dan interaksi hanya dilakukan melalui metode deposit(), withdraw(), dan
getBalance().
### 4. Abstraction
Abstraction adalah proses menyembunyikan detail implementasi internal dan
hanya menampilkan fungsionalitas utama kepada pengguna. Ini biasanya dicapai
dengan menggunakan kelas abstrak atau antarmuka.
```php
abstract class Shape {
abstract public function area();
}
class Rectangle extends Shape {
private $width;
private $height;
public function __construct($width, $height) {
$this->width = $width;
$this->height = $height;
}
public function area() {
return $this->width * $this->height;
}
}
class Circle extends Shape {
private $radius;
public function __construct($radius) {
$this->radius = $radius;
}
public function area() {
return pi() * pow($this->radius, 2);
}
}
$rectangle = new Rectangle(5, 10);
echo "Area of Rectangle: " . $rectangle->area(); // Output: Area of Rectangle:
50
$circle = new Circle(7);
echo "Area of Circle: " . $circle->area(); // Output: Area of Circle:153.9380400259
```
Penjelasan:
Kelas abstrak Shape mendefinisikan metode area() yang harus diimplementasikan
oleh kelas turunan seperti Rectangle dan Circle.
# JobSheet-3
### 1. Inheritance
* Buat kelas Person dengan atribut name dan metode getName().
```php
class Person{ // 1. Buat kelas Person dengan atribut name dan metode getName().
    protected $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}
```
* Buat kelas Student yang mewarisi dari Person dan tambahkan atribut studentID serta metode getStudentID().
```php
class Student extends Person{
    private $studentID;
    public function __construct($name, $studentID){
        parent::__construct($name);
        $this->studentID = $studentID;
    }
    public function getStudentID(){
        return $this->studentID;
    }
}
```
* Code program :
![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/Jobsheet-3/Img%20JobSheet-3/1-code.png)
* Output Program
![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/Jobsheet-3/Img%20JobSheet-3/1-Output.png)
### 2. Polymorphism
* Buat kelas Teacher yang juga mewarisi dari Person dan tambahkan atribut
teacherID.
```php
class Teacher extends Person{
    private $teacherID;
}
```
* Override metode getName() di kelas Student dan Teacher untuk menampilkan
format berbeda.
```php
class Student extends Person{ 
    private $studentID;
    public function __construct($name, $studentID){
        parent::__construct($name);
        $this->studentID = $studentID;
    }
    public function getName(){
        return $this->name;
    }
    public function getStudentID(){
        return $this->studentID;
    }
}
class Teacher extends Person{
    private $teacherID;
    public function __construct($name, $teacherID){
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }
    public function getName(){
        return $this->name;
    }
}
```
* Code program :
![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/Jobsheet-3/Img%20JobSheet-3/1-code.png)
* Output :
![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/Jobsheet-3/Img%20JobSheet-3/1-Output.png)
### 3. Encaplusation
* Ubah atribut name dan studentID dalam kelas Student menjadi private.
```php
private $name;
private $studentID;
```
* Tambahkan metode setter dan getter untuk mengakses dan mengubah nilai  atribut name dan studentID.
```php
public function setName($name){ // Menambah set studentID dan set name.
  $this->name = $name;
}
public function getName(){
  return $this->name;
}
public function setStudentID($studentID){
  $this->studentID = $studentID;
}
public function getStudentID(){
  return $this->studentID;
}
```
* Code program
![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/Jobsheet-3/Img%20JobSheet-3/3-code.png)
* Output :
![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/Jobsheet-3/Img%20JobSheet-3/3-Output.png)
### 4. Abstraction
* Buat kelas abstrak Course dengan metode abstrak getCourseDetails().
```php
abstract class course{
    abstract function getCourseDetail();
}
```
* Buat kelas OnlineCourse dan OfflineCourse yang mengimplementasikan  getCourseDetails() untuk memberikan detail yang berbeda.
```php
class OnlineCourse extends course{
    function getCourseDetail(){
        echo "Ini adalah Online Course";
    }
}
class OfflineCourse extends course{
    function getCourseDetail(){
        echo "Ini adalah Offline Course";
    }
}
```
* Code progaram
![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/Jobsheet-3/Img%20JobSheet-3/4-code.png)
* Output :
![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/Jobsheet-3/Img%20JobSheet-3/4-Output.png)
# Tugas
### 1. Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.
```php
class Dosen extends Person{
}
class Mahasiswa extends Person{
}
```
### 2. Gunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya.
```php
class Mahasiswa extends Person{
    private $nim;
    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }
}
class Dosen extends Person{
    private $nidn;
    public function __construct($nama, $nidn) {
        parent::__construct($nama);
        $this->nidn = $nidn;
    }
}
```
### 3. Terapkan Polymorphism dengan membuat metode getRole() di kelas Person dan override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang berbeda.
```php
class Person{
   public function getRole(){
        return "Person";
    }
}
class Mahasiswa extends Person{
   public function getRole(){
        return "Mahasiswa";
    }
}
class Dosen extends Person{
   public function getRole(){
        return "Dosen";
    }
}
```
### 4. Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di kelas Mahasiswa.
```php
  private $nim;
  private $nidn;
```
### 5. Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing memiliki cara tersendiri untuk mengelola pengajuan jurnal.
```php
abstract class Jurnal{
    abstract function pengajuanJurnal();
}
class JurnalDosen extends Jurnal{
    public function pengajuanJurnal(){
        echo "Pengajuan Jurnal Oleh Dosen";
    }
}
class JurnalMahasiswa extends Jurnal{
    public function pengajuanJurnal(){
        echo "Pengajuan Jurnal Oleh Mahasiswa";
    }
}
```
### 5. Code Program:
![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/Jobsheet-3/Img%20JobSheet-3/5-Code-Tugas.png)
### 6. Output
![alt text](https://github.com/DimasArya1405/Praktikum_Web_2/blob/main/Jobsheet-3/Img%20JobSheet-3/5-Tugas.png)





