<?php

//declare(encoding="ISO-8859-1")
for ($i=0; $i<10; $i++) {
    if($i==5){
        continue 1;
    }
    echo $i."-";
}

echo "<br/>";

//Muestra una lista de números del 1 al 14
//-NO puedes mostrar el 7
//-El 11 no sale y en su lugar escribir X
//1 2 3 4 5 6 8 9 10 X 12 13 14
for ($i=0; $i<=14; $i++){
    if($i==7){
        continue;
    } elseif ($i==11){
        echo "X-";
        continue;
    }
    echo $i."-";
}