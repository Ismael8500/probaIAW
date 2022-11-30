<html>
	<head>
		<title>Ejercicio</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-escale=1.0">
		
	</head>
	<body>
        <?php
            
            $numero = 1756;
            $conciente = $numero;
            $rdo = 0;
            $cadea = "";

            while ($conciente != 0) {
                $dixito = $conciente % 10;
                $conciente = floor($conciente / 10);
                $rdo = ($rdo * 10) + $dixito;
                $cadea .= $dixito; //$cadea = $cadea . $dixito

            }
            echo "<p>O inversp dp múmero ($numero) é:" . $rdo . "</p>\n";
            
            $conciente = $numero;

            do {
                $dixito = $conciente % 10;
                $conciente = floor($conciente / 10);
                $cadea .= $dixito;
            } while ($conciente != 0);

            echo "<p>O inversp dp múmero ($numero) é:" . $cadea . "</p>\n";
        ?>
    </body>
</html>