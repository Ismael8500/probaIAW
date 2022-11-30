<?php

    $num = rand(1, 12);

    switch($num){
        case ($num == (1 || 2 || 3)):
            echo "El mes: ". $num ." esta en el 1ºTrimestre";
            break;
        case ($num == (4 || 5 || 6)):
            echo "El mes: ". $num ." esta en el 2ºTrimestre";
            break;
        case ($num == (7 || 8 || 9)):
            echo "El mes: ". $num ." esta en el 3ºTrimestre";
            break;
        case ($num == (10 || 11 || 12)):
            echo "El mes: ". $num ." esta en el 4ºTrimestre";
            break;
    }
?>