<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// este ficher no funciona.  hay que reescribirlo

function cuenta_vocales($frase) {
    echo "entra en funcion <br>\n";
    
    for ($i=0;$i<strlen($frase);$i++){
        echo "entra en bucle funcion <br>\n";
        switch ($frase[$i]) {
            case "a": case "e": case "i": case "o": case "u":
                $acumulador++;
                break;
            default:
                break;
            
    }
    return $acumulador;
}

}

// function 

$frase=$_POST["frase"];
$acumulador=0;
cuenta_vocales($frase);
for ($i=1;$i<=$acumulador;$i++){
    echo "<BR>";
    echo $frase;
      
}


?>

