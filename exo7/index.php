<!-- Traduire ce code avec des if et des else :  
echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!'; -->
<?php

$isOk = false;
$result;

if (!$isOk) {
    $result = "C'est pas bon !!!";
} else {
    $result = "C'est ok !!";
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo7</title>
</head>

<body>

    <p><?= $result; ?></p>

</body>

</html>