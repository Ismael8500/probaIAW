<?php
$cont = 1;
// Recorrido filas
for ($i = 0; $i < 3; $i++) {
    //Recorrido columnas
    for ($j = 0; $j < 5; $j++) {
        $array[$i][$j] = $i + $j;
    }
    echo "</br>";
}

print_r($array);

?>