<?php
$notas["alum1"] = ["eie" => 6, "asxbd" => 6, "seg" => 10];
$notas["alum2"] = ["iaw" => 8, "asxbd" => 6, "seg" => 10, "aso" => 7];

foreach ($notas as $alumno => $notasA) {
    echo "<p>O alumno ". $alumno ." tes as seguintes notas: </p>";
    echo "<ul>";
    foreach ($notasA as $modulo => $nota) {
        echo "<li>$modulo = $nota</li>";

    }
    echo "</ul>";
    echo "</br>";
}



?>