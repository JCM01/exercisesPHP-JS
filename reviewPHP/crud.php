<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Conexion a fuente de datos</h2>
    <ul>
        <li>extension mysql (obsoleto)</li>
        <li>extension mysqli (nativa)</li>
        <li>extension PDO</li>
    </ul>
    <p>CRUD: create read ipdate delete : insertar, select, actualizar y eliminar</p>
    <form action="alta.php" method="post">
        <input type="text" name="nombre" placeholder="dime el producto"><br>
        <input type="number" name="unidades" placeholder="dime las unidades"><br>
        <input type="number" step="any" name="precio" placeholder="dime el precio"><br>
        <input type="date" name="fecha" placeholder="dime la fecha"><br>
        <input type="submit" value="enviar">
    </form>
    <?php
    //conexion a la tabala de la base de datos mysql
    $conexion= new mysqli("localhost","root","","amazon","3306");
    echo($conexion->host_info);
    $resultado = $conexion->query("select * from productos");
    print_r($resultado);

    while($fila=$resultado->fetch_array())
    {
        print_r("<p>".$fila['nombre']."</p");
    }

    ?>
</body>
</html>