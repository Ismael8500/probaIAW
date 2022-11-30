<?php 
function encherArray($numElem)
{
    $array = [];
    for($i = 0; $i < $numElem; $i++) {
        $array[$i] = rand(1, 10);
    }
    return $array;
}

function contarAparicions($array, $valor) 
{
    $cont = 0;
    foreach($array as $num) {
        if ($num == $valor) {
            $cont++;
        }
    }
    return $cont;
}

$array = encherArray(35);

$cont = 0;
foreach ($array as $indice => $valor) {
    echo $valor . " ";
    if (($indice + 1) % 10 == 0) {
        echo "</br>";
    }
}

?>