<?php

 abstract class Persona{//no puede instanciarse

    public $nombre;
    public $ciudad;

    public function andar(){
        echo("<p>persona andando</p>");
    }

}//cierra la clase Persona

?>