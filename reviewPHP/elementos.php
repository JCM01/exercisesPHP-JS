<?php
//crear un array que almacena camisa, pantalon, sombrero y abrigo
$almacen=array('camisa','pantalon','sombrero','abrigo');
//muestres los datos del array ordenados alfabeticamente
asort($almacen);
print_r($almacen);

//muestra cuantos elementos tiene el array

echo("<p>elementos que hay en el array: </p>".count($almacen));
//elimina el pantalon
echo("<br>");
unset($almacen[1]);
//muestra de nuevo los elementos actualizados
print_r($almacen);




