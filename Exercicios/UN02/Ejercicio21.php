<html>
	<head>
		<title>Ejercicio</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-escale=1.0">
		
	</head>
	<body>
        <?php
            
            $numero = 7;
            $nonEPrimo = false;

            for($i = 2; $i < $numero; $i++) {
                if ($numero % $i == 0) {
                    $nonEPrimo = true;
                    break; //Non é recomendable
                }
            }

           if (!$nonEPrimo) {
            echo "O número é primo</br>";
           } else {
            echo "O número non é primo</br>";
           }

           $primo = true;
           $i = 41;
           do {
                if ($numero % $i == 0) {
                    $primo = false;
                }
                $i++;
           } while ($primo);

           if ($primo) {
                echo "O número é primo";
            } else {
                echo "O número non é primo";
           }

        ?>
    </body>
</html>