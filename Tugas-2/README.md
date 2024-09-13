# TUGAS 2
## Penjelasan per file
### 1. File header.php
File ini berfungsi sebagai header dari file semua-data.php dan polymorphism.php yang berisi pembuka tag html dan juga menyimpan code css dan link href untuk dapat mengakses bootstrap.
![alt text]()
### 2. File footer.php
File ini berfungsi sebagai footer dari file semua-data.php dan polymorphism.php yang berisi penutup tag html dan juga menyimpan code script untuk dapat mengakses bootstrap.
![alt text]()
### 3. File libraries.php
File ini berfungsi untuk menyimpan semua code proses dalam program seperti class, method/function, property, dan lain-lain. Bisa dikatakan file ini berisi code backend dari tugas ini.
![alt text]()
### 4. File navbar.php
File ini berisi code untuk membuat navbar, yang dimana saya menggunakan template dari bootstrap untuk membuat navbar. File ini digunakan di file semua-data.php dan polymorphism.php untuk membuat navbar.
![alt text]()
### 5. File semua-data.php
File ini berfungsi untuk menampilkan semua data di database menggunakan code program yang ada di file libraries.php dan menampilkannya di file ini.
![alt text]()
### 6. File polymorphism.php
File ini berfungsi untuk menampilkan semua data student dan semua data student yang memiliki alamat "Binangun" di database menggunakan code program yang ada di file libraries.php dan menampilkannya di file ini.
![alt text]()
## Penjelasan per langkah Tugas 2
### 1. Create an OOP-based View, by retrieving data from the MySQL database.
* Function untuk menampilkan semua data dari table students menggunakan query "SELECT * FROM students"
```php
public function ShowDataStudents() // Function untuk menampilkan semua data dari table students
    {
        if (!$this->link) {
            return $this->error;
        }
        $query = "SELECT * FROM students";
        $result = mysqli_query($this->link, $query);

        if (!$result) {
            return "Query Error: " . mysqli_error($this->link);
        }
        $array = array();
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $array[] = $row;
        }
        return $array;
}
```
* Function untuk menampilkan semua data dari tabel student_classes menggunakan query "SELECT * FROM student_classes"
```php
public function ShowDataStudents(){ // Function untuk menampilkan semua data dari tabel student_classes
        if (!$this->link) {
            return $this->error;
        }
        $query = "SELECT * FROM student_classes";
        $result = mysqli_query($this->link, $query);

        if (!$result) {
            return "Query Error: " . mysqli_error($this->link);
        }
        $array = array();
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $array[] = $row;
        }
        return $array;
}
```
### 2. Use the _construct as a link to the database.
Class Database ini berfungsi sebagai handler untuk mengelola koneksi ke database MySQL. Saat objek dibuat, ia otomatis mencoba menghubungkan ke database, dan jika gagal, pesan error akan disimpan dalam properti $error.
```php
class Database{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbName = "jkb_system";
    public $link;
    public $error;

    public function __construct(){
        $this->dbConnect();
    }
    public function dbConnect(){
        $this->link = mysqli_connect($this->host, $this->user, $this->password, $this->dbName);
        if (!$this->link) {
            $this->error = "Database Connection Failed: " . mysqli_connect_error();
            return false;
        }
        return true;
    }
}
```
### 3. Apply encapsulation according to the logic of the case study.
* Private yang berarti hanya bisa diakses oleh class itu sendiri, yang dimana ada property $host, $user, $password, dan $dbName yang hanya digunakan di class Database untuk menyambungkan koneksi ke database mysql.
* Public yang berarti bisa diakses oleh semua class, yang dimana ada property $link dan $eror yang berfungsi untuk melihat apakah koneksi berhasil atau tidak berhasil.
```php
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbName = "jkb_system";
    public $link;
    public $error;
```
### 4. Create a derived class using the concept of inheritance.
* Class Kelas dan Mahasiswa dibuat dengan menurunkan class Database yang berfungsi agar class Kelas dan Mahasiswa bisa mengakses database menggunakan function koneksi di class Database.
* Class Polymorphism dibuat dengan menurunkan class Kelas yang berfungsi untuk memenuhi task ke-5 yaitu Polymorphism.
```php
class Kelas extends Database{
}
class Mahasiswa extends Database{
}
class polymorphism extends Kelas{
}
```
### 5. Apply polymorphism for at least 2 roles according to the case study
* Function ShowDataStudents() di class Mahasiswa yang berfungsi untuk menampilkan semua dari tabel students.
```php
class Mahasiswa extends Database{
    public function ShowDataStudents()
    {
        if (!$this->link) {
            return $this->error;
        }
        $query = "SELECT * FROM students";
        $result = mysqli_query($this->link, $query);

        if (!$result) {
            return "Query Error: " . mysqli_error($this->link);
        }
        $array = array();
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $array[] = $row;
        }
        return $array;
    }}
```
*  Function ShowDataStudents() di class Polymorphism yang berfungsi untuk menampilkan semua data dari tabel students yang memiliki addresess "Binangun".
```php
class polymorphism extends Kelas{
    public function ShowDataStudents(){
        if (!$this->link) {
            return $this->error;
        }

        $query = "SELECT * FROM students WHERE addressess = 'Binangun'";
        $result = mysqli_query($this->link, $query);

        if (!$result) {
            return "Query Error: " . mysqli_error($this->link);
        }

        $array = array();
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $array[] = $row;
        }
        return $array;
    }
}
```
### OUPUT TUGAS-2
![alt text]()
