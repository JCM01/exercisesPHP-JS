<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tarea 1 -
Crea un formulario en html que pida un texto 
en un text area
al pulsar en un botón, muestras ese texto al revés.
También indica cuántos caracteres tiene.</h2>

<form action="formulario.php" method="POST">
Dime un texto: <textarea name="texto" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" value="Enviar">
</form>

    <?php  
    echo strrev($_POST["texto"]); // outputs "!dlrow olleH
    
    


    




    ?>
</body>
</html>