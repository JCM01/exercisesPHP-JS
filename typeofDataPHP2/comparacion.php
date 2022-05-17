<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Operadores de comparaciones</h2>
    <?php
    $facturacion=15000.95;//cuidado..float es con , o con .?
    //Si la facturacion es mayor de 10000 muestra un mensaje de "buen resultado"
    //y si no, muestra un mensaje de "peor resultado"
        if ($facturacion>10000) {
            echo("Buen resultado");
        }
        else {
            echo("Peor resultado");
        }
        echo("<br/>"); 

    $ciudad="madrid";
    //si la ciudad es diferente a madrid., muestras un mensaje diciendo "no es madrid"
        if ($ciudad!="madrid") {
            echo("no es madrid");}
        
        echo("<br/>"); 
    $dato=5;
    //comprueba si dato es ="5" : quiero que sea igual: muestre un mensaje diciendo son iguales
    //no son iguales en tipo, pero si en valor
        if ($dato=="5") {
            echo("son iguales");
        }else {
            echo("no son iguales");
            }
        



    ?>
</body>
</html>