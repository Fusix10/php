<?php
require_once "Session_Start.php"
?>
<html>
    <head>
    </head>
    <body>
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
            <form method="post" action="admin.php" enctype="multipart/from-data">
                <input type='text' name='name' value="<?php echo $user['name'] ?>" />
                <input type='hidden' name='id' value="<?php echo $user['id'] ?>"/>
                <input type='submit' value='confirmé' />
            </form>
            <h2>mdp</h2> 
            <?php echo $user['password'] ?>
            <h2>Email</h2>
            <span class="email"><?php echo $user['email'] ?></span>
        </div>
        <?php } ?>
    </body>
</html>