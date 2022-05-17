<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Expresiones y operadores</h2>
    <a href="https://www.php.net/manual/es/language.expressions.php">Manual PHP</a>
    <h3>Operador ternario</h3>
    <?php
    $sol=true;
    $soleado="usar sombrero";
    $lluvia="usar paraguas";
    $sol ? $sombrero : $lluvia;

    $unidades=5;
    echo($unidades++);//y aqui?
    //echo($unidades);//el resultado 6

    !$sol
    ?>
</body>
</html>