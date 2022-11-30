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
  <link rel="stylesheet" href="css/stylealex.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div class="container">
    <nav class="black">
      <div class="nav-wrapper">
        <a class="brand-logo right main_title" onclick="Show()">Projet Alex</a>
        <img class="brand-logo circle responsive-img center" height="auto" width="10%" src="../img/logolucide.jpg">
        <ul id="nav-mobile">
          <li><a href="aceuille.php">Accueil</a></li>
        </ul>
      </div>
    </nav>
    
    <div class="section white">
      <div class="row container">
        <h1 class="header">Lucide dream</h1>
        <div class="row">
          <div class="col l12 s12"
            <p class="grey-text text-darken-3 lighten-3">Quesque les rêve lucide ?, c'est quand on se rend compte lors d'un rêve que on rêve et que on prend conscience que nous rêve, aprés cela il vous est possible de faire absolument tout se que vous voulez avec les exacte même sensation que dans la vrais vie voir en mieux ! </p>
          </div>
        </div>
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img class="responsive-img" src="img/lucide1.jpg"></div>
    </div>
    <div class="section white">
      <div class="row container">
        <p class="grey-text text-darken-3 lighten-3 flow-text">mais du-coup quesqu'on peut faire ?, absolument tout se qui vous passe par la tête même si c'est physiquement impossible, car dans un rêve vous êtes soumie a aucune régle physique donc tout vous est possible la seul limite est votre imagination, volez sur un dragon, visite d'autre plannette, testé des supstance chelou sans contre partie, tabassé votre boss etc.. tout vous est possible !</p>
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img class="responsive-img" src="img/lucide2.jpg"></div>
    </div>
    <div class="section white">
      <div class="row container">
        <p class="grey-text text-darken-3 lighten-3 flow-text">HO, mais trop BIEN !, comment on en fait ?, en suivant quelque règle de base qui sont se que on appeller les 4grand pillier, les teste de réalite, la mémoire des rêve, le corp saint, les technique d'induction, une fois respecté vous ferrez des rêve lucide</p>
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img class="responsive-img" src="img/lucide3.jpg"></div>
    </div>
    <div class="section white">
      <div class="row container">
        <p class="grey-text text-darken-3 lighten-3 flow-text">pour plus d'info je vous conseil l'ermite des songe sur youtube ou sont site !
        <a href="https://www.youtube.com/c/PINTI" >Youtube l'ermite des songe</a></p>
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img class="responsive-img" id="#trigger" src="img/lucide1.jpg">  
      </div>
     
    </div>
     
  </div>

  <script type="text/javascript" src="js/Jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/scriptalex.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
<?php }else{ header('Location:index.php'); } ?>