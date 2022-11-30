<?php 
    $vector1 = [5, 6, 7];
    $vector2 = [5, 6, 7];
    $i = 0;

    if (count($vector1) == count($vector2)) {
        for ($i = 0; $i < count($vector1); $i++) {
            $suma[$i] = $vector1[$i] + $vector2[$i];
        }
    }

    if (count($vector1) == count($vector2)) {
        foreach ($vector1 as $clave => $valor) {
            $suma2 = $valor + $vector2[$clave];
        }
    }
    

    var_dump($suma);
    print_r($suma2);

?>