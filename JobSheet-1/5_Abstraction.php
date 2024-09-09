<?php

abstract class Pengguna {
    protected $nama, $nim, $nip;

    abstract public function aksesFitur();

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

$dosen = new Dosen();
$dosen->setNama("Pak Abda'u");
$dosen->aksesFitur();

$mahasiswa = new Mahasiswa();
$mahasiswa->setNama("Dimas Arya Nugraha");
$mahasiswa->aksesFitur();

?>
