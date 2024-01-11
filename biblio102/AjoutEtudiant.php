<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("menu.php");

    ?>

    <h2>Formulaire d'ajout</h2>

<form method="post" action="AddEtudiant.php" class="cadre1">
saisir le numéro de l'étudiant : <input type="text" name="t1"/><br/>
saisir le nom de l'étudiant : <input type="text" name="t2"/><br/>
saisir le prénom de l'étudiant : <input type="text" name="t3"/><br/>
saisir l'adresse de l'étudiant : <input type="text" name="t4"/><br/>

<input type="submit" name="sauvegarder" value="sauvegarder"/>

    </form>
</body>
</html>