<?php
session_start();
include 'com.php';

if(empty($_POST['username']) || empty($_POST["password"])){
    header("Location: login2.php");
    exit();
}
 
$username = $_POST["username"];
$password = $_POST["password"];
 
$stmt = $connection->prepare("SELECT * FROM users WHERE username=:user AND password=:pass");
$stmt->execute(['user' => $username, 'pass' => $password]);
$user = $stmt->fetch();
 
if($username == "Luuk" && $password == "w8woord"){
    $_SESSION['user'] = $username;
    header("location: suc6volingelogd.php");
} else{
    header("location: login2.php");
}
?>



