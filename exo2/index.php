<!-- ## Exercice 2
Créer une variable **isEasy** de type booléan et l'initialiser avec une valeur.  
Afficher **C'est facile!!** si c'est vrai. Dans le cas contraire afficher **C'est difficile !!!**.  
**Bonus :** L'écrire de deux manières différentes. -->
<?php

$isEasy = true;
$result;

if ($isEasy) {
    $result = "C'est facile";
} else {
    $result = "C'est difficile";
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2</title>
</head>

<body>

    <p><?= $result;  ?></p>

</body>

</html>