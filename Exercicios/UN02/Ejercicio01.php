<?php

    $num = rand(1,10);
    $num2 = rand(1,10);
    if ($num > $num2) {
        echo "<p>Num, mayor que, Num2</p>\n";
    } elseif ($num2 > $num) {
        echo "<p>Num2, mayor que, Num</p>\n"; 
    } else {
        echo "<p>Num y Num2 son iguales</p>";
    }

?>