<?php   

var_dump($_GET);

/*
*   PASO DE DATOS
*   Cuando creamos una variable, la misma solo existe en el documento donde fue creada
*   Al hacer click en otro vínculo, esta función se elimina de la memoria
*   Para pasar un dato (o un valor) de un archivo a otro, PHP nos ofrece tres técnicas
*   -   Enviar los datos por GET        ->  Formularios y vínculos
*   -   Enviar los datos por POST       ->  Formularios únicamente
*   -   Usar variables de sesión        ->  La veremos más adelante
*
*   DIFERENCIA ENTRE GET Y POST
*   El envío de datos por GET tiene tres desventajas importantes sobre POST
*       -   La información es enviada de forma vísible por URL, bajo la estructura:
*       http://dominio.com/carpeta/archivo.php?variable1=valor&variable2=valor2
*       -   Tiene un límite de 2048 caracteres, desde el principio al final (incluye http)
*       -   No permite adjuntar archivos (no reconoce el input tipo file)
*   Pero tiene dos ventajas puntuales
*       -   Es sutilmente más veloz que POST
*       -   Se puede guardar en favoritos o compartir en redes sociales
*
*   FORMULARIOS
*   Los formularios permiten el envío de datos tanto por GET como por POST
*   Eso se define con el atributo method que tendrá uno de estos dos valores
*   La información ingresada será enviada al documento que haya sido indicado en el atributo
*   action del formulario
*
*   ATRIBUTO DE LOS CONTROLES
*   Todos los campos del formulario deben tener el atributo name. Cualquier control que no tenga 
*   un name, será omitido en el envío. Y en el caso de los controles de selección, deberán tener un value
*   que sea representativo de la información a enviar.
*   Si un radio o un checkbox no tiene value, se envía el valor On (pero no dice cual es el campo que fue
*   seleccionado).
*   Si un option (de la etiqueta select) no tiene value, se envía su texto interno
*
*   RECIBIR LOS DATOS
*   Para PHP, GET y POST son arreglos asociativos con la información enviada desde un archivo a otro
*   -   Para obtener los datos enviados por GET se usa $_GET[]
*   -   Para obtener los datos enviados por POST se usa $_POST[]
*   Entre los corchetes va (como cadena de texto, porque es un arreglo asociativo). El dato que estamos
*   buscando. 
*   -   Para los datos por POST, el name del campo dentro de formulario
*   -   Para los datos por GET, el nombre de la variable recibida por URL
*   Ambos métodos son de lectura, no le podemos asignar valores
*
*   EL ACTION DEL FORMULARIO
*   El documento que procesa la información se conoce como "documento de acción"
*   Según el objetivo del formulario, este PHP trabajará con la base de datos o enviará una 
*   notificación por mail, por la cual nunca nos debemos quedar en este archivo.
*   El PHP procesa, hace las acciones pertinentes y redirecciona a otro archivo.
*   Esa redirección se hace con la función header() indicando la locación a la que vamos a 
*   reenviar el usuario -> header(location: archivo.php)
*   
*   ERROR DE LOCACIÓN
*   Para que la dirección funcione, el PHP no debe hacer ni echo, ni print, si ejecuta echo o print
*   producirá un error porque los header ya fueron enviados
*   Habilitar en el php.ini el output_buffering (por ON o por un valor fijo en bytes) o forzarlo
*   desde la programación en PHP, ejecutando la función ob_start().
*
*   ENVIO DE CHECKBOX
*   Al igual que los campos, el input de tipo checkbox debe tener un name, pero cada checkbox debe
*   tener un nombre diferente y como se dijo previamente: todo checkbox que no fue seleccionado, no 
*   se envía al action del formulario. El problema es que hacer un $_POST o $_GET de elementos que no existen
*   genera un error. En consecuencia, estamos obligados a hacer un if que evalue si existe el checkbox que estamos por buscar
*
*   VERIFICAR EL CHECKBOX
*   Los datos enviados (sea por GET o por POST) son un arreglo asociativo con los name de los campos como índices.
*   Por ende, para saber si un checkbox llegó, hay que evaluar si existe el índice dentro del arreglo (de GET o de POST)
*   Usando la función isset($POST['namecheckbox']) que retornará verdadero si existe el input y falso si no existe
*
*   SIMPLIFICAR EL CHECKBOX
*   Claro que hacer un isset() por cada campo es aceptable con cinco o 10 checkbox
*   En una cantidad mayor se vuelve inmanejable, por lo cual es hacer que el name de los checkbox en HTML tengan el
*   formato del arreglo -> checkbox[]
*   Para HTML es un nombre válido y PHP asume que $_POST[checkbox] ese efectivamente un arreglo, por lo cual podemos
*   recorrerlo con un for/foreach o unirlos con un implode(). Si no seleccionamos ninguno, el $_POST['checkbox'] genera
*   un error pero solo debemos preguntar un solo isset() -> isset($_POST['checkbox'])
*
*   PASO DE DATOS CON VÍNCULOS
*   Cuando le decimos a un formulario que mande datos por GET, se pasan las variables por la URL
*   Y cómo es visible, el usuario puede modificar los valores desde la misma URL. Entonces, cualquier elemento que encerremos 
*   en un vínculo puede mandar los datos GET mientras respetemos la estructura de la URL.
*   NOTA: Los vínculos no pueden ser enviados por POST
*
*   IMPLEMENTACIONES
*   El envío de datos por GET se suele utilizar para las siguientes funcionalidades:
*   -   Buscador de contenido
*   -   Dividir el listado de contenido en distintas páginas
*   -   Ver un determinado elemento del listado disponible en la web
*   -   Definir que sección o categoría queremos acceder
*   -   En todos los escenarios, el navegador accede a una determinada URL y luego del
*       signo de pregunta le indica el conjunto de variables y valores a recibir
*/   

$gustos = ['Leer', 'Jugar videojuegos', 'Estudiar', 'Dibujar', 'Tocar el piano'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <a href="pasoDocumentos.php?variable=DragonRojo"><img src="Mónik.jpg" alt="CC" width="10%"></a>
        <br /><br />
        <?php 
            if (isset($_GET['rta'])) {
                if ($_GET['rta']=='ok') {
                    echo "<p class='ok'>Gracias nos estaremos contactando en la brevedad posible</p>";
                } else {
                    echo "<p class='error'>Hay un error al llenar el formulario</p>";
                }
                
            } else {
                echo "<p class='info'>Completa este formulario para contactarnos</p>";
            }
        ?>
        <form action="documentos.php" method="post">
            <div>
                <label for="Nombre">Nombre:</label>
                <input type="text" name="Nombre" id="Nombre">
            </div>
            <div>
                <label for="Email">Email: </label>
                <input type="email" name="Email" id="Email">
            </div>
            <div>
                <label for="Gustos">Gustos: </label>
                <?php 
                for ($i=0; $i <count($gustos); $i++) { 
                    echo "<label><input type='checkbox' value='$gustos[$i]' name='gusto[]' />$gustos[$i]</label>";
                }
                ?>
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>
        </form>
        <!-- <form action="" method="get">
            <h2>Buscador</h2>
            <div><input type="search" name="buscar" id="buscar"></div>
            <div><input type="submit" value="Buscar"></div>
        </form> -->
    </main>
</body>
</html>


