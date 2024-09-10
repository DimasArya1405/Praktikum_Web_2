<?php

class Buku {
    // Atribut atau Properties
    public $judul;
    public $penulis;

    //Constructor
    public function __construct($judul,$penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
     
    public function tampilkanInfo(){
        return "Judul: $this->judul, Penulis: $this->penulis";
    }
}

// Instansi Objek
$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->tampilkanInfo();


?>