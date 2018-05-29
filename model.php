<?php
Class Model {
    var $conn;

    function __construct(){
        $this->conn = mysqli_connect("localhost","root","root","tyr_db");
    }

    function closeConn(){
        $this->conn->close();
    }
}
?>