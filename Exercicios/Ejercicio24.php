<html>
	<head>
		<title>Ejercicio</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-escale=1.0">
		
	</head>
	<body>
                    <?php
                    
                        $var = 32;
                        $var2 = 0.55556;
                        $var3 = 273.15;

                        $gradoC = ("150" - $var)**$var2;
                        echo "<p>Faranheit ==> Celsius</p>\n";
                        echo "<p>GradoC: ". $gradoC ."</p>\n";

                        $gradoK = $gradoC + $var3;
                        echo "<p>Faranheit ==> Kelvin</p>\n";
                        echo "<p>GradoK: ". $gradoK ."</p>\n";

                    ?> 
	</body>
</html>