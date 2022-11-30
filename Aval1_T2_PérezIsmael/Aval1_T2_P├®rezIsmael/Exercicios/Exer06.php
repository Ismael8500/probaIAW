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
				<p>Exercicio 6</p>
			</div></br>
			<div id="N2">
			<h1>Resultado</h1>
				<p>
                    <?php
                        $num = 123;
                        $num2 = 222;
                        $amigo = 1;
                        $suma = 0;
                        
                        while ($amigo < $num) {
                             if ($num % $amigo == 0) {
                                $suma = $suma + $amigo;
                            }
                            $amigo++;
                        }
                        if ($suma == $num2) {
                            echo "<p>Os números ". $num ." e ". $num2 ." són amigos</p>";
                        } else {
                            echo "<p>Os números ". $num ." e ". $num2 ." no son amigos.</p>";
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