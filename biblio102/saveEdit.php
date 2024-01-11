<?php
require("config.php");

$ne=$_POST["t1"];
$nome=$_POST["t2"];
$pe=$_POST["t3"];
$ad=$_POST["t4"];

//1- Ecrire la requete  sql
$sql="UPDATE etudiant SET NomEtd='".$nome."',`PrenomEdt`='".$pe."',`AdresseEtd`='".$ad."' WHERE NumEtd=".$ne;
//2- preparer la requete
$requete=$pdo->prepare($sql);
//3- exécuter la requete
$requete->execute();

header("location:ListeEtudiant.php");
?>