<html>
	<head>
		<title>Ejercicio</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-escale=1.0">
		
	</head>
	<body>
        <?php
            
            $numeroI = 30;
            $numeroS = 50;
            $i = $numeroI;
            $cont = 0;
            while ($i <= $numeroS) {
                echo "<p>O número é $i</p>\n";
                $i++;
                $cont++;
            }
            echo "<p>Entre o número $numeroI e o número $numeroS hay una separacion de $cont.</p>\n";

        ?>
    </body>
</html>