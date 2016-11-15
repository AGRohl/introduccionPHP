<?php

/* 
 * Escribir un programa que escriba los primeros 100 número pares en diez filas
 * y en cada fila diez números.  Los elementos de la diagonal han de estar 
 * en negrita
 */

$diagonal=0;

echo "Tabla de 100 primeros números pares, de 10 en 10";
echo "<br/><br/>";
for ($i = 0; $i <= 200; $i+=2) {
        if ($i==$diagonal){
            echo "<b>$i</b>";
        }else{
            echo "$i";
        }
        $diagonal+=11;
        if ($i % 10 == 0){
            echo "<br/>";
        }
}
