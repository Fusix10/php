<?php require "Session_Start.php";
print_r($_FILES);exit();
$destination = "img/".$_FILES['img']['name']; //dossier "upload"
move_uploaded_file($_FILES['img']['tmp_name'],$destination);
 ?>