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
				<p>Exercicio 3</p>
			</div></br>
			<div id="N2">
			<h1>Resultado</h1>
				<p>
                    <?php
						$producto = rand(1, 3);
						$calidad = rand(1, 3);

						switch($producto && $calidad){
							// Producto 1
							case (($producto == 1) && ($calidad == 1)):
								echo "<p>O producto: ". $producto .", con calidad: ". $calidad .". Ten un prezo de 5000€</p>" ;
								break;
							case (($producto == 1) && ($calidad == 2)):
								echo "<p>O producto: ". $producto .", con calidad: ". $calidad .". Ten un prezo de 4500€</p>" ;
								break;
							case (($producto == 1) && ($calidad == 3)):
								echo "<p>O producto: ". $producto .", con calidad: ". $calidad .". Ten un prezo de 4000€</p>" ;
								break;
							// Producto 2
							case (($producto == 2) && ($calidad == 1)):
								echo "<p>O producto: ". $producto .", con calidad: ". $calidad .". Ten un prezo de 4500€</p>" ;
								break;
							case (($producto == 2) && ($calidad == 2)):
								echo "<p>O producto: ". $producto .", con calidad: ". $calidad .". Ten un prezo de 4000€</p>" ;
								break;
							case (($producto == 2) && ($calidad == 3)):
								echo "<p>O producto: ". $producto .", con calidad: ". $calidad .". Ten un prezo de 3500€</p>" ;
								break;
							// Producto 3
							case (($producto == 3) && ($calidad == 1)):
								echo "<p>O producto: ". $producto .", con calidad: ". $calidad .". Ten un prezo de 4000€</p>" ;
								break;
							case (($producto == 3) && ($calidad == 2)):
								echo "<p>O producto: ". $producto .", con calidad: ". $calidad .". Ten un prezo de 3500€</p>" ;
								break;
							case (($producto == 3) && ($calidad == 3)):
								echo "<p>O producto: ". $producto .", con calidad: ". $calidad .". Ten un prezo de 3000€</p>" ;
								break;
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