<?php
$salarios=["juan"=>1500,"maria"=>1800,"luis"=>1750,"david"=>2100];
print_r($salarios);
for ($i=0; $i<4 ; $i++){
    //echo($salario[$i]);
}
//mas eficiente foreach
$total=0;
$numero=count($salarios);
foreach($salarios as $key => $value) {
    $total=$total+$value;
}
echo($total/$numero);
/*
$salarios=[1500,3250,4500,1850];
$suma=array_sum($salarios);
    echo("<p>".$suma."</p>");
    $total=count($salarios);
    echo($total);
    $media=$suma/$total;
    echo("<p>El salario promedio es ".$media."</p>");
*/

?>