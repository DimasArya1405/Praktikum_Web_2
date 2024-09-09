<?php

class Pengguna{

    public $nama;

    public function __construct($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

}

class Dosen extends Pengguna{

    private $mata_kuliah;

    public function __construct($nama,$mata_kuliah){
        parent::__construct($nama);
        $this->mata_kuliah = $mata_kuliah;
    }

    public function getMatkul(){
        return $this->mata_kuliah;
    }

}

$dosen = new Dosen("Dimas Arya Nugraha","Pemrograman Web");
echo $dosen->getNama(). "<br>";
echo $dosen->getMatkul();

?>