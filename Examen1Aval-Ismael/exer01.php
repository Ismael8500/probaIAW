<html>
	<head>
		<title>Exer01</title>
	</head>
	<body>			
		<h1>Examen<h1>
        <h2>Exercicio 1</h2>
		<h1>Dous dados</h1>
            <p>Actualice a páxina para mostrasr unha nova tírada.</p>
			<p> 	
                    <?php
                        $dado1 = rand(1, 6);
                        $dado2 = rand(1, 6);
                        // Utilizo el switch para que dependiendo do resultado da variable me mostre a imaxe igual al valor da variable.
                        // Dado 1:
                        switch ($dado1) {
                            case 1:
                                echo "<img src='img/1.svg' width='200px' height='200px'/>";
                                break;
                            case 2:
                                echo "<img src='img/2.svg' width='200px' height='200px'/>";
                                break;
                            case 3:
                                echo "<img src='img/3.svg' width='200px' height='200px'/>";
                                break;
                            case 4:
                                echo "<img src='img/4.svg' width='200px' height='200px'/>";
                                break;
                            case 5:
                                echo "<img src='img/5.svg' width='200px' height='200px'/>";
                                break;
                            case 6:
                                echo "<img src='img/6.svg' width='200px' height='200px'/>";
                                break;
                        }

                        // Dado 2:
                        switch ($dado2) {
                            case 1:
                                echo "<img src='img/1.svg' width='200px' height='200px'/>";
                                break;
                            case 2:
                                echo "<img src='img/2.svg' width='200px' height='200px'/>";
                                break;
                            case 3:
                                echo "<img src='img/3.svg' width='200px' height='200px'/>";
                                break;
                            case 4:
                                echo "<img src='img/4.svg' width='200px' height='200px'/>";
                                break;
                            case 5:
                                echo "<img src='img/5.svg' width='200px' height='200px'/>";
                                break;
                            case 6:
                                echo "<img src='img/6.svg' width='200px' height='200px'/>";
                                break;
                        }
                        echo "</br>";
                        echo "</br>";
  
                            if ($dado1 == $dado2) {
                                echo "Sacou unha parella de ". $dado1;
                            } elseif ($dado1 > $dado2) {
                                echo "Non sacou parella. O valor máis alto é: ". $dado1;
                            } elseif ($dado1 < $dado2) {
                                echo "Non sacou parella. O valor máis alto é: ". $dado2;
                            }
                       
                    ?>	
            </p>
	</body>
</html>