<?php

/*
*   ARRAY COMO FUENTE DE DATOS
*   Una fuente de datos, es cualquier recurso que PHP pueda consultar para obtener información dinámica. El más obvio es el de
*   base de datos, pero el array puede cubrir ese rol
*   Podemos tener un array con un listado de categorías posible para todos los posteos y por cada item generar un vínculo en la 
*   botonera. El arreglo tiene una fuente dinámica.
*
*   SEPARAR ESTRUCTURAS DE DATOS
*   La primera ventaja de usar un array como fuente de datos, es la posibilidad de recorrerlo mil veces y en cada una generar
*   un HTML diferente. Además, podemos agregar o quitar elementos que, no afecta al hecho de que se mostrarán las etiquetas
*   tantas veces como items tenga.
*   Sin embargo, ¿su última limitación? Agregar o quitar elementos hay que editar el archivo PHP
*/

$categorias = ['programación', 'diseño', 'cursos', 'usabilidad', 'servidores'];

for ($i=0; $i < count($categorias); $i++) { 
    echo "<li><a href='#'>$categorias[$i]</a></li>";
}
echo "<br />";
for ($i=0; $i <count($categorias); $i++) { 
    echo "<label><input type='checkbox'>$categorias[$i]</label>";
}