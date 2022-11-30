<?php

    $caracter = "Á";
   
    if (($caracter == 'a') || ($caracter == 'e') || ($caracter == 'i') || ($caracter == 'o') || ($caracter == 'u') 
    || ($caracter == 'á') || ($caracter == 'é') || ($caracter == 'í') || ($caracter == 'ó') || ($caracter == 'ú') 
    || ($caracter == 'A') || ($caracter == 'E') || ($caracter == 'I') || ($caracter == 'O') || ($caracter == 'U') 
    || ($caracter == 'Á') || ($caracter == 'É') || ($caracter == 'Í') || ($caracter == 'Ó') || ($caracter == 'Ú')) {
        echo "<p>Es una vogal</p>\n";
    } else {
        echo "<p>O carácter non é vogal</p>\n";
    }
    
?>