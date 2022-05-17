<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=7, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    try{
    $numero=10;
    $numero2=0;
    $resultado=$numero/$numero2;

    }
    catch(Error $ex)
    {
        echo("error ".$ex->getMessage());
    }

    include_once('conexion.php');
    $conexion=abrirConexion();
    //print_r($conexion);
    
    

    ?>

<p>sigue la web</p>
</body>
</html>