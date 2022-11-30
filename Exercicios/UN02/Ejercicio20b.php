<html>
	<head>
		<title>Ejercicio</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-escale=1.0">
		
	</head>
	<body>
        <?php
            
            $rangoI = 20;
            $rangoS = 40;
            $valor = 4;
            $cont = 0;

            for( ; $rangoI <= $rangoS; $rangoI++) {
                if ($rangoI % $valor == 0) {
                    $cont++;
                }
            }
           echo "O número de múltiplos de $valor é: ". $cont;

        ?>
    </body>
</html>