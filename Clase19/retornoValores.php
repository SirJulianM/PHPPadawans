<?php

/* 
*   RETORNO DE VALORES
*   Las funciones que aceptan la palabra return, seguida de un valor o una variable, que cumplirá dos funciones:
*   1) Devolverá el contenido de la variable o el valor que se encuentre a continuación por la misma fuera de la función
*   2) Cortará toda ejecución del código pendiente de la función
*   Siempre que la función devuelva una variable, lo que está retornando no es la variable, sino su contenido
*
*   COMBINAR FUNCIONES
*   Toda función que retorne un valor deberá ser almacenada en una variable al ser ejecutada o procesada con una función o comando
*   Una de las ventajas de que las funciones reciban argumentos, y retornen un valor está en combinarlas
*   Dado que una de las premisas fundamentales de la programación es que cada función debe cumplir con un único objetivo, combinandolas podemos fraccionar
*   cualquier programa en instrucciones más simples 
*/

function mostrar($texto) {
    echo $texto;
}

function saludar5($user, $correo, $mostrar_hr) {
    $mensaje = "Hola $user, bienvenido al sistema, vas a acceder con tu correo $correo";

    if($mostrar_hr === true){
         $mensaje.='<hr />';
    }

    return $mensaje;
}

$rta = saludar5('Edward', 'eddie@email.com', true);

echo $rta;
echo saludar5('Sofía', 'sofia@email.com', true);
mostrar(saludar5('Julian', 'julian@email.com', true));

function generarFecha($dia, $mes, $anio, $formato = true, $espaniol = false) {
    if ($formato === false) {
        return "$dia / $mes";
    } else {
        if ($espaniol === true) {
            $nombreMes = obtenerMes($mes);
            return "$dia de $nombreMes de $anio";
        } else {
            return "$dia del mes $mes de $anio";
        }
    }
}

function obtenerMes($numero){
    if ($numero == 1) {
        return 'Enero';
    }
    if ($numero == 2) {
        return 'Febrero';
    }
    if ($numero == 3) {
        return 'Marzo';
    }
    if ($numero == 4) {
        return 'Abril';
    }
    if ($numero == 5) {
        return 'Mayo';
    }
    if ($numero == 6) {
        return 'Junio';
    }
    if ($numero == 7) {
        return 'Julio';
    }
    if ($numero == 8) {
        return 'Agosto';
    }
    if ($numero == 9) {
        return 'Septiembre';
    }
    if ($numero == 10) {
        return 'Octubre';
    }
    if ($numero == 11) {
        return 'Noviembre';
    }
    if ($numero == 12) {
        return 'Diciembre';
    }
}

$fecha = generarFecha('24','09','2023');
echo $fecha;
echo "<hr />";
$fechaCompleta = generarFecha(24,9,2023,true,true);
echo $fechaCompleta;

