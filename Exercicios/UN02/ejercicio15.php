<html>
	<head>
		<title>Ejercicio</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-escale=1.0">
		
	</head>
	<body>
        <?php
            
            $numeroN = 45;
            $multiplos = 0;
            $i = 1;

            while ($i <= $numeroN) {
                if ($i % 5 == 0) {
                    $multiplos++;
                }
                $i++;
            }
            echo "<p>0 número de múltiplos ata $numeroN é: $multiplos.</p>\n";

        ?>
    </body>
</html>