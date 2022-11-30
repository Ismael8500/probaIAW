<html>
	<head>
		<title>Ejercicio</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-escale=1.0">
		
	</head>
	<body>
        <?php
            
            $rangoI = 43;
            $rangoS = 56;
            $cont = 0;
            $numero = $rangoI;
            /*
            if ($rangoI <= $rangoS) {
                while ($numero <= $rangoS) {
                    if ($numero % 2 == 0) {
                        $cont++;
                    }
                    $numero++;
                
                    //echo "<p>O número é $i</p>\n";
                
                    //$cont++;
                }
                echo "<p>O número de pares entre $rangoI e $rangoS é: $cont</p>\n";
            } else {
                echo "<p>O rango é incorrecto</p>\n";
            }*/
                
            if ($rangoI > $rangoS) {
                $numero = $rangoS;
                $rangoS = $rangoI;
                $rangoI = $numero;
            }   while ($numero <= $rangoS) {
                    if ($numero % 2 == 0) {
                        $cont++;
                    }
                    $numero++;
                
                    //echo "<p>O número é $i</p>\n";
                
                    //$cont++;
                }
                echo "<p>O número de pares entre $rangoI e $rangoS é: $cont</p>\n";
            
            
            //echo "<p>Entre o número $numeroI e o número $numeroS hay una separacion de $cont.</p>\n";

        ?>
    </body>
</html>