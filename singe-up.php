<?php
require "Session_Start.php";
$sql = "INSERT INTO user(name,password,email) VALUES(:name,:password,:email)";
$dataBinded=array(
    ':name'   => $_POST['name'],
    ':password'=> $_POST['password'],
    ':email'=> $_POST['email'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:index.php');
?>