<?php require "Session_Start.php";
print_r($_FILES);exit();
$destination = "img/".$_FILES['img']['name']; //dossier "upload"
move_uploaded_file($_FILES['img']['tmp_name'],$destination);


$sql = "INSERT project SET img=:img WHERE id=:id";
$dataBinded=array(
    ':img'   => $_POST['img'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);
header('location:project_default.php')

?>