<?php

    $num = rand(-10,10);
    
    if (is_numeric($num)) {
        if ($num == 0) {
        echo "<p>Num es Neutro</p>\n"; 
        } elseif ($num > 0) {
        echo "<p>Num es Positivo</p>\n";
        } else {
        echo "<p>Num es Negativo</p>\n";
        }
    } else {
        echo "<p>No es númerico</p>";
    }
    

?>