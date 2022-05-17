<?php
echo("<h2>Tu loteria de la suerte</h2>");
$n= $_POST["numero"];
if ($n == 7) {
    echo ("<p>Te has ganado la loteria</p>");
}
    else {
        echo("<p>No te has ganado la loteria</p>");
    }
?>