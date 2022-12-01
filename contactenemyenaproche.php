<?php
require_once "Session_Start.php";
if($_SESSION['user']['admin'] == 0){
    header('Location:index.php');
    exit();
}
$sql = "UPDATE user SET password=:password WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
    ':password'   => $_POST['password'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);
header('location:panel_admin.php')
?>