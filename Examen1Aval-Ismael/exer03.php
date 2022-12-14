<html>
	<head>
		<title>Exer03</title>
	</head>
	<body>			
		<h1>Examen<h1>
        <h2>Exercicio 3</h2>
		<h1>Datos de ventas</h1>
            <p> 	
                <?php
					$array = ['bmw' => 25, 'seat' => 34, 'audi' => 40, 'mercedes' => 14, 'citroen' => 64];
					$array2 = ['bmw' => 15, 'seat' => 21, 'audi' => 31, 'mercedes' => 32, 'citroen' => 54];
		
					$suma = $array['bmw'] + $array['seat'] + $array['audi'] + $array['mercedes'] + $array['citroen'];
					$suma2 = $array2['bmw'] + $array2['seat'] + $array2['audi'] + $array2['mercedes'] + $array2['citroen'];

					echo "<table> 
							<tr>
								<td></td>
								<td>bmw</td>
								<td>seat</td>
								<td>audi</td>
								<td>mercedes</td>
								<td>citroen</td>
							</tr>
							<tr>
								<td>Concesionario1</td>
								<td>". $array['bmw'] ."</td>
								<td>". $array['seat'] ."</td>
								<td>". $array['audi'] ."</td>
								<td>". $array['mercedes'] ."</td>
								<td>". $array['citroen'] ."</td>
							</tr>
							<tr>
								<td></td>
								<td>bmw</td>
								<td>seat</td>
								<td>audi</td>
								<td>mercedes</td>
								<td>citroen</td>
							</tr>
							<tr>
								<td>Concesionario2</td>
								<td>". $array2['bmw'] ."</td>
								<td>". $array2['seat'] ."</td>
								<td>". $array2['audi'] ."</td>
								<td>". $array2['mercedes'] ."</td>
								<td>". $array2['citroen'] ."</td>
							</tr>
						  </table>";
					echo "<h1>Datos estatísticos:</h1>";
					echo "<ul>
							<li>Ventas anuais concesionario1: ". $suma ."</li>
							<li>Ventas anuais concesionario2: ". $suma ."</li>
							<li>O récord de ventas está en ". $array['citroen'] ." na marca citroen no Concesionario1.</li>
						  </ul>";
                ?>	
            </p>
	</body>
</html>