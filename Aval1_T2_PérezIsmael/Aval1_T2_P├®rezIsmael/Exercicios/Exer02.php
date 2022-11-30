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
				<p>Exercicio 2</p>
			</div></br>
			<div id="N2">
			<h1>Resultado</h1>
				<p>
                    <?php
            
                        $dia = 20;
                        $mes = 12;

                        if ((($dia >= 21) && ($mes == 12)) || (($dia <= 20) && ($mes <= 3))) {
                            echo "Estamos en inverno";
                        } elseif ((($dia >= 21) && ($mes == 3)) || (($dia <= 21) && ($mes <= 6))) {
                            echo "Estamos en primavera";
                        } elseif ((($dia >= 22) && ($mes == 6)) || (($dia <= 22) && ($mes <= 3))) {
                            echo "Estamos en verán";
                        } elseif ((($dia >= 23) && ($mes == 9)) || (($dia <= 20) && ($mes <= 12))) {
                            echo "Estamos en outono";
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