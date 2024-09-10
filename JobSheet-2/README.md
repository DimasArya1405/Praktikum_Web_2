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







