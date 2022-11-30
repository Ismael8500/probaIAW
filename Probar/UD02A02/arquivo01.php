<?php

    $num = rand(1,10);
    if ($num == 10) {
        echo "<p>Vitoria para el número ". $num ."</p>\n";
    } else {
        echo "<p>Derrota para el número ". $num ."</p>\n"; 
    }

    echo (($num % 2 ) == 0) ? "<p>Tocouche un número par</p>\n" : "<p>Tocouche un número impar</p>\n";
?>