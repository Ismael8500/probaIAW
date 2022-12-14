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
                        $conces1 = ['bmw' => 7, "Audi" => 25, "Seal" => 3, "Hundai" => 4, "Toyota" => 32];
                        $conces2 = ["bmw" => 20, "Audi" => 27, "Seal" => 45, "Hundai" => 37, "Toyota" => 81];
                        $conces3 = ["bmw" => 13, "Audi" => 21, "Seal" => 56, "Hundai" => 40, "Toyota" => 21];
                        $conces4 = ["bmw" => 8, "Audi" => 24, "Seal" => 71, "Hundai" => 82, "Toyota" => 41];
                        $conces5 = ["bmw" => 7, "Audi" => 51, "Seal" => 60, "Hundai" => 23, "Toyota" => 52];

                        foreach ($conces1 as $marca => $valor) {
                            echo $valor['bmv'];
                        }

                    ?>
                </p>
			</div>
		</main>
		<footer id="pie">
			<h1 class="pie">Ismael Pérez Rocha</h1> <h1 class="fecha"><?php $fechaActual = date('d/m/Y'); echo $fechaActual;?></h1>
		</footer>
	</body>
</html>