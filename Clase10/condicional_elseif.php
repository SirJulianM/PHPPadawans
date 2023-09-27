<?php 

/* 
* MÁS DE DOS OPCIONES
* Cuando tenemos más de dos opciones para contemplar (donde IF y ELSE no son suficientes), podemos extender el listado
* de condiciones a evaluar.
* Ahi entra en juego la estructura else if, que es la conjunción de ELSE y otro IF
* if(condición1){ 
*       // Condición 1 es verdadera 
*    }else{ 
*        if(condición2){
*           //Condición 2 es verdadera
*        } else {
*            if(condiciónN){
*               //Condición N es verdadera
*            }else{
*               //Ninguna de las condiciones se cumple    
*            }
*        }
*    }
* TECNICISMO DEL ELSE IF
* La estructura trabaja por prueba y descarte, eso significa que la primera condición que devuelva verdadero, anulará el resto
* De esta manera, el orden de especificación de los bloques else if son importantes y afectan el buen funcionamiento del código
*/

$n1 = 10; 
$n2 = 100; 
$rta = $n1 <=> $n2;

var_dump($rta);

if ($rta == 0) {
    echo "$n1 y $n2 son iguales";
} else {
    if ($rta == -1) {
        echo "$n1 es menor que $n2";
    } else {
       if ($rta == 1) {
        echo "$n2 es menor que $n1";
       } else {
        echo "No se cumplió ninguna de las condiciones anteriores";
       }
       
    }
    
}


?>