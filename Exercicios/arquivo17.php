
<html>
	<head>
		<title>Ejercicio</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-escale=1.0">
		<link rel="stylesheet" type="text/css" href="Plantilla_CSS_Ismael2.css" />
	</head>
	<body>
		<header>
			<h1 class="encabezado">Modulo IAW</h1>
		</header>
		<main>
			<div id="N1">
			<h1>Cuestión</h1>
				<p>Ejercicio 15</p>
			</div></br>
			<div id="N2">
			<h1>Resultado</h1>
                <p>
                    <?php
                        $num = 5;
						$cadea = "manzanas";

						if (is_numeric($num)) {
							echo "<p>A variable num e numérica.</p>\n;";
							$var1 = 3;
						} else {
							echo "<p>A variable num non é numérica</p>\n";
						}
						
						$tipo = gettype($num);
						echo "<p>Tipo de dato de num: " . $tipo . "</p>\n";

						if (is_numeric($cadea)) {
							echo "<p>A variable cadea e numérica.</p>\n";
							$var1 = 3;
						} else {
							echo "<p>A variable cadea non é numérica.</p>\n";
						}

						echo "<p>Tipo de dato de num: " . gettype($cadea) . "</p>\n";

                    ?>
                </p>
			</div>
		</main>
		<footer id="pie">
			<h1 class="pie">Ismael Pérez Rocha</h1> <h1 class="fecha"><?php $fechaActual = date('d/m/Y'); echo $fechaActual;?></h1>
		</footer>
	</body>
</html>