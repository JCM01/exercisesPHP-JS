<?php 

$nota=10;
if($nota>7) {
    echo "sobresaliente";
} elseif ($nota>5){
    echo "aprobado";
}
else{
    echo "NO es mayor";
}
echo "<br/>";
//otro metodo
$nota=10;
if($nota>7):
    echo "sobresaliente";
    echo "eres una maquina";
 elseif ($nota>5):
    echo "aprobado";

 else:
    echo "NO es mayor";

    
 endif;

?>