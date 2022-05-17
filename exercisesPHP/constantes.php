<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Constantes en PHP</h2>
    <p>No pueden cambiar de valor + su nombre en mayusculas</p>
    <?php
        define("MENSAJE","En un lugar de la mancha");
        echo(MENSAJE);// No usar $ en una constante definida
        define("MENSAJE","de cuyo nombre no quiero acordarme");
        echo(MENSAJE);
        echo("<br>");
        const ASIGNATURAS = array("programacion,"marcas","base de datos");
     
        
    ?>
</body>
</html>