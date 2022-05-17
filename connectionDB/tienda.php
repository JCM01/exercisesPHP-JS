<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Conexion PHP Guia</h2>
    <?php
    $con = mysqli_connect("127.0.0.1:33065","root","123456","tienda");
    print_r($con);
    ?>
</body>
</html>