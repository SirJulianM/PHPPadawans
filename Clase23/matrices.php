<?php   

/*
*   MATRICES
*   Una matriz es un arreglo(array) que tiene otros arreglos(arrays) como elementos. 
*   Se utilizan cuando -por cada elemento del array principal- necesitamos manipular más información. Por ejemplo, en los elementos de 
*   formulario podemos definir la etiqueta a insertar <input />, <select></select>, <textarea></textarea> de su name o de su valor por 
*   defecto, o si tiene un placeholder o si es obligatorio por el required
*
*   ACCESO A LOS ELEMENTOS
*   Como se dijo una matriz es un arreglo(array) que tiene otros arreglos(arrays) como elementos. Para acceder a un elemento del arreglo,
*   realizamos un echo de $array[posicion]. Como ese indice, ahora tiene otro arreglo como contenido, ahora debemos indicarle dos coordenadas
*   (del item del arreglo principal, que sub-nivel)
*
*   RECORRER MATRICES
*   Dado que una matriz es un arreglo dentro de otro arreglo, se debe iterar con un ciclo de repetición anidado
*   El for externo recorre la matriz, y por cada elemento encontrará un array (por lo cual no le podemos hacer echo o devolverá un error) y el
*   for de adentro recorrerá los elementos adentro del item que se está recorriendo actualemente.
*   La única restricción es que no se puede repetir los nombres de las variables que usamos como punteros del for 
*
*   RECORRER BIEN LAS MATRICES
*   Pero es probable que el for anidado no sea la mejor opción para recorrer una matriz, ya que no todos los elementos del sub-array se van a mostrar
*   de la misma manera en el HTML debido a que algún elemento sea un encabezado, otro un párrafo y otra una imagen. Entonces, el for solo sucede con 
*   el array externo y los elementos del array interno se muestra directamente con echo $matriz[$vuelta_for][0]; 
*
*/

$select = array();
$select['name'] = 'motivo';
$select['requeried'] = false;
$select['tabindex'] = 2;

var_dump($select);
echo "<hr />";

$elementos = array(
    /* 0 */array(
        /* 0 */ 'input',
        /* 1 */ 'text',
        /* 2 */'nombre',
        /* 3 */'Tu nombre completo',
        /* 4 */'Tu nombre'
    ),
    /* 1 */array(
        /* 0 */'input',
        /* 1 */'email',
        /* 2 */'correo',
        /* 3 */'usuario@email.com',
        /* 4 */'Tu correo'
    ),
    /* 2 */array(
        /* 0 */'select',
        /* 1 */'motivo',
    ),
    /* 3 */array(
        /* 0 */'input',
        /* 1 */'checkbox',
        /* 2 */'item',
        /* 3 */'recibir novedades',
    ),
);

var_dump($elementos);
echo "<hr />";
echo $elementos[0][2];
echo "<hr />";
for ($i=0; $i < count($elementos); $i++) { 
    echo $elementos[$i][0].': ';
    if ($elementos[$i][0] == 'input') {
        echo '<input type="'.$elementos[$i][1].'" name="'.$elementos[$i][2].' placeholder="'.$elementos[$i][3].'" />';
    } elseif ($elementos[$i][0] == 'select') {
        echo '<select>';
        echo '<option>'.$elementos[$i][1].'</option>';
        echo '</select>';
    }
    echo "<hr />";
}

