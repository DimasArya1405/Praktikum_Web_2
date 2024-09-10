<?php

class Person{ // 1. Buat kelas Person dengan atribut name dan metode getName().
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}
class Student extends Person{ // 2. Buat kelas Student yang mewarisi dari Person dan tambahkan atribut studentID serta metode getStudentID().
    private $studentID;

    public function __construct($name, $studentID){
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getName(){
        return $this->name;
    }

    public function getStudentID(){
        return $this->studentID;
    }
}
// Buat kelas Teacher yang juga mewarisi dari Person dan tambahkan atribut teacherID.
class Teacher extends Person{
    private $teacherID;

    public function __construct($name, $teacherID){
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }
// Override metode getName() di kelas Student dan Teacher untuk menampilkan format berbeda.
    public function getName(){
        return $this->name;
    }
}

$person = new Person("John");
echo "Function getName() pada class Person : <br>";
echo $person->getName();



?>