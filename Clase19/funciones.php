<?php

/*
*   FUNCIONES
*   Como ya sabemos, una variable es un espacio de memoria que almacena una información puntual. Las funciones son un espacio de memoria que almacena una serie
*   de pasos o instrucciones en el lenguaje que estamos programando
*    
*   ¿PARA QUÉ SE USAN LAS FUNCIONES?
*   -   Fraccionar programas complejos en pasos más pequeños y puntuales
*   -   Permiten escribir el código que se usa en varios lugares una sola vez (y luego ejecutarlas tantas veces como sea necesario)
*   -   Puede servir como atajo (o alias) de otras funciones ya existentes más complejas o de nombres más complicados
*
*   CREAR UNA FUNCIÓN
*   Para crear una función se necesita usar una palabra reservada function, seguida por el nombre que identificará el código
*   Luego del nombre un conjunto de paréntesis que más adelante tendrán una utilidad y pegado al paréntesis, un conjunto de llaves que agrupan todos los pasos que
*   queremos ejecutar.
*   Para ejecutar la función solo necesitamos usar su nombre con los paréntesis
*   function test(){
*       //Código a ejecutar formado por if, switch, for, do, while, echo y print  
*   }
*
*   FUNCIONES Y VARIABLES
*   En PHP todas las variables se asumen privadas para las funciones. Una función no puede salir a buscar una variable que exista por fuera. Una variable usada por fuera de la 
*   función no existe por fuera de la misma
*
*   ACCEDER A VARIABLES
*   Una función puede leer y escribir variables externas
*   Para eso, desde la función, necesitamos buscarlas como globales
*   Eso se hace anteponiendo la palabra reservada global al nombre de variable que queremos afectar
*/

function saludar() {
    echo "Hola usuario, bienvenido al sistema";
}

saludar();
echo "<hr />";



