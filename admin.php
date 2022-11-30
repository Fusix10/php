<?php
require_once "Session_Start.php";
$sql = "UPDATE user SET name='".$_POST['name']."' and id='".$_POST['id']."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$dataBinded=array(
    ':name'   => $_POST['name'],
    ':id'   => $_POST['id'],
);
?>