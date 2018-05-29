<?php
include_once "../model.php";

class User extends Model {

    function __construct(){
        super::__construct();
    }

    function register($username,$password,$email){
        $hashedPass = password_hash($password,PASSWORD_DEFAULT);

        $stmt = mysqli_prepare("INSER INTO user(username,password,email) VALUES(?,?,?)");
        $stmt->bind_param("sss",$username,$hashedPass,$email);
        if(!($stmt->execute())){
            return "Execution Failed.";
        }
        echo "User Registered!";
        $stmt->close();
    }

}
?>