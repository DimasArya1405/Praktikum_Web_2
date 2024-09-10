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

    public function tampilkanData(){
        return "Nama : " .$this->nama. "<br> NIM : " .$this->nim. "<br> Jurusan : " .$this->jurusan;
    }

    public function UpdateJurusan($jurusan){
        $this->jurusan = $jurusan;
    }

}


$mahasiswa = new Mahasiswa("Dimas Arya Nugraha","230202033","Komputer dan Bisnis");
echo $mahasiswa->tampilkanData();
echo "<br>";
$mahasiswa->UpdateJurusan("Elektro");
echo "Setelah jurusan di update";
echo $mahasiswa->tampilkanData();

?>