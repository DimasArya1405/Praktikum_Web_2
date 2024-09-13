<?php

class Database
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbName = "jkb_system";


    public $link;
    public $error;

    public function __construct()
    {
        $this->dbConnect();
    }

    public function dbConnect()
    {
        $this->link = mysqli_connect($this->host, $this->user, $this->password, $this->dbName);
        if (!$this->link) {
            $this->error = "Database Connection Failed: " . mysqli_connect_error();
            return false;
        }
        return true;
    }
}

class Kelas extends Database
{

    public function ShowDataStudents()
    {
        if (!$this->link) {
            return $this->error;
        }

        $query = "SELECT * FROM student_classes";
        $result = mysqli_query($this->link, $query);

        if (!$result) {
            return "Query Error: " . mysqli_error($this->link);
        }

        $array = array();
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $array[] = $row;
        }
        return $array;
    }
}

class Mahasiswa extends Database
{
    public function ShowDataStudents()
    {
        if (!$this->link) {
            return $this->error;
        }

        $query = "SELECT * FROM students";
        $result = mysqli_query($this->link, $query);

        if (!$result) {
            return "Query Error: " . mysqli_error($this->link);
        }

        $array = array();
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $array[] = $row;
        }
        return $array;
    }
}

class polymorphism extends Kelas{
    public function ShowDataStudents()
    {
        if (!$this->link) {
            return $this->error;
        }

        $query = "SELECT * FROM students WHERE addressess = 'Binangun'";
        $result = mysqli_query($this->link, $query);

        if (!$result) {
            return "Query Error: " . mysqli_error($this->link);
        }

        $array = array();
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $array[] = $row;
        }
        return $array;
    }
}