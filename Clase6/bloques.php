<?php 
 /*
 * PHP no es solo PHP
 * Un sitio en PHP no tiene sólo bloques de código PHP
 * Esos bloques en realidad interactuan con código HTML para que el navegador muestre contenido con formato
 * Y, si bien contiene HTML, los archivos tendrán siempre la extensión .php
 * Si el apache no es capaz de interpretar el código, este lo enviará como texto plano
 * 
 * Ejemplo
 */

 $nombre = 'Julián';
 $apellido = 'Madrid';
 $email = 'julian@email.com'
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
    <>
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro
      reprehenderit repellat voluptates laudantium error, laborum vel soluta
      eveniet corrupti aspernatur a iste neque maxime repudiandae consequuntur
      veritatis! Aut quos illum ad dolor aliquid illo rem, laudantium id, minus
      dolorem maiores aliquam a omnis et, quasi fugiat enim rerum necessitatibus
      eligendi laborum velit temporibus nostrum fugit. Quam et placeat optio
      consectetur. <b><?php echo $nombre; ?></b> Eius iure eaque molestiae voluptates. Officiis nesciunt, sint
      cupiditate hic repellendus, nam delectus minus at, tempore dolor labore!
      Incidunt maxime aspernatur tempore consectetur accusantium nesciunt
      placeat natus optio accusamus. A, fugiat quia? Consectetur odio maiores
      eos doloribus nihil fugiat, harum corrupti minima quibusdam dignissimos
      quia rem hic optio dolores quisquam recusandae, molestiae necessitatibus
      sed vitae! <b><?php echo $email ?></b> Dolorum ad veniam quaerat consectetur modi, numquam quibusdam
      esse vel dignissimos commodi mollitia ea, praesentium sit natus quam ab
      recusandae, voluptates rerum voluptas tempora nulla ipsum expedita dolore
      sed. Labore recusandae qui eveniet, numquam, harum quidem odit laboriosam
      est eum commodi nisi deleniti doloribus nobis optio dicta? <?php echo '<b>'.$apellido.'</b>' ?> Optio inventore
      quos, vero eos corrupti odio fuga cum voluptatum obcaecati maxime.
      Perspiciatis delectus pariatur, ex reiciendis ducimus quasi consectetur
      sit sapiente fuga, velit numquam atque, fugiat maiores rerum ea?
      Exercitationem quo minus, illo deleniti aut nesciunt maxime.
      <?php echo '<h2>'.$nombre.' '.$apellido.'</h2>'?>
    </p>
  </body>
</html>