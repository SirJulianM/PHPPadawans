<?php
/*
*   ESPACIOS EN MEMORIA
*   Una variable es un espacio en la memoria que almacena y un dato tiene un nombre que lo referencia
*   Una función es un espacio en la memoria que también tiene un nombre referencial, pero almacena una secuencia de pasos
*   Un array, es un espacio en la memoria con un nombre que lo referencia, pero tiene la particularidad de subdividirse para
*   almacenar más de un valor. Esta subdivisión la hace por medio de un índice (o posición) de cada valor que almacenará el array.
*   El primer índice es el nivel cero
*
*   UTILIDAD DEL ARRAY
*   Los array permiten reducir la cantidad de variables que necesitamos en un programa
*   Desde la programación se puede iterar (con un ciclo de repetición) desde el primer elemento hasta el último
*   Sirve como fuente de datos que nos permita separar la información que queremos usar en la web de la manera en que serán mostrado
*
*   CÓMO CREAR UN ARRAY
*   Aunque PHP no tenga un tipo de dato fuerte, no podemos manipular una variable con array si no la declaramos como tal
*   Hay dos maneras de crear un array en PHP
*   1) Por medio de la función array(), en minúsculas->$cursos = array();
*   2) O -solo a partir de PHP7- usando la misma sintáxis de Javascript, dónde se asigna un conjunto de corchetes que abren y cierran -> $cursos = []; 
*
*   ITEMS DEL ARRAY
*   Cuando creamos un array, podemos definir que contenido va a tener inicialmente. Esto se hace tanto entre paréntesis de la función array() como entre
*   los corchetes del []. Cada elemento debe ir separado del siguiente por coma, respetando su tipo de dato.
*   Automáticamente irá asignando los índices 0, 1, 2, 3... (empezando siempre por el nivel cero)
*
*   VER ELEMENTOS DEL ARRAY
*   Para poder mostrar un determinado elemento del array, solo tenemos que hacer echo o print del array que nos interesa ver y (entre corchetes) indicar 
*   que indice buscamos.
*   -   Si no indicamos el índice, mostrará un error (mostrar el array como string);
*   -   Si pedimos un índice que no existe, mostrará otro error (índice indefinido);
*   Podemos ver todo el contenido del array usando la función var_dump($array) o por medio del print_r($array), que no muestra los tipos de dato, ni el largo;
*   Pero ninguna de estas funciones se usa para mostrar datos en la web, sino para depurar el código. 
*
*   AGREGAR ELEMENTOS A UN ARRAY
*   Existen tres maneras de agregar elementos al array
*   -   Indicando estrictamente la posición del array que se quiere escribir: $cursos[2]='backend'
*   -   Con la función array_push($que_array, $que_valor) que agregará el valor nuevo al final del array
*   -   Asignando el nuevo valor sin indicar el índice (también asumirá que debe ir al final) $array[] = 'nuevo valor'
*
*   RECORRER ELEMENTOS
*   Dado que los indices de los array son numéricos y que para mostrarlo, sólo cambia ese número en los corchetes.
*   Podemos recorrerlos con el ciclo for, indicando hasta dónde se debe iterar
*   La cantidad de elementos se puede saber con dos funciones distintas: sizeof($array) y count($array); 
*/

$nombre = 'Julián';

$cursos = array('frontend', 'backend', 'javascript'); //Esta manera existe en todas las versiones de PHP
$tecnologias = ['php', 'mysql', 'html', 'css']; //Esta manera de crear un array solo existe a partir de PHP en su versión 7 en adelante

$ficha = array($nombre, 36, true, 'YouLauss');

echo $ficha[0]."<hr />";
echo $cursos[2]."<hr />";
echo $tecnologias[3]."<hr />";
var_dump($ficha);
echo "<hr /><pre>";
print_r($tecnologias);
echo "</pre><hr /> $nombre";  //Muestra tipo de dato y largo por cada item del array. Sirve para cualquier tipo de dato




