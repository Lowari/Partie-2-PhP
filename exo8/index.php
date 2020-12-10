<?php
$isOk = true;

if ($isOk) {
    $result = 'c\'est ok !!';
} else {
    $result = 'c\'est pas bon !!!';
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo8</title>
</head>

<body>

    <p><?= $result; ?></p>

</body>

</html>