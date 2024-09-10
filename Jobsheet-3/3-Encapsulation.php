<?php

class Person{ 
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}
class Student extends Person{
    private $studentID;

    public function __construct($name, $studentID){
        parent::__construct($name);
        $this->studentID = $studentID;
    }
    public function setName($name){ // Menambah set studentID dan set name.
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    public function setStudentID($studentID){
        $this->studentID = $studentID;
    }

    public function getStudentID(){
        return $this->studentID;
    }
}

class Teacher extends Person{
    private $teacherID;

    public function __construct($name, $teacherID){
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    public function getName(){
        return $this->name;
    }
}

$person = new Person("Dimas");
echo "Function getName() pada class Person: ".$person->getName()."<hr>";

$student = new Student("Arya", 230202033);
echo "Function getName() dan getStudentID() pada class Student: ".$student->getName().", ".$student->getStudentID()."<hr>";

?>