<?php 
/*
*   ARREGLOS ASOCIATIVOS
*   Un array asociativo es el que en lugar de indices basados en números, los tiene en cadena de texto, de esta manera los índices estarán entre
*   comillas
*
*   INSTANCIAR UN ARREGLO ASOCIATIVO
*   En PHP tenemos dos maneras de crear un array con índices asociativos
*   La primera opción es crear el array vacío y luego ir creando indice por indice (de la misma manera que asignabamos los númericos)
*   La segunda opción es definir los índices y sus valores en la misma creación del arreglo (entre los parentesis o los corchetes)
*   Para indicar cual es el índice y cual es el valor, se los separa con el operador => (igual-mayor sin espacios)
*
*   UTILIDAD DEL ARREGLO ASOCIATIVO 
*   La ventaja del arreglo asociativo está en la posibilidad de aprovechar el índice y el valor para tener dos datos por elemento.
*   Y la ventaja es que la mayoría de los componentes en web se puede reducir a dos datos: 
*   En las imágenes: la ruta y el texto alternativo; en los input de tipo radio/checkbox: el valor y su label (lo mismo para los option de un select)
*   En los vínculos: la url y el texto interno
*
*   RECORRER ASOCIATIVOS
*   Pero lógicamente no podemos hacer un for que vaya desde facebook hasta instagram. Por lo cual, en PHP existe una estructura pensada estrictamente
*   para recorrer arreglos (sean asociativos o numéricos). Es la estructura foreach, que recorre todos los elementos de un arreglo automáticamente
*   
*   ESTRUCTURA FOREACH
*   El foreach requiere dos o tres datos entre sus paréntesis
*   Primero, el array que queremos iterar
*   Segundo, optativo una variable que capturará los índices de cada vuelta del ciclo de repetición
*   Tercero, una variable que capturará los valores de cada vuelta del foreach
*   Sintácticamente, esa estructura se escribe de esta manera: foreach ($array as $indice => $valor){}
*   El operador => y el índice son optativos, si no lo necesitamos foreach ($array as $valor){}
*
*/

$elementos = array(
    /* 0 */array(
        'etiqueta' => 'input',
        'type' => 'text',
        'name' => 'nombre',
        'placeholder' => 'Tu nombre completo',
        'texto' => 'Tu nombre'
    ),
    /* 1 */array(
        'etiqueta' => 'input',
        'type' => 'email',
        'name' => 'correo',
        'placeholder' => 'usuario@email.com',
        'texto' => 'Tu correo'
    ),
    /* 2 */array(
        'etiqueta' => 'select',
        'name' => 'motivo',
        'texto' => 'Motivo del mensaje',
        'opciones' => array('contacto', 'sugerencia', 'reclamo')
    ),
    /* 3 */array(
        'etiqueta' => 'input',
        'type' => 'checkbox',
        'name' => 'item',
        'texto' => 'recibir novedades',
        'placeholder' => 'item'
    ),
);

var_dump($elementos);
echo "<hr />";
for ($i=0; $i < count($elementos); $i++) { 
    echo $elementos[$i]['texto'].': ';
    if ($elementos[$i]['etiqueta'] == 'input') {
        echo '<input type="'.$elementos[$i]['type'].'" name="'.$elementos[$i]['name'].' placeholder="'.$elementos[$i]['placeholder'].'" />';
    } elseif ($elementos[$i]['etiqueta'] == 'select') {
        echo '<select>';
        for ($k=0; $k < count($elementos[$i]['opciones']); $k++) { 
            echo '<option>'.$elementos[$i]['opciones'][$k].'</option>';
        }
        echo '</select>';
    }
    echo "<hr />";
}