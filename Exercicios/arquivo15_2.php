
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
						if(!empty($num)) {
							echo "<p>A variable \$num contén $num.</p>\n";
							$var1 = 3;
						} else {
							echo "<p>A variable \$num non está definida.</p>\n";

						}
							echo "<p>Variable var1: </p>" . $var1;
                    ?>
                </p>
			</div>
		</main>
		<footer id="pie">
			<h1 class="pie">Ismael Pérez Rocha</h1> <h1 class="fecha"><?php $fechaActual = date('d/m/Y'); echo $fechaActual;?></h1>
		</footer>
	</body>
</html>