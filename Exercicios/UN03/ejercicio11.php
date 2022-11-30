<?php

for ($i = 0; $i < 6; $i++) {
    echo "FILA ". ($i +1) .": ";
    for($j = 0; $j < 4; $j++) {
        $datos[$i][$j] = pow(3,($j + 1));
    }
    echo "</br>";
}

?>