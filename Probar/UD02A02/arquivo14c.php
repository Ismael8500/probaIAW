<html>
	<head>
		<title>Ejercicio</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-escale=1.0">
		
	</head>
	<body>
        <?php
            
            $rangoI = 30;
            $rangoS = 50;
            $cont = 0;

            for($i = $rangoI; $i <= $rangoS; $i++) {
                if ($i %2 == 0) {
                    $cont++;  
                }
                
            }
            echo "<p>Entre o número $rangoI e o número $rangoS hai $cont pares.</p>\n";

        ?>
    </body>
</html>