<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tipos escalares en PHP: bolean, integer, float y string</h2>
    <?php
    $activado=True;
    $apagado=False;
    echo(" la variable activado es ".$activado);
    echo("<br>");
    echo(" la variable apagado es ".$apagado);
    $numero=15;
    echo("<br>");
    echo("el numero entero es ". $numero);
    $precio=18.95;
    echo("<br>");
    echo("el numero flotante es ". $precio);
    echo("<br>");
    echo("el total es ".($numero*$precio));
    $saludo="¿hola que tal estas,\juan\"?";
    echo("br");
    echo("el texto es ".$saludo);
    ?>

<h2>Tipos escalares en PHP: array, object, callable y iterable</h2>
<?php
$frutas=["manzanas"=>2.95, "peras"=>1.95, "naranjas"=>3.55]; //esto es un array
echo("las frutas son ".$frutas["naranjas"]);
$ciudades=["madrid","berlin","roma","paris"];
$capitales=["españa"=>"madrid","alemania"=>"berlin", "italia"=>"roma", "francia"=>"paris"];
echo("<br>");
echo("la ciudad es ".$ciudades[3]);
echo("<br>");
echo("la capital es ".$capitales["francia"]);

foreach($frutas as $precio=>$value){
    echo("<p> el precio es ".$frutas[$precio]."</p>");
}





?>
</body>
</html>