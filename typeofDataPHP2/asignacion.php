<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Operadores de asignacion</h2>
    <?php
    $numero=10;
    //aumentar el numero a un total de 15
    $numero +=5;
    echo($numero);
    echo("<br/>");
    //que pasa si le dices $numero .=5 te da error?
    $numero .=5;
    echo($numero);
    echo("<br/>");

    $saludo="hola";
    //quiero mostra un mensaje, que sea hola, que tal?*sin declarar variable
    $saludo .="que tal?";
    echo($saludo);
    echo("<br/>");
     //que pasa si le dices $saludo +="que tal?" te da error?
    $saludo +="que tal?";
    echo("<br/>");
    ?>
</body>
</html>