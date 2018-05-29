<?php
include "../models/User.php";

$user = new User();

$user->register($_POST["username"],$_POST["password"],$_POST["email"]);