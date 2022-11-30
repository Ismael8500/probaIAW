
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
                        $cadea = "puntos";
						echo "Tipo: " . gettype($cadea);
						if (settype($cadea, 'int')) {
							echo "Realizouse o cambio de tipo";
						} else {
							echo "Non se realizou o cambio de tipo";

						}
						echo "Valor despois do cambio: " . $cadea;
						unset($cadea);

                    ?>
                </p>
			</div>
		</main>
		<footer id="pie">
			<h1 class="pie">Ismael Pérez Rocha</h1> <h1 class="fecha"><?php $fechaActual = date('d/m/Y'); echo $fechaActual;?></h1>
		</footer>
	</body>
</html>