<!-- ## Exercice 6
Traduire ce code avec des if et des else :  
echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur'; -->
<?php

$age = 17;
$result;

if ($age >= 18) {
    $result = "Tu es majeur";
} else {
    $result = "Tu es mineur";
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo6</title>
</head>

<body>

    <p><?= $result; ?></p>

</body>

</html>