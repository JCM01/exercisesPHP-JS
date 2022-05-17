<?php
include_once('iTrabajos.php');
class Trabajos implements iTrabajos {
    public function podar(){
        echo("<p>estoy podando</p>");
    }
    public function picar($a){
        echo("<p>estoy picando ".$a."</p>");
    }
}

?>