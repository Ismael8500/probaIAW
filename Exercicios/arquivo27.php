<html>
	<head>
		<title>Ejercicio</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-escale=1.0">
		
	</head>
	<body>
                    <?php
                        $r = 30;
                        $h = 50;
                        
                        $A = 2 * M_PI * $r * ($r + $h);
                        $V = M_PI * pow($r, 2) * $h;
                        

                        echo "<p>Radio: ". $r ."</p>\n";
                        echo "<p>Altura: ". $h ."</p>\n";
                        echo "<p>Número PI: ". M_PI ."</p>\n";
                        echo "<p>A: ". $A ."</p>\n";
                        echo "<p>V: ". $V ."</p>\n";

                    ?> 
	</body>
</html>