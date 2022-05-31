<?php
$log = $_POST['login'];
$password = $_POST['pass'];

if($log == "admin" && $password == "admin123"){
    header('location:homepage.php');
}
else{
    header('location:index.php');
}


?>