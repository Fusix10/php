<?php require "Session_Start.php" ?>

<?php $sql = "SELECT * FROM project"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC);

foreach($data as $d){?>

    <h2><?php echo $d['name']; ?></h2>
    
    <img src="<?php echo $d['img']; ?>">
    
    <h3><?php echo $d['content']; ?></h3>
<?php
}
?>

