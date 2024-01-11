<link rel="stylesheet" href="style1.css"/>
<?php
require("config.php");

$ne=$_POST["t1"];
$nome=$_POST["t2"];
$pe=$_POST["t3"];
$ad=$_POST["t4"];

//1- définir la requête
$sql="INSERT INTO etudiant VALUES (".$ne.",'".$nome."','".$pe."','".$ad."')";

try{
    //2- préparer la requête
$requete = $pdo->prepare($sql);
//3- exécuter la requête
$requete->execute();

header("location:ListeEtudiant.php");
}
catch(PDOException $ex)
{
    $nbr= $ex->errorInfo[1];
    echo $nbr;
    if($nbr==1062)
    {echo'<div class="msgError"> le code : '.$ne.' existe déjà, il faut saisir une autre valeur</div><br/><a href="AjoutEtudiant.php">Retour au formulaire</a>';}

  
    if($nbr==1048)
    {echo'<div class="msgError"> le nom : '.$nome.' est obligatoir , il faut saisir une valeur</div><br/><a href="AjoutEtudiant.php">Retour au formulaire</a>';}

    if($nbr==1054)
    {echo'<div class="msgError"> le code : '.$ne.' doit être numérique , il faut saisir une valeur correcte</div><br/><a href="AjoutEtudiant.php">Retour au formulaire</a>';}
}

?>