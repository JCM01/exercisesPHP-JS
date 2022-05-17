<?php
session_start();
$_SESSION['correo']=$_POST["email"];
echo("<p>Tu direccion es ".$_SESSION_['correo']."</p>");

?>