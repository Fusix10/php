<?php 
require_once "Session_Start.php";

if(empty($_POST['name'])){
    header('Location:index.php');
    $_SESSION['error']="Pseudo vide, veuillez réessayer";
}elseif(empty($_POST['password'])){
    $_SESSION['error']="Password vide, veuillez réessayer";
}

$sql = "SELECT * FROM user WHERE name='".$_POST['name']."' AND password='".sha1($_POST['password'])."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){ //vérifie si le resultat est vide !
    //non connecté
    echo "Utilisateur ou mot de passe incorrect !";
    header('Location:index.php');//on le redirige sur la page d'accueil du site !
}else{
    $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
    header('Location:aceuille.php');
}
?>
