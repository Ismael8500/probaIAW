<html>
    <head>
		<title>Ejercicio</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-escale=1.0">
		<link rel="stylesheet" type="text/css" href="Plantilla_CSS_Ismael2.css" />
	</head>
	<body>
        <?php 
        
            function imprimirCabeceira() {
                echo "<h1>Empresa Pepito</h1>";
                echo "<h3>Estamos ao seu servizo desde 1980</h3>";

            }
            echo "<h1>Páxina principal</h1>";
            imprimirCabeceira();

            include 'funcion.php';
            $operando1 = 3;
            $operando2 = 5;
            /*
            suma($op1, $op2);
            resta($op1, $op2);
            producto($op1, $op2);
            division($op1, $op2);
*/
            $operador = '+';
            $total = operacionesMates($operando1, $operando2, $operador);
            echo "<p>Total de $operando1 $operador $operando2 = $total</p>\n";

            $operador = '-';
            $total = operacionesMates($operando1, $operando2, $operador);
            echo "<p>Total de $operando1 $operador $operando2 = $total</p>\n";

            $operador = '*';
            $total = operacionesMates($operando1, $operando2, $operador);
            echo "<p>Total de $operando1 $operador $operando2 = $total</p>\n";

            $operador = '/';
            $total = operacionesMates($operando1, $operando2, $operador);
            echo "<p>Total de $operando1 $operador $operando2 = $total</p>\n";

        ?>
    </body>
</html>