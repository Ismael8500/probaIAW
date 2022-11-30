<html>
    <head>
		<title>Ejercicio</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-escale=1.0">
		<link rel="stylesheet" type="text/css" href="../Plantilla_CSS_Ismael2.css" />
	</head>
	<body>
        <header>
			<h1 class="encabezado">Modulo IAW</h1>
		</header>
		<main>
			<div id="N1">
			<h1>Cuestión</h1>
				<p>Exercicio 8</p>
			</div></br>
			<div id="N2">
			<h1>Resultado</h1>
				<p>
                    <?php
                       $num = 6;
                       $i = 1;
                       $total = 0;
                       
                       while ($i < $num) {
                         if ($num % $i == 0) {
                           $total = $total + $i;
                         }
                         $i++;
                       }
                       if ($total == $num) {
                         echo "<p>O número ". $num ." é un número perfecto</p>";
                       } else {
                         echo "<p>O número ". $num ." non é un número perfecto</p>";
                       }
                        
                    ?>
                </p>
			</div>
		</main>
		<footer id="pie">
			<h1 class="pie">Ismael Pérez Rocha</h1> 
            <h1 class="fecha">
                <?php 
                    echo date("d-m-Y");
                ?>
            </h1>
		</footer>
    </body>
</html>