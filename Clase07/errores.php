<?php 

/*

* ERRORES DE PROGRAMACIÓN

* Cuando no respetamos las reglas sintácticas, PHP devuelve un mensaje de error, agrupados en distintos niveles de errores

* 1) Algunos críticos y cortan toda la ejecución del script
* 2) Otros no trágicos, muestra el error y sigue de largo

* Desde el archivo php.ini se configura si queremos mostrar o no esos errores

* Si no los mostramos y el programa corta, solo veremos una pantalla en blanco

* Si lo habilitamos, el error indicará dónde está el problema y de que tipo es

* NIVELES DE ERROR

* PHP divide los errores en cuatro niveles principales:

* - E_ERROR Error grave (fatal error) que detiene la ejecución del script donde sucede el error
* - E_WARNING Error leve (non-fatal error), muestran el mensaje y siguen ejecutando el script
* - E_PARSE Error sintáctico o de parseo. Es el error más común: olvidarse de un punto y coma al final de la instrucción 
* (Esto genera pantalla en blanco)
* - E_NOTICE Avisos del interprete de PHP. Por ejemplo, variables no inicializadas o vacías, funciones despreciadas, etc. 

* HABILITAR LOS ERRORES

* Desde el archivo php.ini hay que modificar dos líneas
* - error_reporting: igualarlo con el valor E_ALL.
* - display_errors: igualarlo con el valor on.

* No siempre podemos modificar el php.ini, así que también se puede habilitar desde código
? <?php
?    ini_set('display_errors', 1);
?    error_reporting(E_ALL);
? ?>



*/

$nombre = 'Julián';
$apellidos = 'Madrid';
$email = 'julian@email.com';
ini_set('display_errors', 0);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h2>Este es el título</h2>
    <?php 
    /*echo hola_mundo;*/
    ?>
    <p>
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro
      reprehenderit repellat voluptates laudantium error, laborum vel soluta
      eveniet corrupti aspernatur a iste neque maxime repudiandae consequuntur
      veritatis! Aut quos illum ad dolor aliquid illo rem, laudantium id, minus
      dolorem maiores aliquam a omnis et, quasi fugiat enim rerum necessitatibus
      eligendi laborum velit temporibus nostrum fugit. Quam et placeat optio
      consectetur. Eius iure eaque molestiae voluptates. Officiis nesciunt, sint
      cupiditate hic repellendus, nam delectus minus at, tempore dolor labore!
      Incidunt maxime aspernatur tempore consectetur accusantium nesciunt
      placeat natus optio accusamus. A, fugiat quia? Consectetur odio maiores
      eos doloribus nihil fugiat, harum corrupti minima quibusdam dignissimos
      quia rem hic optio dolores quisquam recusandae, molestiae necessitatibus
      sed vitae! Dolorum ad veniam quaerat consectetur modi, numquam quibusdam
      esse vel dignissimos commodi mollitia ea, praesentium sit natus quam ab
      recusandae, voluptates rerum voluptas tempora nulla ipsum expedita dolore
      sed. Labore recusandae qui eveniet, numquam, harum quidem odit laboriosam
      est eum commodi nisi deleniti doloribus nobis optio dicta? Optio inventore
      quos, vero eos corrupti odio fuga cum voluptatum obcaecati maxime.
      Perspiciatis delectus pariatur, ex reiciendis ducimus quasi consectetur
      sit sapiente fuga, velit numquam atque, fugiat maiores rerum ea?
      Exercitationem quo minus, illo deleniti aut nesciunt maxime.
    </p>
  </body>
</html>