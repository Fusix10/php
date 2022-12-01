<?php require "Session_Start.php" ?>

<?php $sql = "SELECT * FROM project"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC);

foreach($data as $project){?>

    <h2><?php echo $project['name']; ?></h2>
    
    <img src="<?php echo $project['img']; ?>">
    
    <h3><?php echo $project['content']; ?></h3>
<?php
}
?>

