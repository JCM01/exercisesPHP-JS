<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Clases y objetos - POO </h2>
    <?php
    class Coche {
        function arrancar()
        {
            echo("<p>Coche arrancado</p>");

        }
    }//cierra clase Coche
    $seat=new Coche(); //crear un objeto
    $seat->arrancar(); 

    saludar();

    function saludar(){
        echo("<p>Estoy saludando</p>");
    }

        saludar();
        call_user_func('saludar');

    ?>
</body>
</html>