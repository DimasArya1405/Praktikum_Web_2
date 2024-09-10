# Pertemuan 3 - 4
### Class
```php
class Mobil
```
* Struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki  oleh objek.
* Atribut atau properties adalah variabel yang menyimpan data untuk objek.
* Metode adalah fungsi yang ditentukan dalam kelas yang dapat dipanggil oleh  objek.
### Object
```php
$mobil = new Mobil();
```
* Instansiasi dari kelas.
* Memiliki akses ke atribut dan metode yang didefinisikan dalam kelas.
### Atribut
Atribut: Menyimpan data atau keadaan dari objek. 
```php
public $judul; 
public $penulis; 
```
### Method
Metode: Operasi atau fungsi yang dilakukan oleh objek. 
```php
public function __construct($judul, $penulis) { 
$this->judul = $judul; 
$this->penulis = $penulis; 
} 
```
Aksesibilitas :
* Public: Dapat diakses dari mana saja.
* Private: Hanya dapat diakses dalam kelas itu sendiri.
* Protected: Dapat diakses oleh kelas itu sendiri dan kelas turunan.

# JobSheet-2
### 1. Membuat Class dan Object
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
        return $this->nama;
    }
}
```
* Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
```php
$mahasiswa = new Mahasiswa();
echo $mahasiswa->tampilkanData();
```
### 2. Implementasi Constructor
* Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi
atribut nama, nim, dan jurusan.
```php
public function __construct($nama,$nim,$jurusan){
  $this->nama = $nama;
  $this->nim = $nim;
  $this->jurusan = $jurusan;
}
```
* Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.
```php
$mahasiswa = new Mahasiswa("Dimas Arya Nugraha","230202033","Komputer dan Bisnis");
echo $mahasiswa->tampilkanData();
```
### 3. Membuat Metode Tambahan
* Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan
perubahan jurusan.
```php
public function UpdateJurusan($jurusan){
  $this->jurusan = $jurusan;
}
```
* Gunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.
```php
$mahasiswa = new Mahasiswa("Dimas Arya Nugraha","230202033","Komputer dan Bisnis");
echo $mahasiswa->tampilkanData();
echo "<br>";
$mahasiswa->UpdateJurusan("Elektro");
echo "Setelah jurusan di update";
echo $mahasiswa->tampilkanData();
```
#### 4. Penggunaan Atribut dan Metode
* Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
```php
public function setNim($nim){
  $this->nim = $nim;
}
```
* Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode
tampilkanData().
```php
$mahasiswa = new Mahasiswa("Dimas Arya Nugraha","230202033","Komputer dan Bisnis");
// Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode tampilkanData().
$mahasiswa->setNim("230202059");
echo $mahasiswa->tampilkanData();
```
# Tugas
### 1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
```php
class Dosen{
    public $nama;
    public $nip;
    public $mataKuliah;

    public function __construct($a, $b, $c){
        $this->nama = $a;
        $this->nip = $b;
        $this->mataKuliah = $c;
}
```
### 2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
```php
public function tampilkanDosen(){
        return "NIP : " .$this->nip. "<br>Nama : ".$this->nama. "<br>Mata   Kuliah : ".$this->mataKuliah."<br>";
}
```
### 3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk menampilkan informasi tersebut.
```php
$dosen = new Dosen("12345","Dimas Arya Nugraha","Pemrograman Web");
echo $dosen->tampilkanDosen();
```



  







