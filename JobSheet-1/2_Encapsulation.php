<?php

class Mahasiswa{    // Membuat kelas mahasiswa

    private $nama;  // Membuat atribut variabel
    private $nim;   // Private berarti hanya bisa diakses oleh kelas itu sendiri 
    private $jurusan;

    public function __construct($nama, $nim, $jurusan){     // Menginisialisasi variabel
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function setNama($nama){     // Mengisi variabel nama
        $this->nama = $nama;
    }

    public function getNama(){      // Mengambil isi dari variabel nama
        echo $this->nama;
    }

    public function setNim($nim){   // Mengisi variabel nim
        $this->nim = $nim;
    }

    public function getNim(){       // Mengambil isi dari variabel nim
        echo $this->nim;
    }

    public function setJurusan($jurusan){       // Mengisi variabel jurusan
        $this->nim = $jurusan;
    }

    public function getJurusan(){   // Mengambil isi dari variabel jurusan
        echo $this->jurusan;
    }

}

$mhs = new Mahasiswa("Dimas Arya Nugraha","230202033","Komputer dan Bisnis");   // Mengisi data
echo $mhs->getNama(). "<br>";
echo $mhs->getNim(). "<br>";
echo $mhs->getJurusan(). "<br>";

?>