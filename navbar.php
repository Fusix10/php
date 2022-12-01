<?php require_once "Session_Start.php"; ?>
<?php if($_SESSION['user']['admin'] == 1){ ?>
    <nav class="black">
        <div class="nav-wrapper container">
          <a class="brand-logo right">Mon site</a>
          <img class="brand-logo circle responsive-img center" height="auto" width="auto" src="../img/dino.png">
          <ul id="nav-mobile" data-target="dropdown1" class="hide-on-med-and-down">
            <li><a href="singe-out.php">Déconnecté</a></li>
            <li><a href="minecraft.php">Project MC</a></li>
            <li><a href="project_baptiste.php">Projet Baptiste</a></li>
            <li><a href="project_alex.php">Projet Alexandre</a></li>
            <li><a href="panel_admin.php">Admin</a></li>
          </ul>
          <a class="dropdown-trigger btn hide-on-med-and-up black" href='#' data-target='dropdown1'>
            <i class="material-icons menu">menu</i>
          </a>
          <ul id='dropdown1' class='dropdown-content'>
            <li><a href="singe-out.php">Déconnecté</a></li>
            <li><a href="minecraft.php">Project MC</a></li>
            <li><a href="project_baptiste.php">Projet Baptiste</a></li>
            <li><a href="project_alex.php">Projet Alexandre</a></li>
            <li><a href="panel_admin.php">Admin</a></li>
          </ul>
        </div>
    </nav>
<?php }elseif($_SESSION['user']['admin'] == 0){ ?>
    <nav class="black">
        <div class="nav-wrapper container">
            <a class="brand-logo right">Mon site</a>
            <img class="brand-logo circle responsive-img center" height="auto" width="auto" src="../img/dino.png">
            <ul id="nav-mobile" data-target="dropdown1" class="hide-on-med-and-down">
                <li><a href="singe-out.php">Déconnecté</a></li>            
                <li><a href="minecraft.php">Project MC</a></li>
                <li><a href="project_baptiste.php">Projet Baptiste</a></li>
                <li><a href="project_alex.php">Projet Alexandre</a></li>
            </ul>
                <a class="dropdown-trigger btn hide-on-med-and-up black" href='#' data-target='dropdown1'>
                <i class="material-icons menu">menu</i>
                </a>
            <ul id='dropdown1' class='dropdown-content'>
                <li><a href="singe-out.php">Déconnecté</a></li>
                <li><a href="minecraft.php">Project MC</a></li>
                <li><a href="project_baptiste.php">Projet Baptiste</a></li>
                <li><a href="project_alex.php">Projet Alexandre</a></li>
            </ul>
        </div>
    </nav>
<?php } ?>