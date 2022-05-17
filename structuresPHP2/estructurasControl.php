<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>PHP - estructuras de control</h3>
    <?php
    /*1. Crea una archivo php en donde creas una variable llamada asignatura.
Esta variable contiene el texto "programación".
Si la asignatura es programación, muestra un mensaje que indica : lunes a primera hora
Si la asignatura es lenguaje de marcas, muestra un mensaje que indica : martes a primera hora
Si la asignatura es desarrollo de interfaces, muestra un mensaje que indica : miércoles a primera hora
Si NO es estas asignaturas, muestra un mensaje que indica : no sé todavía el horario.

2. Muestra los primeros 7 números impares. El 5 no puede salir.
Es decir, debe salir
1-3 -7 -9 -11 -13-15

3. Crea un array con los siguientes salarios : 1500, 3250, 4500, 1850
Muestra en un mensaje el salario medio.

4. OPCIONAL
Monta una página con cabecera, pie y los tres ejercicios cargados con include/require.*/

echo("<h1>Ejercicio 1</h1>");
$asignatura="programacion";

if ($asignatura=="programacion"){
echo("Lunes a primera hora");
}
else if ($asignatura=="lenguaje de marcas"){
    echo("martes a primera hora");
    }
else if ($asignatura=="desarrollo de interfaces"){
        echo("miercoles a primera hora");
        }
else {
    echo("no sé todavia el horario");
}
echo("<hr>");

echo("<h1>Ejercicio 2</h1>");


for ($i=1; $i <16 ; $i=$i+2) { 
    if($i==5){
        echo("<p>X</p>");
        continue;
    }
    
    echo("<p>".$i."</p>");
}
echo("<hr>");

echo("<h1>Ejercicio 3</h1>");

$salario=["1500","3250","4500","1850"];
$suma=array_sum($salario);
$total_salario= count($salario);
$media= $suma/$total_salario;
echo($media);

    
    ?>
</body>
</html>