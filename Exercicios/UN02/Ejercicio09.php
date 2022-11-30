<?php

    $temperatura = rand(-60,60);

    if ($temperatura < 10) {
        echo "<p>Frío con: ". $temperatura ."º</p>\n"; 
    } elseif ($temperatura == rand(10,20)) {
        echo "<p>Nubrado con: ". $temperatura ."º</p>\n";
    } elseif ($temperatura == rand(21,30)) {
        echo "<p>Calor con: ". $temperatura ."º</p>\n";
    } elseif ($temperatura > 30) {
        echo "<p>Tropical con: ". $temperatura ."º</p>\n";
    }

?>