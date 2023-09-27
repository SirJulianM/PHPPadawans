<?php 

/*

* OPERADOR TERNARIO

* El operador ternario es una síntesis del IF con su respectivo bloque ELSE

* Como su nombre lo indica, está formado por tres partes:
*   1) La condición que queremos analizar
*   2) El valor a generar si la condición es verdadera
*   3) El valor a generar si la condición es falsa
* En este caso, desde lo sintáctico, no puede faltar ninguna de las tres partes
* evaluacion_a_analizar ? valor_verdadero : valor_falso;
* $nivel = (usuario == 'jmadrid') ? 'admin' : 'usuario desconocido';

*/

$logueado = true;

echo $logueado == true ?    //Condición
'usuario logueado' :        //Valor verdadero
'usuario sin autentificar'; //Valor falso


/* 

* RESTRICCIONES
* El operador ternario en PHP no acepta que alguna de sus partes ejecute el comando echo.
* En realidad, lo que hace es evaluar una condición y devolver alguno de los valores posibles al comando que se encuentra
* pro delante de la evaluación

*/


?>