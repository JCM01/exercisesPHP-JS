<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Practica con arrays en PHP</h2>
    <?php
    $notas=array(
    "base de datos" =>7.5,
    "programacion" =>6.8,
    "lenguaje de marcas" =>8.2,
    "sistemas operativos de red" =>5.4,
    );

    print_r($notas);
    //Muestra el listado de asignaturas con sus notas ordenadas de mayor a menor (por nota)
    echo("<br>");
    arsort($notas);//metodo que ordena por valor y de mayor o menor
    //foreach ($notas as $key => $val) {
      //  echo "$key = $val\n";
    //}
    //Muestra la nota media que has obtenido
    $suma=0;
    foreach ($notas as $value) {
        $suma=$suma+$value;
    };
    $total=array_sum($notas);
    echo($total);
    //echo("<br>la nota media es de: ".$suma/count($notas));

    ?>
</body>
</html>