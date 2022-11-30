<h1>vous vous êtes jamais inscrit ?, quelllllllllllle honte !, veuillé y remédier</h1>
<form method="post" action="singe-up.php">
    <p>votre pseudo</p>
    <input type='name' name='name' />
    <p>votre mot de passerait pas !</p>
    <input type='password' name='password' />
    <p>votre E mail/girl</p>
    <input type='email' name='email'/>
    <input type='submit' value='Créer un compte' />
</form>
<h2>HOPOOOOOOO, vous êtes CONSITIOYEN, bien le retour !</h2>
<form method="post" action="singe-in.php">
    <p>votre pseudo</p>
    <input type='name' name='name' />
    <p>votre mot de passerait pas !</p>
    <input type='password' name='password' />
    <p>Me connecter</p>
    <input type='submit' value='Me connecter' />
</form>
<script type="text/javascript">
    <?php if (isset($SESSION['error'])){
        echo "M.toast({html:'".$_SESSION['error']."'})";
        unset($_SESSION['error']);
    } ?>
</script>
