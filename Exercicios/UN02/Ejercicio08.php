<?php

    $importe = rand(50,150);
    $descuento1 = $importe - (($importe * 10) / 100);
    $descuento2 = $importe - (($importe * 20) / 100);

    if ($importe <= 100) {
        echo "<p>Paga: ". $descuento1 ."€ con el 20% de descuento</p>\n"; 
    } else {
        echo "<p>Paga: ". $descuento2 ."€ con el 10% de descuento</p>\n";
    }

?>