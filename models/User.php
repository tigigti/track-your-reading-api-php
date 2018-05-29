<?php

class User {
    private $conn;
    private $table_name = "user";

    private $id;
    private $username;
    private $password;
    private $email;

    public function __construct($db){
        $this->conn = $db;
    }

    public function register($username,$password,$email){
        $hashedPass = password_hash($password,PASSWORD_DEFAULT);

        $stmt = $this->conn->prepare("INSERT INTO user(username,password,email) VALUES(?,?,?)");
        $stmt->bind_param("sss",$username,$hashedPass,$email);
        if(!($stmt->execute())){
            return false;
        }
        $stmt->close();
        return true;
    }
}