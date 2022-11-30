<?php

    $num = rand(3,50);
    $mul3 = abc($num / 3);
    $mul5 = abc($num / 5);

    if (isset($num)) {
        if (is_integer($num)) {
            if (($num % 3 == 0) && ($num % 5 == 0)) {
                echo "<p>Num: ". $num ." es multiplo de 3 y 5</p>\n";
            } else {
                echo "<p>Num3: ". $num ." no es multiplo de 3 y 5</p>\n";
            }
        }
        
    } else {
        if ($num2 > $num3) {
            echo "<p>Num2: ". $num2 ." es el número maior</p>\n";
        } else {
            echo "<p>Num3: ". $num3 ." es el número maior</p>\n";
        }
    }

?>