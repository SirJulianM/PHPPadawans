<?php 

$options = array(
    'ar' => 'Argentina',
    'mx' => 'México',
    'us' => 'Estados Unidos',
    'co' => 'Colombia'
);

$imagenes = array(
    'Mónik1.jpg' => 'Mónica con el pelo corto',
    'Mónik2.jpg' => 'Modelando la camiseta del verde',
    'Mónik3.jpg' => 'Módelando vestido blanco',
    'Mónik4.jpg' => 'Recostada en un sofá'
);

$redes = array(
    'Facebook' => 'www.facebook.com/nombre_usuario',
    'Twitter' => 'www.twitter.com/username',
    'Instagram' => 'www.instagram.com/usuario',
);

var_dump($options);
echo "<hr />";
var_dump($imagenes);
echo "<hr />";
var_dump($redes);
echo "<hr />";

/*for ($i=0; $i <count($redes) ; $i++) { 
    echo $i."<br />";
    echo $redes[$i];
}*/

foreach ($redes as $nombreRed => $urlRed) {
    echo $nombreRed.' -> '.$urlRed."<br />";
}

foreach ($imagenes as $source => $texto_alt) {
    //echo "El archivo $source, tiene como texto alternativo $texto_alt"."<br />";
    echo <<<HTML
    <h2>$texto_alt</h2>
    <img src="$source">
    HTML;
}


