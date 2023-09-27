<?php 

/*
* DIFERENCIAS ENTRE IF Y SWITCH
* En primera instancia las dos estructuras permiten evaluar una determinada condición y con base a eso realizar alguna acción dentro
* del programa 
* Las tres principales diferencias son
* 1) La estructura switch no permite cambiar la variable sobre la que contemplamos distintos casos
* 2) Tampoco nos permite evaluar rangos como opcion
* 3) Las comparaciones las hace bajo el operador doble igual (solo comparando si los dos valores son los mismos)
*/

$nivel = 'usuario';
var_dump($nivel);

echo "<h1>Con If</h1>";

if ($nivel === 'administrador') {
    echo "El $nivel puede configurar la plataforma";
} else if ($nivel === 'redactor' || $nivel === 'editor') {
    echo "El $nivel solo puede publicar contenido";
} else if ($nivel === 'usuario') {
    echo "El $nivel solo puede comentar y dar me gusta";
} else {
    echo "No se reconoce el nivel de $nivel";
}


echo "<h1>Con Switch</h1>";

switch ($nivel) {
    case 'administrador':
        echo "El $nivel puede configurar la plataforma";
        break;

    case 'redactor':
    case 'editor':
        echo "El $nivel solo puede publicar contenido";
        break;

    case 'usuario':
        echo "El $nivel solo puede comentar y dar me gusta";
        break;
    
    default:
        echo "No se reconoce el nivel de $nivel";
        break;
}

?>