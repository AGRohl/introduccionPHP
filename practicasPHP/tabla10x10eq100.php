<?php

/* 
 * Mostrar en pantalla una tabla de 10 por 10 con los números del 1 al 100.
 */

function rellena(){
    echo "<tr>";
    for ($i = 1;$i; $i++) {
        echo "<td>$i</td>";
        if ($i%10==0){
            echo "</tr>";
            echo "<tr>";
        }
                
    
    }
    echo "</tr>";
}

echo "<table>".rellena()."</table>";