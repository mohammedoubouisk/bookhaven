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
<h2> Formulaire de recherche</h2>
<form method="post" action="#" class="cadre1">

saisir le code de l'étudiant à rechercher : <input type="text" name="t1"/>
<input type="submit" name="rehercher" value="rechercher"/>
</form>
<?php

if(!empty($_POST["rehercher"]))
{

    $ce=$_POST["t1"];
    $trouve=-1;
    $sql="select * from etudiant where NumEtd=".$ce;
    $table=$pdo->query($sql);
echo'<table border="2"><tr bgcolor="lime"><td>Code de l\'etudiant</td><td>nom</td><td>prenom</td><td>Adresse</td></tr>';
    while($row= $table->fetch(PDO::FETCH_NUM)){
        if($row[0]==$ce)
        {echo'<tr>';
            echo'<td> '.$row[0].'</td>';
            echo'<td> '.$row[1].'</td>';
            echo'<td> '.$row[2].'</td>';
            echo'<td> '.$row[3].'</td>';
            echo'</tr>';
            $trouve=1;
        }

    }
    echo'</table>';
    if( $trouve==-1)
    {
        echo'<div class="msgError">Ce code n existe pas </div>';
    }

}



?>
</body>
</html>