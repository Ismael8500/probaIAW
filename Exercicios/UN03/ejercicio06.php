<?php 
function encherArray($numElem)
{
    $array = [];
    for($i = 0; $i < $numElem; $i++) {
        $array[$i] = rand(1, 10);
    }
    return $array;
}

$array = encherArray(35);
$cont = 0;
foreach ($array as $valor) {
    echo $valor . " ";
    $cont++;
    if ($cont == 10) {
        echo "</br>";
        $cont = 0;
    }
}

foreach ($array as $indice => $valor) {
    echo $valor . " ";
    if ($cont == 10) {
        echo "</br>";
        $cont = 0;
    }
}

?>