<html>
	<head>
		<title>Ejercicio</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-escale=1.0">
		
	</head>
	<body>
        <?php
            
            $numero = 320;
            $conciente = $numero;
            $rdo = 0;
            $cadea = "";

            while ($conciente != 0) {
                $dixito = $conciente % 10;
                $conciente = floor($conciente / 10);
                $rdo += $dixito ** 3;
                $cadea .= $dixito; //$cadea = $cadea . $dixito

            }
            echo "<p>O cubo de ($numero) é:" . $rdo . "</p>\n";
            if ($rdo == $numero) {
                echo "<p>O número $numero é un cubo perfecto</p>\n";
            } else {
                echo "<p>O número $numero non é un cubo perfecto</p>\n";
            }
            
            $conciente = $numero;
            $rdo = 0;

            do {
                $dixito = $conciente % 10;
                $conciente = floor($conciente / 10);
                $rdo += $dixito ** 3;
            } while ($conciente != 0);

            echo "<p>O cubo de ($numero) é:" . $rdo . "</p>\n";
            if ($rdo == $numero) {
                echo "<p>O número $numero é un cubo perfecto</p>\n";
            } else {
                echo "<p>O número $numero non é un cubo perfecto</p>\n";
            }




        ?>
    </body>
</html>