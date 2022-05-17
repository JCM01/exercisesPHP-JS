<?php

//almacenar un info en memoria :  variable
//------------------
$n1=$_POST['n1'];//--
$n2=$_POST['n2'];//--
$n3=$_POST['n3'];//--
$n4=$_POST['n4'];//--
$n5=$_POST['n5'];//--
//-------------------
//almacenar la info en un array
$numeros=array($_POST['n1'], $_POST['n2'], $_POST['n3'],
$_POST['n4'], $_POST['n5']);

echo($numeros);
echo("<br>");
print($numeros);
echo("<br>");
print_r($numeros);
echo("<br>");
echo("El segundo numero es ".$numeros[1]);
echo("<br>");
echo("cuantos numeros tiene el array? ".count($numeros));
echo("<br>");
echo("Total de la suma ".array_sum($numeros));
echo("<br>");
$total=array_sum($numeros);
$elementos=count($numeros);
$promedio=($total/$elementos);
echo("Promedio de numeros ".$promedio);
echo("<br>");
var_dump($numeros);
