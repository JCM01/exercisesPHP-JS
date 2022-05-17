<?php
if( $_POST["submit"] ){
    foreach($_POST as $campo => $valor) {
        $_SESSION['registro'][$campo] = $valor;
    }

echo $_SESSION['registro']['email'];
echo("<br>");
echo $_SESSION['registro']['unidades'];
echo("<br>");
echo $_SESSION['registro']['fecha'];
}


?>