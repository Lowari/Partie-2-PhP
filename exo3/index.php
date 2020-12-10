<!-- ## Exercice 3
Créer deux variables **age** et **gender**. La variable **gender** peut prendre comme valeur :
- Homme
- Femme  

En fonction de l'âge et du genre afficher la phrase correspondante :
- **Vous êtes un homme et vous êtes majeur**
- **Vous êtes un homme et vous êtes mineur**
- **Vous êtes une femme et vous êtes majeur**
- **Vous êtes une femme et vous êtes mineur**  

Gérer tous les cas. -->
<?php

$age = 18;
$gender = "femme";
$result;

if ($age >= 18 && $gender == "homme") {
    $result = "Vous êtes un  $gender  et vous êtes majeur";
} else if ($age < 18 && $gender == "homme") {
    $result = "Vous êtes un $gender et vous êtes mineur";
} else if ($age >= 18 && $gender == "femme") {
    $result = "Vous êtes une $gender et vous êtes majeur";
} else {
    $result = "Vous êtes une $gender et vous êtes mineur";
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo3</title>
</head>

<body>

    <p><?php echo $result; ?></p>

</body>

</html>