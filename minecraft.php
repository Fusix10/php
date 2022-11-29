<!DOCTYPE html>
<html>
<?php
session_start();
  
$pdo = new PDO(
    'mysql:host=localhost;dbname=grpb11;',
    'root',
    'root',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
?>
<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
  <link rel="stylesheet" href="css/stylemine.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div class="container">
    <nav class="black">
      <div class="nav-wrapper">
        <a class="brand-logo right main_title" onclick="Show()">Projet Minecraft</a>
        <img class="brand-logo circle responsive-img center" height="auto" width="10%" src="../img/minecraftlogo.png">
        <ul id="nav-mobile" class="hide-on-med-and-down">
          <li><a href="index.php">Accueil</a></li>
        </ul>
      </div>
    </nav>
    
    <div class="section white">
      <div class="row container">
        <h2 class="header">Projet MINECRAFT</h2>
        <div class="row">
          <div class="col l12 s12"
            <p class="grey-text text-darken-3 lighten-3">Minecraft est un jeu vidéo de type aventure « bac à sable » (construction complètement libre) développé par le Suédois Markus Persson, alias Notch, puis par la société Mojang Studios. Il s'agit d'un univers composé de voxels et généré de façon procédurale, qui intègre un système d'artisanat axé sur l'exploitation puis la transformation de ressources naturelles (minéralogiques, fossiles, animales et végétales)..</p>
          </div>
        </div>
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img class="responsive-img" src="img/imgmine1.jpg"></div>
    </div>
    <div class="section white">
      <div class="row container">
        <p class="grey-text text-darken-3 lighten-3 flow-text">Le but de ce projet était de nous faire découvrir les bases de la programmation html/css. Pour cela on a eu pour objectif de créer un site internet sur notre jeu vidéo favori</p>
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img class="responsive-img" src="img/imgmine2.jpg"></div>
    </div>
    
     
  </div>
  <script type="text/javascript" src="js/Jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/scriptmine.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>