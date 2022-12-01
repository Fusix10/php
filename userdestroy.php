<?php require_once "Session_Start.php";
if($_SESSION['user']['admin'] == 0){
    header('Location:index.php');
    exit();
}
$sql = "DELETE FROM user WHERE id='".$_POST['id']."'";
$pre = $pdo->prepare($sql); 
$pre->execute();
header('location:panel_admin.php')
?>