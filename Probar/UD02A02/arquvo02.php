<?php
    $numero = rand(1,11);

    switch($numero) {
        case 1:
            $texto = "un";
            break;
        case 2:
            $texto = "dos";
            break;        
        case 3:
            $texto = "tres";
            break;
        case 4:
            $texto = "cuatro";
            break;
        case 5:
            $texto = "cinco";
            break;
        case 6:
            $texto = "seis";
            break;
        case 7:
            $texto = "siete";
            break;
        case 8:
            $texto = "ocho";
            break;
        case 9:
            $texto = "nueve";
            break;
        case 10:
            $texto = "dez";
            break; 
        default:
            $texto = "indefinido";
    }
        echo "<p>O número $numero ten como texto: $texto</p>\n";
?>