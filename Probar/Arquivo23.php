<html>
	<head>
		<title>Ejercicio</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-escale=1.0">
		
	</head>
	<body>
                    <?php
                    
                        $var = false;
                        $num1 = 44;
                        $num2 = 44;
                        echo "<p>". (($num1 === $num2)?('Son iguais'):('Son diferentes')) ."</p>\n";
                       
                        $var = false;
                        $num1 = 44;
                        $num2 = 43;
                        echo ($num1 === $num2)?($num1 + $num2):($num1 - $num2);

                    ?> 
	</body>
</html>