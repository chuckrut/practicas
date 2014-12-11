<?
# incluimos la clase fpdf que está en este mismo directorio
include("fpdf.php");
# y definimos la constante FPDF_FONTPATH como la ruta absoluta
# hasta el directorio que contiene las fuentes tipográficas
define('FPDF_FONTPATH',$_SERVER['DOCUMENT_ROOT'].'/cursophp/fpdf/fontspdf/');
/* vamos a configurar el documento como apaisado (P), utilizando
 los milímetros como unidad de medida y unas dimensiones "no estandar"
 de 140 x 200 milimetros */
# creamos un array con las dimensiones (ancho y alto);
$dimensiones=array (140,200);
# creamos  un nuevo objeto (MiPDF) utilizando la clase FPDF
# incluyendo en este caso los valores a utilizar por el constructor
$MiPDF=new FPDF('P','mm',$dimensiones);
# el método SetAuthor nos permite incluir el nombre del autor
$MiPDF->SetAuthor('Pepe Pérez');
# el método SetCreator nos permite incluir el nombre de la
# aplicacion que genera el pdf
$MiPDF->SetCreator('clase FPDF');
# el método SetTitle nos permite incluir un título
$MiPDF->SetTitle('Pruebas del pdf');
# el método SetKeywords nos permite incluir palabras claves
# separadas por espacios y dentro de una misma cadena
$MiPDF->SetKeywords('palabra1 palabra2');
# el método SetDisplayMode nos permite incluir palabras claves
# separadas por espacios y dentro de una misma cadena
$MiPDF->SetDisplayMode('fullpage','two');
# creamos una página en blanco. Incluimos, para esta primera página
# un cambio de orientación respecto a la inicial
$MiPDF->Addpage('L');
# creamos una segunda página en blanco
# en la que, al no incluir el parámetro de orientación
# utilizará el valor utilizado por el constructor.
$MiPDF->Addpage();
# visualizamos el documento
$MiPDF->Output('donpepito.pdf','I');
?>