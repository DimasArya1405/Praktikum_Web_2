<?php

// Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
class Mahasiswa{
    public $nama;
    public $nim;
    public $jurusan;

    // Buat metode tampilkanData() dalam class Mahasiswa.
    public function tampilkanData(){
        return $this->nama;
    }
}
// Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
$mahasiswa = new Mahasiswa();
echo $mahasiswa->tampilkanData();

?>