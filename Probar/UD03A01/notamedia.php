<?php 
    $notasPepito = ["eie" => 7, "sri" => 9, "sad" => 3, "aso" => 10, "axdbd" => 5, "iaw" => 9];
    
    $suma = 0;
    $i = 0;
    //$notastotal = count($notasPepito);

    foreach($notasPepito as $valor) {
        $suma += $valor;
        $i++;
    }

    $media = $suma / $i;

    echo "Media de Pepito: $media";
    
    foreach($notasPepito as $clase => $valor) {
        echo "A nota de $clave é: $valor.</br>";
    }
    

?>