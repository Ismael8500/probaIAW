<?php
    function eCadrada($array) {
        $rdo = false;
        if (count($array) > 0 ) {
            if (count($array) == count($array[0])) {
                $rdo = true;
            }
        }
        return $rdo;
    }

    function crearMatrizIdentidade($tam) {
        for ($i = 0; $i < $tam; $i++) {
            for ($j = 0; $j < $tam; $j++) {
                if ($i == $j) {
                    $array[$i][$j] = 1;
                } else {
                    $array[$i][$j] = 0;
                }
            }
        }
        return $array;
    }

    function crearMatrizDiagonal($tam) {
        $array = [];
        if (is_integer($tam) && ($tam > 0)){
            for ($i = 0; $i < $tam; $i++) {
                for ($j = 0; $j < $tam; $j++) {
                    if ($i == $j) {
                        $array[$i][$j] = rand(1,9);
                    } else {
                        $array[$i][$j] = 0;
                    }
                }
            }
        }
        
        return $array;
    }

    function obterTrasposta($array) {
        $trasposta = null;
        if (is_array($array)) {
            foreach ($matriz1 as $posFila => $fila) {
                foreach ($fila as $posCol => $value) {
                    $trasposta [$posCol][$posFila] = $valor;
                }
            } 
        }
        return $trasposta;
    }

    function eSimetrica($array) 
    {
        $coinciden = true;
        if (is_array($array)) {
            $trasposta = obterTrasposta($array);
            foreach($array as $posCol => $valor) {
                foreach($fila as $posCol => $valor) {
                   if ($array[$posFila][$posCol] != $trasposta[$posFila][$posCol]) {
                        $coinciden = false;
                        break 2;
                   }
                }
            }

            $posFila = 0;
            while ($coinciden && ($posFila < count($array))) {
                $posCol = 0;
                while($coinciden && ($posCol < count($array))) {
                    if ($array[$posFila][$posCol] != $trasposta[$posFila][$posCol]) {
                        $coinciden = false;
                    }
                    $posCol++;
                }
                $posFila++;
            }
            
        }
        return $coinciden;
    }




































    print_r(crearMatrizIdentidade(5));
    print_r(crearMatrizDiagonal(5));
    print_r(eCadrada(5));

?>