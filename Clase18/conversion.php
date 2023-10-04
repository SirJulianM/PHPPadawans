<?php

/*
*   CONVERSIÓN DE UNIDADES
*   Como se explicó antes, PHP permite asignar para cualquier ocasión. Si cometemos este error de lógica, tendremos dos errores a la vez
*   $nombre = 'nobody';
*   if($nombre == 'Julián'){
*       echo 'Dio verdadero';
*   }
*
*   ¿POR QUÉ PASÓ ESO?
*   Porque sucedieron dos cosas en secuencia
*   - Primero: PHP resolvió lo que pedimos en el igual
*   - Segundo: Al no encontrar una comparación, redujo el valor a booleano
*   Y esta conversión de un valor a su representación booleana siempre dice que:
*   Las cadenas de texto, con al menos un caracter se interpreta como true
*   Comilla - comilla se interpreta como falso

*/

$nombre = 'Juan';
if ($nombre = 'Julián') {   //Un igual solo asigna, no compara (Redujo la variable $nombre a su representación booleana)
    echo 'Bienvenido profesor';
}

echo "<hr />";
var_dump($nombre);
echo "<hr />";

if ($nombre == 'Julián') {  
    echo 'Bienvenido profesor';
}