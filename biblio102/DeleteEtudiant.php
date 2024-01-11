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

    <h2>Cofirmer la suppression</h2>
    <form method="post" action="saveDelete.php">
<?php
require("config.php");

$ce=$_POST["t1"];

$sql="select * from etudiant where NumEtd=".$ce;
$trouve=-1;
$table=$pdo->query($sql);
while($row= $table->fetch(PDO::FETCH_NUM)){
    $trouve=1;
        echo'<input type="hidden" name="t1" value="'.$row[0].'"/><br/>';
        echo'nom :<label class="titre1" name="t2">'.$row[1].'</label><br/>';
        echo'prénom :<Label class="titre1" name="t3">'.$row[2].'</label><br/>';
        echo'adresse :<Label class="titre1" name="t4">'.$row[3].'</label><br/>';
    echo'<input type="submit" name="sauvegarder" value="Supprimer"/>';

}

if ($trouve==-1)
{
    echo'<div class="msgError">Ce code n existe pas </div>'; 
}
?>
  </form>  
</body>
</html>