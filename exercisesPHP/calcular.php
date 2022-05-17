<?php
echo("<h2>Calculo de unidades * precio</h2>");
$unidades= $_POST["unidades"];
$precio = $_POST["precio"];
$total=$unidades*$precio;
echo($total);
?>