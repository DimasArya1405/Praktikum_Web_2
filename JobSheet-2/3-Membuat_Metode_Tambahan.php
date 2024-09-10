<?php

class Mahasiswa{
    public $nama;
    public $nim;
    public $jurusan;

    // Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi atribut nama, nim, dan jurusan.
    public function __construct($nama,$nim,$jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData(){
        return "Nama : " .$this->nama. "<br> NIM : " .$this->nim. "<br> Jurusan : " .$this->jurusan;
    }
}

// Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.
$mahasiswa = new Mahasiswa("Dimas Arya Nugraha","230202033","Komputer dan Bisnis");
echo $mahasiswa->tampilkanData();

?>