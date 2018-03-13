<?php

session_start();
$user = $_post["Input Email"];
$pass = $_post["Password"];

$dbuser="admin@gmail.com";
$dbpass="admin123";

if($user == $dbuser && $pass == $dbpass){
    echo '<h1>Login Sukses</h1>';
}else{
    if(isset($_SESSION["Salah"])){
        $_SESSION["Salah"]++;
    } else{
        $_SESSION["Salah"] = 1;
    }
    header("location:index.php");
}

