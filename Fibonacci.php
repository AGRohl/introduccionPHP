<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/*
 * Clase que saca secuencia fibonacci, determina el num de una posición,
 * y averigua si un número pertenece a la secuencia.
 */

class Fibonacci{
    var $secuencia=[];
    
    function __construct($num) {
        $fibo = [];
        if ($num > 0) {
            $fibo[] = 0;
            $a1 = 0;
        }
        if ($num > 1) {
            $fibo[] = 1;
            $a2 = 1;
        }
        for ($i = 3; $i <= $num; $i++) {
            $nuevo = $a1 + $a2;
            $fibo[] = $nuevo;
            $a1 = $a2;
            $a2 = $nuevo;
        };
    }
    
    function getLimite(){
        return count($this->secuencia);
    }
    
    function getSecuencia(){
        return $this->secuencia;
    }
    
    function inSecuencia($num){
        $esta = FALSE;
        $i=0;
        while (! $esta AND $i<count($this->secuencia) AND $this->secuencia[$i]<=$num){
            if ($num == $this->secuencia[$i]){
                $esta = TRUE;
            }
            $i++;
        }
        return $esta;
    }
    
    function getElemento($num){
        return $this->secuencia[$num-1];
    }
}
