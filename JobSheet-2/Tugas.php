<?php

// 1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
class Dosen{
    public $nama;
    public $nip;
    public $mataKuliah;

    public function __construct($a, $b, $c){
        $this->nama = $a;
        $this->nip = $b;
        $this->mataKuliah = $c;
    }

    // 2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
    public function tampilkanDosen(){
        return "NIP : " .$this->nip. "<br>Nama : ".$this->nama. "<br>Mata Kuliah : ".$this->mataKuliah."<br>";
    }
}

// 3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk menampilkan informasi tersebut.
$dosen = new Dosen("12345","Dimas Arya Nugraha","Pemrograman Web");
echo $dosen->tampilkanDosen();

?>