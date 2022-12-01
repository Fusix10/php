<?php
require_once "Session_Start.php"
?>
<?php if($_SESSION['user']['admin'] == 1){ ?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
         <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
        <div class="navbar-fixed">
            <nav class="black">
                <div class="nav-wrapper container">
                <a class="brand-logo right">Mon site</a>
                <img class="brand-logo circle responsive-img center" height="auto" width="auto" src="../img/dino.png">
                <ul id="nav-mobile" data-target="dropdown1" class="hide-on-med-and-down">
                    <li><a href="singe-out.php">Déconnecté</a></li>
                    <li><a href="minecraft.php">Project MC</a></li>
                    <li><a href="project_baptiste.php">Projet Baptiste</a></li>
                    <li><a href="project_alex.php">Projet Alexandre</a></li>
                    <li><a href="aceuille.php">aceuille</a></li>
                </ul>
                <a class="dropdown-trigger btn hide-on-med-and-up black" href='#' data-target='dropdown1'>
                    <i class="material-icons menu">menu</i>
                </a>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="singe-out.php">Déconnecté</a></li>
                    <li><a href="minecraft.php">Project MC</a></li>
                    <li><a href="project_baptiste.php">Projet Baptiste</a></li>
                    <li><a href="project_alex.php">Projet Alexandre</a></li>
                    <li><a href="aceuille.php">aceuille</a></li>
                </ul>
                </div>
            </nav>  
        </div>
        <h1>Liste des utilisateurs</h1>
        <?php
        $sql = "SELECT * FROM user"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC);
   
        foreach($data as $user){ ?>
        <div class="bloc_user">
            <h2>Pseudo</h2>
            <?php echo $user['name'] ?>
            <form method="post" action="adminName.php" enctype="multipart/form-data">
                <input type='text' name='name' value="<?php echo $user['name'] ?>" />
                <input type='hidden' name='id' value="<?php echo $user['id'] ?>"/>
                <input type='submit' value='confirmé' />
            </form>
            <form method="post" action="userdestroy.php">
                <input type='hidden' name='id' value="<?php echo $user['id'] ?>" />
                <input type='submit' value="delette:<?php echo $user['name'] ?>" />
            </from>
            <h2>mdp</h2> 
            <?php echo $user['password'] ?>
            <form method="post" action="adminpassword.php" enctype="multipart/form-data">
                <input type='password' name='password' value="<?php echo $user['password'] ?>" />
                <input type='hidden' name='id' value="<?php echo $user['id'] ?>"/>
                <input type='submit' value='confirmé' />
            </form>
            <h2>Email</h2>
            <span class="email"><?php echo $user['email'] ?></span>
            <form method="post" action="adminemail.php" enctype="multipart/form-data">
                <input type='email' name='email' value="<?php echo $user['email'] ?>" />
                <input type='hidden' name='id' value="<?php echo $user['id'] ?>"/>
                <input type='submit' value='confirmé' />
            </form>
            <h2><?php echo $user['name']." ".($user['admin']==1?"Admin":"") ?></h2>
            <form method="post" action="adminAdmin.php">
                <input type="hidden" name="admin" value="<?php echo $user['admin']==1?0:1 ?>" />
                <input type='hidden' name='id' value="<?php echo $user['id'] ?>"/>
                <input type='submit' value='switch admin' />
            </form>    
        </div>
        
        <?php } ?>
        <h2>Liste des projets</h2>
        <?php $sql = "SELECT * FROM project"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($data as $project){ ?>
        <div class="bloc_project">
	        <h3>Nom du project</h3>
	        <?php echo $project['name'] ?>
	        <form method="post" action="project_default.php" enctype="multipart/form-data">
		        <input type='text' name='name' value="<?php echo $project['name'] ?>">
		        <input type='hidden' name='id' value="<?php echo $project['id'] ?>">
		        <input type='submit' value='Confirmer'>
	        </form>
	
	        <h3>Image</h3>
	        <?php echo $project['img'] ?>
	        <form method="post" action="upload.php"  enctype="multipart/form-data">
		        <input type='file' name='img'>
		        <input type='hidden' name='id' value="<?php echo $project['id'] ?>">
		        <input type='submit' value='Confirmer'>
	        </form>

	        <h3>Contenu</h3>
	        <?php echo $project['content'] ?>
	        <form method="post" action="project_default.php" enctype="multipart/form-data">
		        <input type='text' name='content' value="<?php echo $project['content'] ?>">
		        <input type='hidden' name='id' value="<?php echo $project['id'] ?>">
		        <input type='submit' value='Confirmer'>
	        </form>
        </div>

        <?php } ?>

    </body>
</html>
<?php }else{ header('Location:index.php'); } ?>