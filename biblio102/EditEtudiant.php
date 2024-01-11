<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    require("config.php");
    ?>
</head>
<body>
    <?php
    include("menu.php");
    ?>
    <form method="post" action="saveEdit.php">
<?php
require("config.php");

$ce=$_POST["t1"];

$sql="select * from etudiant where NumEtd=".$ce;

$table=$pdo->query($sql);
while($row= $table->fetch(PDO::FETCH_NUM)){

        echo'code : <input type="hidden" name="t1" value="'.$row[0].'"/><br/>';
        echo'Saisir le nouveau nom :<input type="text" name="t2" value="'.$row[1].'"/><br/>';
        echo'Saisir le nouveau prénom :<input type="text" name="t3" value="'.$row[2].'"/><br/>';
        echo'Saisir la nouvelle adresse :<input type="text" name="t4" value="'.$row[3].'"/><br/>';
    echo'<input type="submit" name="sauvegarder" value="Modifier"/>';

}
?>
  </form>  
</body>
</html>