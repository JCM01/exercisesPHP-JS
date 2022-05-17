<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Operadores aritmeticos</h2>
    <p>+ - * / % **</p>

    <?php
    $n1=8;
    $n2=3;

    //suma
    $resultado=$n1+$n2;
    echo($resultado);
    echo("<br/>");
    //resta
    $resultado=$n1-$n2;
    echo($resultado);
    echo("<br/>");
    //division : resultado muestra los decimales?
    $resultado=$n1/$n2;
    echo($resultado);
    echo("<br/>");
    //modulo
    $resultado=$n1%$n2;
    echo($resultado);
    echo("<br/>");
    //exponente
    $resultado=$n1**$n2;
    echo($resultado);
    echo("<br/>");

    ?>
</body>
</html>