<?php

class Dbh {
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "zuriphp";
    protected $conn;

    protected function connect(){
       $this->conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
        if(!$this->conn){
            echo "<script> alert('Error connecting to the database') </script>";
        }
        return $this->conn;
    }
}


