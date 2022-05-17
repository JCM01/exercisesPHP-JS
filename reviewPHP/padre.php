<?php

//propiedades y metodos de un objeto
//tipos de metodos : constructor, destructor, metodo normal

abstract class Padre{//clase abstract NO se puede instanciar, crear en memoria

    public function comer(){
        echo("<p>metodo comer</p>");
    }//cierra metodo comer

    private function comerenprivado(){
        echo("<p>metodo comer en privado</p>");
    }//cierra metodo comer

    public function jugar(){
        echo("<p>metodo jugar del padre</p>");
    }//cierra metodo jugar
    /*
    //sobrecarga: dos metodos con el mismo nombre pero diferentes argumentos
    public function jugar($juego){
        echo("<p>el padre esta jugando a ".$juego."</p>");
    }
    */

}//cierra clase Padre