<? 
/* abrimos con w+ con lo cual borramos el contenido
  y creamos el fichero en el caso de que no existiera */
$f1=fopen("sabado.txt","w+");
# escribimos en el fichero vacío
fwrite($f1,"Esta es la primera linea que escribimos en el fichero<br>");
#cerramos el fichero
fclose($f1); 
echo "<H2>Este es el resultado después del primer fwrite</H2><br>";
include("sabado.txt");
# abrimos con r+ con lo cual sobreescribiremos
# en el fichero preexistente
$f1=fopen("sabado.txt","r+");
# escribimos en al principio del fichero preexistente
# ya que al abrir un fichero en este modo el puntero
# se sitúa al comienzo del fichero 
fputs($f1,"Esto se sobreescribe");
#cerramos el fichero
fclose($f1); 
echo "<H2>Este es el resultado después del segundo fwrite</H2><br>";
include("sabado.txt");
# abrimos con a+ con lo cual AÑADIREMOS
# al fichero preexistente ya que el modo de apertura
# sitúa el puntero al final del fichero
$f1=fopen("sabado.txt","a+");
# escribimos  al final del fichero preexistente
fputs($f1," Esto se añadirá al final<br>");
#cerramos el fichero
fclose($f1); 
echo "<H2>Este es el resultado después del tercer fwrite</H2><br>"; 
include("sabado.txt");
echo "<h2>Leyendo con fgetc</h2><br>";
# abrimos con r+ con lo cual podemos LEER y AÑADIR
# al fichero preexistente
$f1=fopen("sabado.txt","r+");
# leemos el primer carácter del fichero
# ya que el apuntador esta el principio
$z=fgetc($f1);
# imprimimos el primer carácter
echo "He leido el primer carácter: ",$z,"<br>";
/* leemos el segundo caracter del fichero
ya que el apuntador se ha movido a esa posición al leer
anteriormente el primer carácter.
OBSERVA que NO HEMOS CERRADO AUN EL FICHERO */
$z=fgetc($f1);
# este es el nuevo valor de la variable $z
echo "He leido el segundo carácter: ",$z,"<br>";
/* leemos el siguiente caracter del fichero
ya que el apuntador se ha movido a una nueva posición 
Recuerda que NO HEMOS CERRADO AUN EL FICHERO */
$z=fgetc($f1);
# este es ahora el valor de la variable $z
echo "He leido el tercer carácter: ",$z,"<br>";
echo "<h2>Ahora el puntero está en el tercer caracter<br>";
echo "fgets empezará a leer a partir de el</H2>";;
$z=fgets($f1,200);
echo "Con fgets he leido esto: ",$z,"<br>";
#Ahora cerramos el fichero
fclose($f1);
echo "<br><H2>Al abrir el fichero de nuevo fgets
 comienza desde el principio</h2><br>";
#Abrimos de nuevo el fichero
$f1=fopen("sabado.txt","r");
#Leemos su contenido
$za=fgets($f1,5000);
#Presentamos el contenido
echo $za;
#Ahora cerramos el fichero
fclose($f1);
echo "--------------------------------------------------------------<br>";
?>
<h2>Aqui veremos el contenido (sin etiquetas HTML)de una pagina web</H2>
<?
# Escribimos la dirección completa de la página que puede ser
# el resultado de unir el valor de la variable $_SERVER['DOCUMENT_ROOT']
# (ruta completa del directorio raíz de servidor)
#  con el nombre del directorio que la contiene y nombre del fichero
# la abrimos en modo solo lectura
$f1=fopen($_SERVER['DOCUMENT_ROOT']."/cursophp/php53.php","r");
# Escribimos un bucle para que vaya leyendo
# cada una de las líneas hasta llegar al final del fichero
while (!feof($f1)) {
    $z = fgetss($f1, 1024);
    echo $z,"<br>";
  }
#Cerramos el fichero
fclose($f1); 
#Borramos el fichero antes de salir
unlink("sabado.txt");
?>