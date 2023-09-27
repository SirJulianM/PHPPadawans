<?php 

/*
*   ESTRUCTURAS ITERATIVAS
*   Las estructuras iterativas (o ciclos de repetición), son las que permiten realizar la misma acción más de una vez.
*   Existen dos tipos de estructuras de repetición
*   1) Ciclos finitos: Que son los que podemos saber con solo mirar el código cuantas veces se va a reiterar
*   2) Ciclos abiertos: Que repiten el código con base a una premisa que no podemos saber de antemano
*   En todos los casos, estos ciclos ejecutarán el código con base a una condición; cuando la condición devuelva falso, el ciclo 
*   finalizará automáticamente

*   CICLO FOR
*   El ciclo de repetición for, es una estructura finita. Al escribir el código le indicamos a PHP la cantidad de veces que debe 
*   ejecutarse. Para eso le debemos indicar tres datos al crearlo:
*   a) Inicio del ciclo: Iniciando la variable de tipo number
*   b) Límite de las repeticiones: Una comparación (de cualquier tipo) que evalue el valor de esa variable
*   c) Desplazamiento de la variable: Cualquier operación aritmética que modifique la variable inicial (de forma que llegue al límite)
*   Con solo analizar estas condiciones, podemos saber cuántas veces repetirá
*
*   SINTAXIS DEL FOR
*   Como sucede con todas las estructuras, se inicia con la palabra reservada de la estructura (for)
*   A continuación, entre paréntesis y separados por punto y coma, los parámetros de configuración del ciclo 
*   (inicio; condición; desplazamiento)
*
*   TECNICISMOS DEL FOR
*   La variable se usa como indicador del ciclo, existe y se puede usar adentro del for, ya sea para mostarla como para evaluarla
*   En consecuencia, debemos tener cuidado de no sobreescribir la variable adentro del ciclo (y más aún no bloquear su finalización)
*   Si por error creamos un ciclo que nunca llega a su final, de todas maneras PHP cortará la ejecución del código luego de cierto 
*   tiempo (aunque queden acciones pendientes)
*   Ese timeout también se define desde el archivo php.ini

*/

for ($num=1; $num < 50; $num++) { 
    echo "Hola ". $num . "<br />";
}

echo "<hr />";
echo "El ciclo termina con el valor $num";



?>