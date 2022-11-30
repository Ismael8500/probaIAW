<?php
$num = rand(1,10);

if (isset($num)) {
    if (is_integer($num)) {
        if(($num % 2) == 0){
            echo "<p>". $num ." es par</p>";
        }else{
            echo "<p>". $num ." es impar</p>";
        }
    } else {
        echo "A variable está definida pero non é un número enteiro";
    }
} else {
    echo "A variable no esta definidad";
}
?>