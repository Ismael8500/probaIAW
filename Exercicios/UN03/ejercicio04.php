<?php 
function maiorPoboacion($array)
{
    $maior = 0;
    $cidade = "";
    if (is_array($array) && !empty($array)) {
        foreach($array as $clave => $valor) {
            if ($valor > $maior){
                $maior = $valor;
                $cidade = $clave; 
            }
        }
    }

    return $cidade;
}

$cidade = ["Coruña" => 150000, "Lugo" => 98000, "Ourense" => 100000, "Pontevedra" => 100000];
maiorPoboacion (4);

echo "A cidade con máis habitantes é: " . maiorPoboacion($cidade);

?>