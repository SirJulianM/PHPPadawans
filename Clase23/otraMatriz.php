<?php

$fotos = array(
   /* 0 */array(
    /* 0 */'foto1.jpg',
    /* 1 */'Mi primera foto',
    /* 2 */'Foto de una persona en la calle'
   ),
   /* 1 */array(
    /* 0 */'foto2.jpg',
    /* 1 */'Otra foto de la galería',
    /* 2 */'Un perro paseando'
   ),
   /* 2 */array(
    /* 0 */'foto3.jpg',
    /* 1 */'Un gato',
    /* 2 */'Gato con cara de sorprendido'
   ),
   /* 3 */array(
    /* 0 */'foto4.jpg',
    /* 1 */'Tucán',
    /* 2 */'Ave con pico grande'
   ),
   /* 3 */array(
    /* 0 */'foto5.jpg',
    /* 1 */'Lago',
    /* 2 */'Paisaje de un lago tranquilo'
    )
);

var_dump($fotos);
echo "<hr />";
echo $fotos[0][1];
echo "<hr />";
echo $fotos[1][2];
for ($i=0; $i < count($fotos); $i++) { 
   echo "<hr />";
   for ($j=0; $j < count($fotos[$i]); $j++) { 
      echo $i.' '.$j.' '.$fotos[$i][$j]."<br />";
   }
}
echo "<hr />";
echo "<ul>";
for ($i=0; $i <count($fotos) ; $i++) { 
   echo "<li>";
   echo "<h2>".$fotos[$i][1]."</h2>";
   echo $fotos[$i][0];
   echo "<p>".$fotos[$i][2]."</p>";
   echo "</li>";
}
echo "</ul>";