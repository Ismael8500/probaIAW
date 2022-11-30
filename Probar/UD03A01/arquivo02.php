<?php 
    $notasPepito = [7, 9, 3, 10, 5, 9];
    $suma = 0;
    $notastotal = count($notasPepito);

    for($i = 0; $i < $notastotal; $i++) {
        $suma += $notasPepito[$i];
    }

    $media = $suma / $notastotal;

    echo "Media de Pepito: $media";

?>