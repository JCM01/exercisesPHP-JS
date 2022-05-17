<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Alta de nuevos usuarios</h2>
    <p>Rellene el siguiente formulario</p>
    <form method="post" action="alta.php">
   <label for="email">Email</label>
   <input type="email" name="email" id="email"><br>
    <label for="ciudad">Ciudad</label>
            <select name="ciudad" id="ciudad" size="1">
            <option>Madrid</option>
            <option>Sevilla</option>
            <option>Barcelona</option>
            </select><br>
            <label for="unidades">Unidades</label>
    <input type="number" name="unidades" id="unidades"><br>
    <input type="checkbox" name="acepto" id="acepto"> 
    <label for="acepto">Aceptas la politica de privacidad de la Cookies</label><br>
    <label for="fecha">Fecha</label>
    <input type="date" name="fecha"><br>

    <input type="submit" value="Enviar">
    </form>
</body>
</html>