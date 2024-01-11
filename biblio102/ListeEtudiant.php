<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        require("config.php")
    ?>
</head>
<body>
 <?php
 include("menu.php") ;
 ?>
<H2>LISTE DES ETUDIANTS</h2>
<?php
$sql="SELECT * FROM etudiant";
$table= $pdo->query($sql);
?>
<table border="1"><tr><td>Num etudiant </td><td> Nom etudiant</td><td>Prenom etudiant  </td><td> Adresse</td></tr>
<?php
while($row = $table->fetch(PDO::FETCH_ASSOC)){
    echo '<tr>';
    echo '<td>'. $row["NumEtd"].' </td>';
    echo '<td>'. $row["NomEtd"].'</td>';
    echo '<td>'. $row["PrenomEdt"].'</td>';
    echo '<td>'. $row["AdresseEtd"].'</td>';
    echo '</tr>';
}
?>
</table>
</body>
</html>