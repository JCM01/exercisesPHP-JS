<?php

class Deportista extends Persona {

    public $equipo;
//sobrecarga
    public function jugar(){
        echo("<p>esta jugando</p>");
    }
   
    public function andar($tipo){
        echo("<p>esta andando pero como deportista".$tipo."</p>");
    }

}//cierra Deportista
?>