<?php


?><?php
require("config.php");

$ne=$_POST["t1"];


//1- Ecrire la requete  sql
$sql="delete from etudiant  WHERE NumEtd=".$ne;
//2- preparer la requete
$requete=$pdo->prepare($sql);
//3- exécuter la requete
$requete->execute();

header("location:ListeEtudiant.php");
?>