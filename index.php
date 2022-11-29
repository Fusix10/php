<?php
require "Session_Start.php"
?>
<?php if(isset($_SESSION['user']) AND $_SESSION['user']['admin'] == 1){ ?>
<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head> 
<body class="grey darken-2">
  </body>
 </html>
  <div class="navbar-fixed">
  </div>
  <div class="row">
    <div class="col l1 banner black hide-on-med-and-down">
    </div>
  <div class=" col l10 nopadding">
      <div class="carousel carousel-slider center index move">
        <div class="carousel-fixed-item center">
        </div>
        <div class="carousel-item black white-text imagesizemine" href="#one!">
          <h2>Minecraft</h2>
          <p class="white-text">projet de création de site parlent de Minecraft</p>
        </div>
        <div class="carousel-item white white-text imagesizebat" href="#two!">
          <h2>Donjons & Dragons (D&D)</h2>
          <p class="white-text">Projet sur l'univers de Donjons & Dragons</p>
          <h2></h2>
          <p class="black-text"></p>
        </div>
        <div class="carousel-item white black-text imagesizealex" href="#three!">

          <h2>Lucide Dream</h2>
          <p class="black-text"> je vous parle de mon expériance sur les Rê </p>
        </div>
      </div>
    </div>
    <ul id="slide-out" class="sidenav hide-on-med-and-up">
      <li><a href="#dropdown1"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    </ul>
    <div class="valgin-wrapper row">
      <div class="col s12 l5 offset-l1">
        <div class="card small">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/imgbaptiste.jpg" height="250px">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Baptiste Golfier<i
                  class="material-icons right">more_vert</i></span>
              <p><a href="#">Et paf !</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Moi :<i class="material-icons right">close</i></span>
              <p>Futur dev, j'ai 18 ans et je suis élève en GTech1 à Gaming Campus</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 l5 ">
        <div class="card small">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/Alextronche4K.jpg" alt="photo d'alexendre" height="250px">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Alexandre Camandona<i
                  class="material-icons right">more_vert</i></span>
              <p><a href="#https://www.youtube.com/watch?v=dQw4w9WgXcQ">ho tien un lien</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Alexandre Camandona<i
                  class="material-icons right">fermer</i></span>
              <p>dévloppeur web, apprend actuellement dans l'école gaming campus</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col l2 banner hide-on-med-and-down">
    </div>
    <footer class="page-footer black">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            
                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                <label for="first_name">First Name</label>
              </div>
              <div class="input-field col s6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                <label for="disabled">Disabled</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                This is an inline input field:
                <div class="input-field inline">
                  <input id="email_inline" type="email" class="validate">
                  <label for="email_inline">Email</label>
                  <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
        
      </div>
      <div class="footer-copyright">
        <div class="container">
          © 2014 Copyright Text
        </div>
      </div>
    </footer>
  </div>

  <script type="text/javascript" src="js/Jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>

<?php}elseif(isset($_SESSION['user']) and $_SESSION['user']['admin'] == 0){?>

<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head> 
<body class="grey darken-2">
  </body>
 </html>
  <div class="navbar-fixed">
  </div>
  <div class="row">
    <div class="col l1 banner black hide-on-med-and-down">
    </div>
  <div class=" col l10 nopadding">
      <div class="carousel carousel-slider center index move">
        <div class="carousel-fixed-item center">
        </div>
        <div class="carousel-item black white-text imagesizemine" href="#one!">
          <h2>Minecraft</h2>
          <p class="white-text">projet de création de site parlent de Minecraft</p>
        </div>
        <div class="carousel-item white white-text imagesizebat" href="#two!">
          <h2>Donjons & Dragons (D&D)</h2>
          <p class="white-text">Projet sur l'univers de Donjons & Dragons</p>
          <h2></h2>
          <p class="black-text"></p>
        </div>
        <div class="carousel-item white black-text imagesizealex" href="#three!">

          <h2>Lucide Dream</h2>
          <p class="black-text"> je vous parle de mon expériance sur les Rê </p>
        </div>
      </div>
    </div>
    <ul id="slide-out" class="sidenav hide-on-med-and-up">
      <li><a href="#dropdown1"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    </ul>
    <div class="valgin-wrapper row">
      <div class="col s12 l5 offset-l1">
        <div class="card small">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/imgbaptiste.jpg" height="250px">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Baptiste Golfier<i
                  class="material-icons right">more_vert</i></span>
              <p><a href="#">Et paf !</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Moi :<i class="material-icons right">close</i></span>
              <p>Futur dev, j'ai 18 ans et je suis élève en GTech1 à Gaming Campus</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 l5 ">
        <div class="card small">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/Alextronche4K.jpg" alt="photo d'alexendre" height="250px">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Alexandre Camandona<i
                  class="material-icons right">more_vert</i></span>
              <p><a href="#https://www.youtube.com/watch?v=dQw4w9WgXcQ">ho tien un lien</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Alexandre Camandona<i
                  class="material-icons right">fermer</i></span>
              <p>dévloppeur web, apprend actuellement dans l'école gaming campus</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col l2 banner hide-on-med-and-down">
    </div>
    <footer class="page-footer black">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            
                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                <label for="first_name">First Name</label>
              </div>
              <div class="input-field col s6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                <label for="disabled">Disabled</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                This is an inline input field:
                <div class="input-field inline">
                  <input id="email_inline" type="email" class="validate">
                  <label for="email_inline">Email</label>
                  <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
        
      </div>
      <div class="footer-copyright">
        <div class="container">
          © 2014 Copyright Text
        </div>
      </div>
    </footer>
  </div>

  <script type="text/javascript" src="js/Jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>   
<?php }else{ ?>
<?php
header('Location:inscription.php');
}
?>