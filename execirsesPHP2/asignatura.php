<?php

$asignatura=$_POST['$asignatura'];// = de asignación

switch ($asignatura) {
    case 'programacion':
        echo("<p>El horario es lunes por la mañana</p>");
        break;
    case 'lenguaje de marcas':
        echo("<p>El horario es martes por la mañana</p>");
        break;
    case 'desarrollo de interfaces':
        echo("<p>El horario es miércoles por la mañana</p>");
        break;
    default:
        echo("<p>No tienes esa asignatura</p>");
        break;
}
?>