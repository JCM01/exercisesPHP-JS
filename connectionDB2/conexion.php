<?php

function abrirConexion(){
    //$conn=new mysqli('localhost','root','','base1',3306)
   //or die ('Error de conexión');
   try{
        $conn=new mysqli('localhost','root','','base1',3306);
        $consulta='select * from clientes';
        $resultado=mysqli_query($conn,$consulta,);
        //print_r($resultado);

        echo("<table border='1'><th><td<Nombre</td><td>Ciudad</td><td>Facturacion</td></th>");
        while ($a = mysqli_fetch_all($resultado)){
            echo("<tr>");
            foreach($a as $col_value){
                echo("<td>".$col_value[1]."<br>");
                echo("<td>".$col_value[2]."<br>");
                echo("<td>".$col_value[3]."<br>");
                echo("</tr>");
            }
        }
        echo("</table>");
   }
   catch(Error $err){
        echo("error de conexion");
   }
    
    return $conn;
}

function cerrarConexion($conn){
    $conn->close();
}