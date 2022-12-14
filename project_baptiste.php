<?php
require_once "Session_Start.php"
?>
<?php
if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html>
<?php
  
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
  <link rel="stylesheet" href="css/stylebatp.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div class="container">
    <nav class="black">
      <div class="nav-wrapper">
        <a class="brand-logo right main_title" onclick="Show()">Projet Baptiste</a>
        <img class="brand-logo circle responsive-img center" height="auto" width="10%" src="../img/dnd.png">
        <ul id="nav-mobile">
          <li><a href="aceuille.php">Accueil</a></li>
        </ul>
      </div>
    </nav>
    
    <div class="section white">
      <div class="row container">
        <h2 class="header">Projet D&D</h2>
        <div class="row">
          <div class="col l12 s12">
            <p class="grey-text text-darken-3 lighten-3">Donjons et Dragons (en anglais Dungeons & Dragons), souvent abrégé en D&D, DnD ou AD&D, est le tout premier jeux de rôle sur table de genre médiéval-fantastique.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img class="responsive-img" src="img/batdnd3.jpg"></div>
    </div>
    <div class="section white">
      <div class="row container">
        <p class="grey-text text-darken-3 lighten-3 flow-text">Le jeu a été créé dans les années 1970 par les Américains Gary Gygax et Dave Arneson. Gygax a aussi fondé la première société d'édition de jeux de rôle, Tactical Studies Rules (plus connue sous le sigle de TSR) pour éditer son jeu.</p>
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img class="responsive-img" src="img/batdnd1.jpg"></div>
    </div>
    <div class="section white">
      <div class="row container">
        <p class="grey-text text-darken-3 lighten-3 flow-text">Le but de mon projet est de créer mon système de parties en m'inspirant des règles déjà existantes de Donjons & Dragons : créer un univers propre et unique.</p>
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img class="responsive-img" src="img/batdnd2.jpg"></div>
    </div>
    <div class="section white">
      <div class="row container">
        <p class="grey-text text-darken-3 lighten-3 flow-text">Cela demande énormément de temps et d'imagination ! De créer les fiches joueurs jusqu'à réfléchir aux ennemis dans la zone, en passant par créer l'environnement et les décors dans lesquels les joueurs vont s'aventurer.</p>
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img class="responsive-img" id="#trigger" src="img/dnd.png">  
      </div>
     
    </div>
     
  </div>

  <script type="text/javascript" src="js/Jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/scriptproj2.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
<?php }else{ header('Location:index.php'); } ?>