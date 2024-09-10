<?php

class Mahasiswa{
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama,$nim,$jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    
    // Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
    public function setNim($nim){
        $this->nim = $nim;
    }

    public function tampilkanData(){
        return "Nama : " .$this->nama. "<br> NIM : " .$this->nim. "<br> Jurusan : " .$this->jurusan;
    }
}

$mahasiswa = new Mahasiswa("Dimas Arya Nugraha","230202033","Komputer dan Bisnis");
// Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode tampilkanData().
$mahasiswa->setNim("230202059");
echo $mahasiswa->tampilkanData();

?>