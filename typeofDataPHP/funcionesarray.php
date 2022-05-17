<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Funciones con arrays en PHP 8.0</h2>
    <?php
    $tareas=array(
        "lunes"=>"Repasar programacion",
        "miercoles"=>"Ejercicios de sistemas",
        "viernes"=> "Practicar etiquetas HTML5",
        "sabado"=>"Instalar IDE Eclipse"
        );
        print_r($tareas);
        echo("<br>");
        print_r(ksort($tareas));
        echo("<br>");
        print_r($tareas);
        //print($tareas["lunes"]);
        ?>
</body>
</html>