<?php

    $num = rand(0,10);
    $num2 = rand(0,10);
    $num3 = rand(0,10);

    if ($num > $num2) {
        if ($num > $num3) {
            echo "<p>Num: ". $num ." es el número maior</p>\n";
        } else {
            echo "<p>Num3: ". $num3 ." es el número maior</p>\n";
        }
    } else {
        if ($num2 > $num3) {
            echo "<p>Num2: ". $num2 ." es el número maior</p>\n";
        } else {
            echo "<p>Num3: ". $num3 ." es el número maior</p>\n";
        }
    }

?>