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
				<p>Exercicio 5</p>
			</div></br>
			<div id="N2">
			<h1>Resultado</h1>
				<p>
                    <?php
						$dia = 2;
						$mes = 3;
						$ano = 2022;

						if ( $mes >= 1 && $mes <= 12 ) {
							switch ( $mes ) {
								//Meses con 31 días
								case  1 :
								case  3 :
								case  5 :
								case  7 :
								case  8 :
								case 10 :
								case 12 : if ( $dia >= 1 && $dia <= 31 ) {
											echo "<p>Fecha correcta</p>";
										  } else {
											echo "<p>Fecha incorrecta</p>";
										  }	  
										  break;
								//Meses con 30 días
								case  4 :
								case  6 :
								case  9 :
								case 11 : if ( $dia >= 1 && $dia <= 30 ) {
											echo "<p>Fecha correcta</p>";
										  } else {
											echo "<p>Fecha incorrecta</p>";
										  }	  
										  break;
								//Meses con 29 días e sendo ano bisestos
								case  2 : if( $ano % 4 == 0)
											  if ( $dia >= 1 && $dia <= 29 ) {
												echo "<p>Fecha correcta</p>";
										      } else {
												echo "<p>Fecha incorrecta</p>";
										      }	  
										      break;
							}
						} else {
							echo "<p>Fecha incorrecta</p>";
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