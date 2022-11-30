<?php

    $tipo = "x";
    $pago = "P";
    $compra = 95;
    //$tipo = strtolower($tipo);

    if ($tipo == 'x' || $tipo == 'a') {
        if ($pago == 'C' || $pago == 'P') {
            switch($tipo = strtolower($tipo)) {
                case 'x':
                    switch(strtoupper($pago)){
                        case 'C':
                            $dto = $compra - ($compra * 0.15);
                            break;
                        case 'P':
                            $dto = $compra + ($compra * 0.10);
                            break;
                    }
                    break;
                case 'a':
                    switch(strtoupper($pago)){
                        case 'C':
                            $dto = $compra - ($compra * 0.20);
                            break;
                        case 'P':
                            $dto = $compra + ($compra * 0.05);
                            break;
                    }
                    break;
                default:
                    echo "Introduciste un tipo diferente";
                    break;

            }

            echo "Tienens que pagar: ". $dto;
        } else {
            echo "Introduciste un pago mal"; 
        }
    } else {
        echo "Introdución algun parametro mal";
    }
    
?>