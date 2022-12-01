<?php
require_once "Session_Start.php";
$sql = "UPDATE user SET name=:name WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
    ':name'   => $_POST['name'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);
header('location:panel_admin.php')
?>