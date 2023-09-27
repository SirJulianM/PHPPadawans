<?php

/*

* SELECTORES
* Los selectores son estructuras para analizar que contenido tiene una variable y con base a eso tomar alguna acción.
* Para eso, tenemos la estructura switch que recibe solo una variable
* Con base al valor de la misma. permite definir los distintos casos a aceptar
*
* $nombre = 'julian';
* switch ($nombre){
*   case 'monica' //Acciones para Mónica
*   case 'julian' //Acciones para Julián
*}
*
* Al igual que sucede con el ELSE IF, el primer case que retorne verdadero anula el resto de las evaluaciones
*
* DEFINIR LOS ALCANCES DEL CASE
* Cada uno de los casos debe indicar desde donde hasta donde se extiende
* Sino desde el primer case que devuelva verdadero (en adelante) ejecutará todas las acciones en sequencia
* Para indicar hasta donde llega cada case, se debe usar la instrucción break;
*
* $nombre = 'julian';
* switch ($nombre){
*   case 'monica' //Acciones para Mónica
*   break;
*   case 'julian' //Acciones para Julián
*   break;
*}
*
* CUANDO NADA SE CUMPLE
* Como sucede con la estructura if, se puede indicar un bloque de código que se ejecutará si ninguna de las opciones devuelve 
* verdadero
* Se hace con un bloque de código default que será un else genérico
* $nombre = 'Freddie';
* switch ($nombre){
*   case 'monica' //Acciones para Mónica
*   break;
*   case 'julian' //Acciones para Julián
*   break;
*   default: //Acciones
*   break;
*}
*/

$nivel = 'moderador';

switch ($nivel) {
    case 'administrador':
        echo "Hola $nivel, haga click <a href='#'>aqui</a> para configurar toda la plataforma";
        echo "<hr>";
        break;

    case 'editor':
    case 'redactor':
        echo "El $nivel solo puede publicar contenidos <a href='#'>Haga click aqui para publicar una entrada</a>";
        echo "<hr>";
        break;

    case 'usuario':
        echo "El $nivel solo puede comentar y dar me gusta";
        echo "<hr>";
        break;
    
    default:
        echo "no se reconoce el nivel de $nivel";
        echo "<hr>";
        break;
}

echo "Fin del script";

?>