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

    public function getStudentID(){
        return $this->studentID;
    }
}