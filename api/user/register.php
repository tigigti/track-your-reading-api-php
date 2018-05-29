<?php
include_once "../../config/db.php";
include_once "../../models/User.php";

$database = new Database();
$db = $database->connect();

$user = new User($db);

$res = $user->register($_POST["username"],$_POST["password"],$_POST["email"]);
if(!$res){
    echo "Registration Failed";
}
else {
    echo "Registration successfull";
}
?>