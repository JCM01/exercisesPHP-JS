<?php

class Hija extends Padre{

    public function dormir(){
        echo("<p>estoy durmiendo</p>");
    }//cierra metodo dormir


    //sobrescritura - herencia
    public function jugar(){
        echo("<p>metodo jugar del padre</p>");
    }//cierra metodo jugar

}//cierra clase Hija