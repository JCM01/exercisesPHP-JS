<?php
echo("Corregir la práctica");
$ciudad=$_POST['ciudad'];
$nota=$_POST['nota'];

if(($ciudad=="madrid" && $nota>6) || ($ciudad=="sevilla" && $nota>7))
echo(" has pasado el corte");
else
echo("No has pasado el corte");

?>