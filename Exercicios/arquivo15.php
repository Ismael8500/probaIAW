
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
                        const CONSB = false;
						const CONSF = 4.5;

						define ("CONSE", 70);
						define ("CONSC", "Esta é a constante de cadea");

						echo "A constante booleana ten valor: ".CONSB.'</br>';
						echo "A constante tipo ten valor: ".CONSF.'</br>';
						echo "A constante tipo ten valor: ".CONSE.'</br>';
						echo "A constante tipo ten valor: ".CONSE.'</br>';
							
                    ?>
                </p>
			</div>
		</main>
		<footer id="pie">
			<h1 class="pie">Ismael Pérez Rocha</h1> <h1 class="fecha"><?php $fechaActual = date('d/m/Y'); echo $fechaActual;?></h1>
		</footer>
	</body>
</html>