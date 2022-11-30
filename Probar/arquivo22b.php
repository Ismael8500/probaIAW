<html>
	<head>
		<title>Ejercicio</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-escale=1.0">
		
	</head>
	<body>
                <ol>
                    <?php
                    
                        $num1 = 44;
                        $num2 = 22;

                            $suma = $num1 + $num2 ;
                            echo "<p>Suma: ". $suma ."</p>\n";

                            $resta = $num1 - $num2 ;
                            echo "<p>Resta: ". $resta ."</p>\n";

                            $division = $num1 / $num2 ;
                            echo "<p>Division: ". $division ."</p>\n";

                            $pc = $num1 % $num2 ;
                            echo "<p>Porcentaje: ". $pc ."</p>\n";

                            $num = -55;
                            echo "<p>Porcentaje: ". abs($num) ."</p>\n";

                            echo "<p>Max: ". max(-55, -3, -897, -1098, -345, -9) ."</p>\n";
                            
                            echo "<p>Max: ". abs(max(-55, -3, -897, -1098, -345, -9)) ."</p>\n";

                            echo "<p>Max: ". max(abs(-55), abs(-3), abs(-897), abs(-1098), abs(-345), abs(-9)) ."</p>\n";

                    ?> 
                </ol>
	</body>
</html>

