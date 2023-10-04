<?php 

$nivel = 'usuario';
$nombre = 'jmadrid';

if ($nivel == 'administrador'):
    echo "Hola administrador";
elseif($nivel == 'redactor' || $nivel == 'editor'):
    echo "Usted puede editar las publicaciones";
else:
    if ($nombre == 'stamayo') {
        echo "The Dawnbreaker";
    } else {
        echo "Nivel $nivel desconocido";
    }
endif;

