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
				<p>Exercicio 4</p>
			</div></br>
			<div id="N2">
			<h1>Resultado</h1>
				<p>
                    <?php
						$dado1 = rand(1, 6);
						$dado2 = rand(1, 6);
						$dado3 = rand(1, 6);

						switch($dado1 && $dado2 && $dado3){
							// En caso de 3 veces 6
							case (($dado1 == 6) && ($dado2 == 6) && ($dado3 == 6)):
								echo "<p>A saído:</br> ·Dado1: ". $dado1 ."</br> ·Dado2: ". $dado2 ."</br> ·Dado3: ". $dado3 .".</br> Eres ouro.</p>";
								break;
							
							// En caso de 2 veces 6
							case (($dado1 == 6) && ($dado2 == 6)):
								echo "<p>A saído:</br> ·Dado1: ". $dado1 ."</br> ·Dado2: ". $dado2 ."</br> ·Dado3: ". $dado3 .".</br> Eres prata.</p>";
								break;
							case (($dado1 == 6) && ($dado3 == 6)):
								echo "<p>A saído:</br> ·Dado1: ". $dado1 ."</br> ·Dado2: ". $dado2 ."</br> ·Dado3: ". $dado3 .".</br> Eres prata.</p>";
								break;
							case (($dado2 == 6) && ($dado3 == 6)):
								echo "<p>A saído:</br> ·Dado1: ". $dado1 ."</br> ·Dado2: ". $dado2 ."</br> ·Dado3: ". $dado3 .".</br> Eres prata.</p>";
								break;

							// En caso de 1 vez 6
							case ($dado1 == 6):
								echo "<p>A saído:</br> ·Dado1: ". $dado1 ."</br> ·Dado2: ". $dado2 ."</br> ·Dado3: ". $dado3 .".</br> Eres bronce.</p>";
								break;
							case ($dado2 == 6):
								echo "<p>A saído:</br> ·Dado1: ". $dado1 ."</br> ·Dado2: ". $dado2 ."</br> ·Dado3: ". $dado3 .".</br> Eres bronce.</p>";
								break;
							case ($dado3 == 6):
								echo "<p>A saído:</br> ·Dado1: ". $dado1 ."</br> ·Dado2: ". $dado2 ."</br> ·Dado3: ". $dado3 .".</br> Eres bronce.</p>";
								break;

							// En caso de 0 veces 6
							case (($dado1 < 6) && ($dado2 < 6) && ($dado3 < 6)):
								echo "<p>A saído:</br> ·Dado1: ". $dado1 ."</br> ·Dado2: ". $dado2 ."</br> ·Dado3: ". $dado3 .".</br> Eres un perdedor.</p>";
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