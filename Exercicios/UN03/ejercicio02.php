<?php 
function encherArray($numElem)
{
    $array = [];
    for($i = 0; $i < $numElem; $i++) {
        $array[$i] = rand(1, 10);
    }
    return $array;
}

$array = encherArray(10);
print_r($array);
echo "</br>";
var_dump($array);

?>