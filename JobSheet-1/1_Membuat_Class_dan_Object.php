<?php

class Mahasiswa{    // Membuat kelas mahasiswa

    protected $nama;    // Membuat atribut
    protected $nim;     // Protected berarti bisa diakses oleh kelas itu sendiri dan kelas turunan nya
    protected $jurusan;

    public function __construct($nama,$nim,$jurusan){   // Menginisialisasi variabel nama, nim, dan jurusan
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData(){    // Membuat function untuk menampilkan data
        echo "Nama  : ".$this->nama."<br>";
        echo "Nim  : ".$this->nim."<br>";
        echo "Jurusan  : ".$this->jurusan."<br>";
    }
}

$mhs = new Mahasiswa("Dimas Arya Nugraha","230202033","Komputer dan Bisnis");   // Mengisi data
echo $mhs->tampilkanData(); // Menampilkan data

?>