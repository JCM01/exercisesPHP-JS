<?php
//EXAMEN
//funcion tradicional
function saludar($nombre){

    return"<p>Hola qué tal, ".$nombre."</p>";
}//cierra funcion


//funcion anonima(closure)
$despedir = function($nombre){
    return "<p>Hasta luego, ".$nombre."</p>";
};

//funcion flecha
$resultado = fn($numero)=>$numero*$numero;

?>