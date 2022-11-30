<?php
$notas[0] = [6, 6, 10];
$notas[1] = [0 => 8, 1 => 6, 2 => 10, 3 => 7];

for ($i = 0; $i < count($notas); $i++) {
    for ($j = 0; $j < count($notas[$i]); $j++) {
        echo $notas[$i][$j];
    }

}

?>