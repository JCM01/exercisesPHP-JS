<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Variables Variables de PHP</h2>
    <?php
    $ciudad="madrid";
    echo($ciudad);
    $$ciudad="getafe"; //variable variable
    echo($madrid);

    //en PHP una variable NO puede por un numero
    $dato=15
    $$dato="un ejemplo";
    echo($$dato); //funciona aunque $dato tiene como valor 15
    ?>
</body>
</html>