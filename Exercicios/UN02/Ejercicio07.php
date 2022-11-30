<?php
$num = rand(1,10);
$imp = 2 * $num;
$par = 3 * $num;

// PHP trabaja en servidor. Asumimos que el usuario introduce el número
// a través de un formulario.
// Podemos simular el código en un editor PHP online con $_POST["numero"] = 1001; por ejemplo.

if(($num % 2) == 0){
    echo "<p>". $par ." es par</p>";
}else{
    echo "<p>". $imp ." es impar</p>";
}
?>