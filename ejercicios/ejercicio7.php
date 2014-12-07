<?php
# Definamos una variable y asign�mosle un valor
           $color="rojo";
# Definamos ahora una nueva variable de nombre variable
# usando para ello la variable anterior
           $$color=" es mi color preferido";

# Veamos impresos los contenidos de esas variables
print ( "El color ".$color. $$color ."<br>");
#o tambi�n
print ( "El color ".$color. ${$color}."<br>");
# o tambi�n
print ( "El color ".$color. $rojo."<br>");

# advirtamos lo que va a ocurrir al visualizar la p�gina

print ("Las tres l�neas anteriores deben decir lo mismo<br>");
print ("Hemos invocado la misma variable de tres formas diferentes<BR>");


# cambiemos ahora el nombre del color
$color="magenta";

/* La variable $rojo seguir� existiendo.
   El hecho de cambiar el valor a $color
   no significa que vayan a modificarse
   las variables creadas con su color anterior 
   ni que se creen automaticamente variables 
   que tengan por nombre el nuevo valor de $color   */

# Pongamos un mensaje de advertencia para que sea visualizado en la salida

print ("Ahora la variable \$color ha cambiado a magenta<br>");
print ("pero como no hemos creado ningua variable con ese color<br>");
print ("en las lineas siguientes no aparecer� nada <br>");
print ("detr�s de la palabra magenta <br>");

# Escribimos los print advertidos
print (" El color ".$color.$$color."<br>");
print (" El color ".$color.${$color}."<br>");

# Comprobemos que la variable $rojo creada como variable de variable
# cuando  $color="rojo" a�n existe y mantiene aquel valor

print ("Pese a que \$color vale ahora ".$color."<br>");
print ("la vieja variable \$rojo sigue exisitiendo <br>");
print ("y conserva su valor. Es este: ".$rojo);

