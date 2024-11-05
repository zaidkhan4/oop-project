<?php

class india {
    public $conn;
    //database connection
    public function __construct(){
        $this->conn = mysqli_connect("localhost", "root", "", "pakistan");
        if(!$this->conn){
            echo "Connection error: " . mysqli_connect_error();
        }
    }
    //insert data into database
    public function insert(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $usrname = $_POST['username'];
        $pass = $_POST['password'];
        $sql = "INSERT INTO country (name, email, username, password) VALUES ('$name','$email','$usrname','$pass') ";
        $query = mysqli_query($this->conn,$sql);
        if($query){
            header("location:index.php");
        }else{
            echo "error";
        }
    }

    public function displaydata($id){
        $sql = "SELECT * FROM country WHERE id = '$id' ";
        $result = mysqli_query($this->conn,$sql);
        $getdata = mysqli_fetch_array($result);
        return $getdata;
    }

    public function update(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $usrname = $_POST['username'];
        $id = $_POST['id'];
        $sql = "UPDATE country SET name = '$name', email = '$email', username = '$usrname' WHERE  id = '$id' ";
        $query = mysqli_query($this->conn,$sql);
        if($query){
            header("location:index.php");
        }else {
            echo "Registration update failed try again";
        }
    }

    
    


}




?>