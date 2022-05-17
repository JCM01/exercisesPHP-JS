<?php
  include_once('Vehiculo.php');//importar la clase
class Coche extends Vehiculo{ //herencia simple
//clase hija coche y vehiculo es padre
//variables pertenecientes a una clase se llaman "propiedades"...
    public $nombre="juan";
    public $ruedas=4;

    public static function arrancar(){
        echo("<p>arrancando el coche</p>");

    }//cierra metodo arrancar

    private function girarLlave(){
        echo("<p>girar la llave</p>");
    }//cierra metodo girarLlave

}//cierra clase Coche

?>