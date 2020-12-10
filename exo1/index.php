<!-- ## Exercice 1
Créer une variable **age** et l'initialiser avec une valeur.  
Si l'âge est supérieur ou égale à 18, afficher **Vous êtes majeur**. Dans le cas contraire, afficher **Vous êtes mineur**. -->
<?php

$age = 18;
$result;

if ($age >= 18) {
    $result = "Vous êtes majeur";
} else {
    $result = "Vous êtes mineur";
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 2 Exo 1</title>
</head>

<body>

    <p><?= $result; ?></p>

</body>

</html>