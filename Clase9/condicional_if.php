<?php

/*

* TOMA DE DECISIONES
* En algún momento de nuestros programas debemos contemplar que está sucediendo con la información. Con base a una evaluación
* (o condición) podemos decidir que acción tomar o mostrar un mensaje.

* ESTRUCTURA IF
* La estructura if (que significa "si"), sirve para evaluar si está sucediendo una determinada condición en nuestro programa.
* Esta condición no es otra que una comparación, con cualquiera de los operadores de comparación.
* La sintaxis de esta estructura es:
* if(condición){ 
*       // Todo esto sucederá si se cumple con la condición 
*    }else{ 
*        // Todo esto sucederá si no cumple con la condición 
*    }
* Solo cuando la condición se cumpla, se realizarán las acciones entre las llaves
*/

$nombre = 'Julián';
$apellido = 'Madrid';
$email = 'julian@email.com';

$logueado = true;

ini_set('display_errors', 0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if ($logueado == false) //Si no está logueado, mostramos el formulario de Login
    {
    
    ?>
    <form action="" method="post">
        <div>
            <label for="">Email</label>
            <input type="email" name="correo" id="correo" >
        </div>
        <div>
            <label for="">Contraseña</label>
            <input type="password" name="clave" id="clave">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php 

    $logueado = true;

    }else{

    ?>
    <div>
        <?php 
        
        echo '<h2>'.$nombre.' '.$apellido.'</h2>';
        echo $email;
        
        ?>
        <div>
            <a href="">Cerrar sesion</a>
        </div>
    </div>
    <?php
    $logueado = true;
    }
    ?>
</body>
</html>