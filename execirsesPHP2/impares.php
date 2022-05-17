<?php

for ($i=0; $i<14; $i+=2) {
    if($i==5)
    {
        echo("<p>x</p>");
        continue;
    }
    echo("<p>".$i."</p>");
}

$limite=1;
while($limite<16)
{
    if($limite==5)
    {
        echo("<p>x</p>");
        $limite+=2;
        continue;
    }
    echo("<p>".$limite."</p>");
    $limite+=2;
}

?>