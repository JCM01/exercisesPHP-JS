<?php

session_start();
$_SESSION['email']=$_POST['email'];
$_SESSION['pass']=$_POST['pass'];

echo("<p>Bienvenido ".$_SESSION['email']."</p>");




?>