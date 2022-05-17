<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Variables : Asignacion por valor vs asignacion por referencia &</h2>
    <?php
    $ciudad="Madrid"; //asignacion de valor
    $capital=&$ciudad; //asignar por referencia &
    $ciudad='Roma';
    echo($ciudad);
    echo("<br>");
    echo($capital);
    ?>
    <h2>Ambito de variables</h2>
    <?php
    echo($ciudad);
    $unidades=15; //asignacion por valor y ambito global

    function calcular()
    {
        global $unidades;// en php puede usar las variables globales pero hay que indicarlo expresamente con la palabra
        $unidades=21; //ambito local de la funcion y sobreescribir variables
        echo($unidades);//ambito local de la funcion calcular
    }
    calcular();
    ?>
    <h2>Variables estaticas</h2>
    <?php
    function contar()
    {
        static $dato=0; //ambito local
        echo($dato);
        $dato++;
    }
    contar();
    ?>
</body>
</html>