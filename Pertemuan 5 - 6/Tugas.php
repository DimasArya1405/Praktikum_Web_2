<?php

class Person{
    protected $nama;
    public function __construct($nama){
        $this->nama = $nama;
    }
    public function getName(){
        return $this->nama;
    }
    public function getRole(){
        return "Person";
    }
}

class Mahasiswa extends Person{
    private $nim;
    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }
    public function setNama($nama){
        $this->name = $nama;
    }
    public function getNama(){
        return $this->name;
    }
    public function setNim($nim){
        $this->nim = $nim;
    }
    public function getNim(){
        return $this->nim;
    }
    public function getRole(){
        return "Mahasiswa";
    }
}

class Dosen extends Person{
    private $nidn;
    public function __construct($nama, $nidn) {
        parent::__construct($nama);
        $this->nidn = $nidn;
    }
    public function setNidn($nidn){
        $this->nidn = $nidn;
    }
    public function getNidn(){
        return $this->nidn;
    }
    public function getRole(){
        return "Dosen";
    }
}

$dosen = new Dosen("Pak Abda'U", "12345");
$mahasiswa = new Mahasiswa("Dimas Arya","230202033");


echo "<h4>Class Mahasiswa</h4>";
echo "Nama  : ".$mahasiswa->getName()."<br>";
echo "Nim  : ".$mahasiswa->getNim()."<br>";
echo "Role  : ".$mahasiswa->getRole()."<br><hr>";

echo "<h4>Class Dosen</h4>";
echo "Nama  : ".$dosen->getName()."<br>";
echo "Nim  : ".$dosen->getNidn()."<br>";
echo "Role  : ".$dosen->getRole()."<br>";
echo "<hr>";



abstract class Jurnal{
    abstract function pengajuanJurnal();
}

class JurnalDosen extends Jurnal{
    public function pengajuanJurnal(){
        echo "Pengajuan Jurnal Oleh Dosen";
    }
}
class JurnalMahasiswa extends Jurnal{
    public function pengajuanJurnal(){
        echo "Pengajuan Jurnal Oleh Mahasiswa";
    }
}

$jurnalDosen = new JurnalDosen();
$jurnalMahasiswa = new JurnalMahasiswa();
echo "Output function pengajuanJurnal() pada class JurnalDosen : <br>";
echo $jurnalDosen->pengajuanJurnal();
echo "<hr>";
echo "Output function pengajuanJurnal() pada class JurnalMahasiswa : <br>";
echo $jurnalMahasiswa->pengajuanJurnal();

?>