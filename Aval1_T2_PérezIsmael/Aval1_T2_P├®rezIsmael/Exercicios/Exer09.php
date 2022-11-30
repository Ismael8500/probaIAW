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
				<p>Exercicio 9</p>
			</div></br>
			<div id="N2">
			<h1>Resultado</h1>
				<p>
                    <?php
                       $num;
                       $num2;
                       $tabla;
                      
                      echo "<table>";
                      echo "<tr>";
                      for ($tabla = 1; $tabla <= 10; $tabla++) {
                         echo "<td>Tabla del". $tabla ."</td>";
                       }
                      echo "</tr>";
                      echo "<tr>";
                      for ($num2 = 1; $num2 <= 10; $num2++) {
                        for ($num = 01; $num <= 10; $num++) {
                            $operacion = $num * $num2;
                            echo "<td>". $num ." X ". $num2 ." = ". $operacion ."</td>";
                        }
                         echo "</tr>";
                      }
                      echo "</table>";
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