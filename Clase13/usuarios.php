<?php 

$nivel = 'moderador';
var_dump($nivel);
echo "<br />";
var_dump($nombre);

echo "<h1>Con If</h1>";

if ($nivel === 'administrador') {
    echo "El $nivel puede configurar la plataforma";
} elseif ($nombre === 'dgarcia') {
    echo "Este usuario es administrador temporal";
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
        if ($nombre == 'jmadrid') {
            echo 'Administrador temporal';
        } else {
            echo "No se reconoce el nivel de $nivel";
        }
        
        break;
}

?>