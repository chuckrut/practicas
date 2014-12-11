<?
# incluimos la clase fpdf que está en este mismo directorio
include("fpdf.php");
# y definimos la constante FPDF_FONTPATH como la ruta absoluta
# hasta el directorio que contiene las fuentes tipográficas
define('FPDF_FONTPATH',$_SERVER['DOCUMENT_ROOT'].'/cursophp/fpdf/fontspdf/');
/* vamos a configurar el documento como apaisado (P), utilizando
 las pulgadas como unidad de medida y unas dimensiones "no estandar"
 de 10 x 20 pulgadas */

# creamos un array con las dimensiones (ancho y alto);
$dimensiones=array (10,20);
# creamos  un nuevo objeto (MiPDF) utilizando la clase FPDF
# incluyendo en este caso los valores a utilizar por el constructor
$MiPDF=new FPDF('P','in',$dimensiones);
# creamos una página en blanco. Incluimos, para esta primera página
# un cambio de orientación respecto a la inicial
$MiPDF->Addpage('L');
# creamos una segunda página en blanco
# en la que, al no incluir el parámetro de orientación
# utilizará el valor utilizado por el constructor.
$MiPDF->Addpage();
# visualizamos el documento
$MiPDF->Output();
?>