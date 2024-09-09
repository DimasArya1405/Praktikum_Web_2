<?php

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

class Mahasiswa extends Pengguna{
    public function aksesFitur(){
        echo "Ini adalah fitur MAHASISWA dengan nama ".$this->getNama()."<br>";
    }
}

$pengguna = new Pengguna();
$pengguna->aksesFitur();

$dosen = new Dosen();
$dosen->setNama("Pak Abda'u");
$dosen->aksesFitur();

$mahasiswa = new Mahasiswa();
$mahasiswa->setNama("Dimas Arya Nugraha");
$mahasiswa->aksesFitur();

?>
