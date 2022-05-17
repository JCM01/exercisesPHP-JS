<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Estructuras de control con if elseif</h2>
    <h3>Condicional</h3>
    
    <?php
    $unidades=50;
    $descuento=null;
    $precio=7.5;
    /*si las unidades superan los 40, el descuento es el 20%
    si las unidades solo superan los 20, el descuento es un 15%
    y si no llega a 20, el descuento, por defecto, es 5%
    siendo el precio 7.5 dime cuanto asciende la factura*/

    if($unidades>40)
    {
        $descuento=0.2;
    }
    elseif($unidades>20)
    {
        $descuento=0.15;
    }
    else {
        $descuento=0.05;
    }//cierra estructura if

    echo($descuento);
    $total=$unidades*$precio*(1-$descuento);
    echo("<p>El total es " .$total."</p>");
    ?>

    <h3>Condicional con switch case</h3>
    <?php
    switch ($unidades) {
        case ($unidades>40):
            $descuento=0.2;
            break;
        case ($unidades<20):
            $descuento=0.15;
            break;
        
        default:
            $descuento=0.05;
            break;
    }
    $total=$unidades*$precio*(1-$descuento);
    echo("<p>El total es " .$total."</p>");
    ?>

    <h3>Bucles</h3>
    <?php
    $colores=["rojo","verde","azul","amarillo"];
    echo("<p>Los colores son : </p>");
    for ($i=0; $i <4 ; $i++) {
        echo("<p>".$colores[$i]."</p>");
    }

    echo("<hr>");

    foreach ($colores as $key => $value) {
        # code...
        echo("<p>".$value."</p>");
    }

    /*mostrar los colores en una lista desordenada
    puedes utilizar for, foreach, while, do while...
    elegir cual usar
    <ul>
    <li>dd.d.dds</li>
    <li>dd.d.dds</li>
    </ul>
    */
    echo("<ul>");
    foreach ($colores as $key => $value) {
        # code...
        echo("<li>".$value."</li>");
    }
    echo("</ul>");
    ?>
    <h3>break vs continue</h3>
    <?php
    /*NO quiero que salga el 3*/
    /*for ($i=0; $i <5 ; $i++) { 
        if($i==3) { 
            echo("<p>X</p>");
            continue;
        }
        echo("<p>".$i."</p>");
    }*/

    /*muestra los primeros 10 numeros pares pero el numero 4 
    y el 8 no puede salir(puedes ponerles una x)
    0-2-X-6-8-10-12-14-16-18
    */
    for ($i=0; $i <=18 ; $i=$i+2) { 
        if($i==4 || $i==8) { 
            
            echo("<p>X</p>");
            continue;
        }
        echo("<p>".$i."</p>");
    }
    ?>
</body>
</html>