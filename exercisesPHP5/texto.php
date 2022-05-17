<?php

$texto="En un lugar de la mancha";
echo(strtoupper($texto));
echo("<br>");
//muestra el total de caracteres de la variable $texto
echo("<br>");
echo(strlen($texto));
//muestra los 6 primeros caracteres 
echo("<br>");
echo("<p>".substr($texto,6)."</p>");
//muestra los 6 ultimos caracteres
echo("<br>");
echo("<p>".substr($texto,-6)."</p>");
//dime en que posicion esta la m
echo("<br>");
echo("<p>".strpos($texto, 'm')."</p>");

//quiero enviar el texto como un mensaje "encriptado".
//convierte el texto en un texto encriptado
function encrypt($texto){
    $numeros = 12345;
    $resultado = str_replace($texto, "3", strtoupper($texto));
    echo($resultado);
    }

$direccion="calle Arenal, 8 - 28001";
//Muestra la dirección por un lado y el código postal por otro
echo("<p>".substr($direccion,0,strpos($direccion,'-'))."</p>");
echo("<p>".substr($direccion,strpos($direccion,'-')+2,strlen($direccion))."</p>");
/*$arr1 = str_split($direccion);
$arr2 = str_split($direccion,6);

print_r($arr1);
print_r($arr2);*/

//Muestra la fecha de hoy en formato tal que así 15/02/2021


//Muestra la fecha de hoy con la hora, minuto y segundo


$numero = 15.598;
//Muestra el número redondeado sin decimales



?>