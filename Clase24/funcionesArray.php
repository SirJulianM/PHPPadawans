<?php 

/*
*   FUNCIONES DEL ARREGLO
*   Los arreglos tienen varias funciones para manipular sus elementos. 
*   Por ejemplo, la función array_push() que nos permite agregar uno o varios elementos al final del arreglo
*   Si queremos agregar al principio del array, podemos usar la función array_unshift()
*   O podemos eliminar el último elemento por medio de array_pop()
*   Logicamente podemos eliminar un elemento al principio del arreglo con array_shift()
*   Y existe una función llamada array_splice() que permite agregar o quitar elementos en cualquier lugar del array
*  
*   VERIFICAR EL ARREGLO
*   Podemos verificar si el array tiene o no un determinado elemento. En este caso, será una función distinta según
*   se trate de un valor o de un índice. La función in_array() recibe un array y un valor, devolverá verdadero si el
*   valor existe dentro del array
*   La función isset(), verifica si existe un determinado indice dentro del array, requiere tanto del array, como el 
*   indice que estamos verificando -> isset($a[0])
*   
*   ORDENAR ARREGLOS
*   La función sort() permite ordenar un array por sus valores (de menor a mayor)
*   La función rsort() hace el ordenamiento inverso (de mayor a menor)
*   La función ksort, ordena el arreglo por sus índices en orden ascendente
*   La función krsort(), hace el ordenamiento del array según los índices en orden inverso
*   Estas funciones afectan directamente al array pasado entre paréntesis
*
*   DE ARRAY A STRING
*   Podemos unir todos los elementos de un array en una cadena de texto por medio de la función implode() que recibe
*   dos datos
*   -   Una cadena de texto que va a insertarse entre cada elemento del array
*   -   El array que queremos afectar
*   El camino inverso es el explode(), que separa una cadena de texto en un array. También recibe dos datos
*   -   El caracter, palabra o fragmento que será usado como delimitador
*   -   La cadena de texto que queremos convertir en array
*
*   OBTENER UN ELEMENTO AL AZAR
*   PHP tiene la función rand() para sacar una voz al azar, que recibe dos datos entre paréntesis
*   -   El valor más bajo a obtener (el índice cero del array)
*   -   El valor más alto posible (el count() del arreglo menos uno)
*   Ese valor obtenido se usa como índice del array -> $array[$random]
*   También existe la función array_rand() que recibe entre paréntesis un array y devuelve un índice al azar

*/

$colores = ['rojo','amarillo', 'azul', 'verde'];
$colours = [ 'red' => 'rojo', 'yellow' => 'amarillo', 'blue' => 'azul', 'green' => 'verde'];

echo "<h2>array_push()</h2><br />";
var_dump($colores);
echo "<hr />";

array_push($colores,'negro');

var_dump($colores);
echo "<hr />";

array_push($colores, 'blanco', 'violeta');

var_dump($colores);
echo "<hr />";

array_unshift($colores, 'marrón', 'gris', 'anaranjado');

echo "<h2>array_unshift() </h2><br />";
var_dump($colores);
echo "<hr />";

$eliminado_end = array_pop($colores);

echo "<h2>array_pop() </h2><br />";
var_dump($colores);
echo "<br />";
var_dump($eliminado_end);
echo "<hr />";

$eliminado_beg = array_shift($colores);

echo "<h2>array_shift() </h2><br />";
var_dump($colores);
echo "<br />";
var_dump($eliminado_beg);
echo "<hr />";

$eliminado_spl= array_splice($colores, 3, 2, 'cyan');

echo "<h2>array_splice() </h2><br />";
var_dump($colores);
echo "<br />";
var_dump($eliminado_spl);

echo "<hr />";
$que_color = 'azul';
$que_indice = 'green';
$existe = in_array( $que_color, $colores);

echo "<h2>in_array() </h2><br />";
var_dump($existe);
echo "<br />";

if($existe == true){
    echo "El color $que_color existe en el arreglo de colores";
}else{
    echo "El color $que_color no existe en el arreglo de colores";
}

echo "<hr />";

echo "<h2>isset() </h2><br />";
var_dump(isset($colours[$que_indice]));
echo "<br />";
if(isset($colours[$que_indice])){
    echo "el $que_indice existe en el arreglo y tiene el valor: ".$colours[$que_indice];
} else {
    echo "el $que_indice no existe en el arreglo";
}

echo "<hr />";

echo"<ul>";
foreach ($colores as $color) {
    echo "<li>$color</li>";
}
echo "</ul>";


