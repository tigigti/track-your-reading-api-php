<?php
class Database {

    private $host;
    private $username;
    private $password;
    private $db;

    public function __construct(){
        include_once "variables.php";
        $this->host = getenv("HOST");
        $this->username = getenv("USERNAME");
        $this->password = getenv("PASSWORD");
        $this->db = getenv("DB");
    }

    public function connect(){
        $this->conn = new mysqli($this->host,$this->username,$this->password,$this->db);
        return $this->conn;
    }
}
?>