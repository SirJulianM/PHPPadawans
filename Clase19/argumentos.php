<?php

/*
*   ARGUMENTOS
*   El manejo de las variables globales sirve en casos muy puntuales. Para que una función cumpla su premisa de ser reutilizable, acepta el paso de argumentos
*   Un argumento es un valor que se envía dese afuera de la función hacia la misma por medio del uso de los paréntesis. Estos argumentos se crean en la función 
*   al ejecutar la misma y se borran de la memoria cuando termina de ejecutarse
*
*   VALOR POR DEFECTO
*   Si una función espera un argumento optativo, se puede crear un valor por defecto para los mismos
*/

function saludar3() {
    global $nombre, $email; //Esto sale de la función y busca la variable en otro lugar del script
    $mensaje = "Hola $nombre, bienvenido al sistema, vas a acceder con tu correo $email";
    echo $mensaje;
}

$nombre = "Julián";
$email = "julian@email.com";

saludar3();
echo "<hr />";

function saludar4($user, $correo, $mostrar_hr) {
    $mensaje = "Hola $user, bienvenido al sistema, vas a acceder con tu correo $correo";
    echo $mensaje;
    if($mostrar_hr === true){
        echo "<hr />";
    }
}

saludar4('Edward', 'eddie@email.com', true);
//echo "<hr />";

$nom = 'Sofía';
$celectronico = 'sofia@email.com';
$hr = false;

saludar4($nom, $celectronico, $hr);