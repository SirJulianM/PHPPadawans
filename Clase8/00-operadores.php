<?php

/*

* OPERADORES
* Los operadores son todos los símbolos que cumplen alguna función para el lenguaje y nos permiten manipular los datos.
* A esta altura, ya conocemos dos operadores
* - El operador de asignación (el igual): que guarda la información que está a la derecha del igual en la variable que está a la
* izquierda del mismo
* - El operador de concatenación (el punto): Este nos permite unir cadenas de texto con variables/constantes (y viceversa).
* El listado de operadores básicos se pueden agrupar en tres categorías

* OPERADORES ARITMÉTICOS
* Partiendo de dos (o más) valores de tipo numérico, nos devolverá una respuesta de tipo Number (Suma +, Resta -, Multiplicación *, 
* División /, Módulo %)

* OPERADORES DE DECREMENTO E INCREMENTO
* Las variables numéricas se pueden modificar con unos operadores especiales:
    * - Incremento (de uno en uno): variable++ -> variable = variable + 1;
    * - Decremento (de uno en uno): variable-- -> variable = variable - 1;
    * - Incremento (más de uno): variable+=5 -> variable = variable + 5;
    * - Decremento (más de uno): variable-=5 -> variable = variable - 5;
    * - Multiplicación: variable *=5 -> variable = variable * 5;
    * - División: variable /=5 -> variable = variable / 5;
* Todas sobreescriben automáticamente el valor de la variable

* OPERADORES DE COMPARACIÓN
* Partiendo de valores de cualquier tipo, nos devolverá un resultado de tipo Booleano
* Mayor que: >
* Menor que: <
* Mayor o igual que: >=
* Menor o igual que: <=
* Comparación: ==
* Distinto que: !=

* OPERADOR "NAVE ESPACIAL"
* Introducido en PHP7 (No existe en las versiones anteriores), este operador permite saber si el primer valor es menor, igual o mayor
* al segundo valor. Lo hace todo en la misma pregunta, fusionando los tres operadores necesarios, sin espacios entre los mismos: 
* $valor1 <=> $valor2
* Lo hace todo en la misma pregunta, fusionando los tres operadores necesarios, devuelve tres valores posibles:
* a) -1(uno negativo), si el primero es menor que el segundo
* b) 0(cero), si los dos valores evaluados son iguales
* c) 1(uno positivo) si el segundo es mayor

* ASIGNACIÓN VS COMPARACIÓN
* Todos los lenguajes que descienden de C diferencian el uso de un solo igual contra dos iguales: 
* - Dos iguales es comparación de los valores. Ver si los dos lados del igual tienen el mismo contenido y devuelve un valor booleano.
* - Un solo igual es asignar valores. No sirve para comparar, guardará el valor de la derecha en el contenedor de la izquierda
* Si nos confundimos y usamos un solo igual para comparar, nunca nos dará verdadero o falso, sino que nos dará el mismo valor que está
* después del igual

* TRIPLE IGUAL
* También podemos hacer comparaciones con tres iguales y nos devolverá una respuesta true o false
* A diferencia de los dos iguales, en este caso compara valores y además los tipos de datos 
* El doble igual solo compara los valores aunque los tipos difieran

* OPERADORES LÓGICOS
* Permite evaluar más de una comparación a la vez, también devuelve un resultado de tipo Booleano
* - Unión por Y (and): && (Para ser verdadero, todas las evaluaciones deben ser verdaderas)
* - Unión por Ó (or) || (Para ser verdadero, al menos una evaluación debe ser verdadera)

*/

?>
