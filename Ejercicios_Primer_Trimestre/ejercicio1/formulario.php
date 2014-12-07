<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>formulario</title>
    </head>
    <body>
        <!-- Un formulario debe empezar siempre con una etiqueta de este tipo 
              <form ...> en la que ser� obligatorio indicar con esta sintaxis
                 action='nombre.extension'
                 nombre.extension debe contener el nombre (o la ruta completa
                 en el caso de que estuviera en un directorio o hosting distinto
                 del que alberga el documento que contiene el formulario desde
                 el que se realiza la petici�n)

                 Es opcional incluir method que puede tener dos valores
                 method='GET' � method='POST', por defecto (cuando no se indica)
                 el envio se realizar� usando method='GET'

                 Tambi�n es opcional -a los efectos de PHP- incluir name.
                 Ese valor es �til cuando se incluyen scripts del lado del cliente
                 del tipo JavaScript  //-->

        <form name='mi_formulario' action='formu1.php' method='post'>
            <!-- Pueden incluirse textos dentro del formulario -->
            Escribe tu nombre:

            <!-- Uno de los tipos de campos posibles es el tipo texto
                 su sintaxis (hablamos de HTML) requiere la etiqueta
                     <input type='text'> que indica el contenido del texto
                     esa etiqueta debe incluir obligatoriamente un name='nombre'
                     el nombre a usar ser�n caracteres alfab�ticos, sin tildes
                     ni e�es y sin espacios. Salvo excepciones que comentaremos
                     no puede usarse el mismo nombre para dos campos distintos
                     el value='' puede no contener nada entre las comillas
                     tal como ocurre aqu� o contener el texto que por defecto queremos
                     que aparezca en ese campo al cargar el formulario.
                     el size=xx es opcional. Su utilidad es la de ajustar el
                     tama�o de la ventana al n�mero de caracteres que se indiquen //-->

            <input type='text' name='nombre' value='' size=15><br>
                Escribe tu clave:

                <!--  <input type='password'> solo se diferencia del anterior
                       en que en el momento de rellenarlo se sustituyen los carecteres
                           visualizados (no el contenido) por asteriscos //-->

            <input type='password' name='clave' value=''><br>
                Elige tu color de coche favorito:<br>

                <!--  Los <input type='radio'> permite optar entre varios
                         valores posibles. Habr� que repetirlos tantas veces como
                        opciones queramos habilitar.
                        Todos los input �correspondientes a la misma opci�n�
                        deben tener el mismo nombre (name)
                        value='loquesea' deber� tener un valor
                        distinto en cada uno de ellos. Ese valor (loquesea)
                        ser� transferido a trav�s del formulario
                        Si queremos que una opci�n aparezca marcada (por defecto)
                        al cargar el formulario, deberemos incluir en su etiqueta
                        la palabra checked
                        los contenidos de value no se visualizan en el navegador
                        por lo que conviene incluir una descripci�n de los 
                        valores despu�s de cerrar la etiqueta de cada input   
                        Al enviar el formulario solo se transmite el value
                        correspondiente a la opci�n seleccionada   //-->

            <input type='radio' name='color' value='Rojo'>Rojo</br>
            <input type='radio' checked name='color' value='Verde'>Verde</br>
            <input type='radio' name='color' value='Azul'>Azul</br>
                Elige los extras:<br>

                <!--  Cada uno de los <input type='checkbox'>
                     requiere un nombre distinto (name) y un valor (value)
                         permite optar entre varios
                     Esos valores (loquesea)
                        ser�n transferidos a trav�s del formulario
                        cuando la casilla de verificaci�n est� marcada 
                        Si queremos que una casilla aparezca marcada (por defecto)
                        al cargar el formulario, deberemos incluir en su etiqueta
                        la palabra checked
                        los contenidos de value tampoco aqu�
                        se visualizan en el navegador
                        por lo que conviene incluir una descripci�n de los 
                        valores despu�s de cerrar la etiqueta de cada input   
                        Al enviar el formulario solo se transmite los value
                        correspondiente a la opcion marcadas   //-->

            <input type='checkbox' name="acondicionado" value="Aire">
                Aire acondicionado<br>
            <input type='checkbox' checked name="tapiceria" value="Tapicieria">
                Tapiceria en piel<br>
            <input type='checkbox' name="llantas" value="aluminio">
                Llantas de aluminio<br>
                �Cual es el precio m�ximo<br>
                que estar�as dispuesto a pagar?

                <!--  La etiqueta <input type='select'>
                     requiere un nombre 
                     y requiere tambi�n una etiqueta de cierre
                         </select>
                         Entre ambas -apertura y cierre-
                         deben incluirse las diferentes opciones
                         entre las de etiquetas
                         <option>valor<option> 
                        Al enviar el formulario se transmite lo
                        contenido despu�s de opci�n
                        en la opci�n seleccionada 
                    si dentro de una etiqueta option 
                        escribimos selected ser� esa
                        la que aparezca por defecto al cargarse el formulario//-->

                <select name="precio">
                    <Option>Menos de 6.000 euros</option>
                    <Option>6.001 - 8.000 euros</option>
                    <Option selected >8.001 - 10.000 euros</option>
                    <Option>10.001 - 12.000 euros</option>
                    <Option>12.001 - 14.000 euros</option>
                    <Option>M�s de 14.000 euros</option>
                </select>


                <!-- Las �reas de texto deben tener una etiqueta de apertura
                      <textarea name='checkbox'>
                          seguida de una etiqueta de cierre </textarea>
                          Dentro de la etiqueta de apertura puede incluirse
                          rows=xx (indicar� el n�mero de filas)
                          cols=yy (indicar� el ancho expresado en n�mero de caracteres)
                          y opcionalmente un value='lo que sea...'
                          que puede contener el texto que -por defecto-
                          pretendemos que aparezca en ese espacio
                          en el momento de cargar rl formulario   //-->

                <br> Escribe aqu� cualquier otro comentario:<br>
            <textarea rows=5 cols=50 name='texto'></textarea><br>

                <!-- El <input type='hidden'>
                           permite insertar en un formulario una valor oculto
                           que no requiere ser cumplimentado por el usuario
                           y que no aparece visible en el documento
                           requiere un name y un value //-->

            <input type="hidden" name='oculto' value='Esto ir�a oculto'><br>

                <!-- El <input type='submit'>
                           es el encargado de ejecutar la action
                           incluida en la etiqueta de apertura del formulario
                           que en este caso ser�a la llamada
                           a la p�gina que se indica en la action
                           El texto que incluyamos en value='enviar...' 
                           ser� el que se visualice en el propio bot�n de envio    //-->

            <input type="submit" value="enviar">
                <!-- El <input type='reset'>
                           permite borrar todos los contenidos
                           del formulario y reestablecer los valores
                           por defecto de cada campo //-->

            <input type="reset" value="borrar">
                <!-- La etiqueta </form>
                           es la etiqueta de cierre del formulario   //-->
        </FORM>
    </BODY>
</HTML>