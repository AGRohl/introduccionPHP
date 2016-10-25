<?php

/* 
 * Mostrar en pantalla una tabla de 10 por 10 con los números del 1 al 100.
 */

/*function rellena(){
    for ($i = 1;$i==100; $i++) {
        echo "$i ";
        if ($i%10==0){
            echo "<br/>";
        }
    }
}*/

echo "Tabla de 100 números, de 10 en 10";
echo "<br/><br/>";
for ($i = 1; $i <= 100; $i++) {
        echo "$i ";
        if ($i % 10 == 0){
            echo "<br/>";
        }
}
