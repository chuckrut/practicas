<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario14</title>
    </head>
    <body>
        <form action="formulario14.php" method="post" accept-charset="iso-8859-1">
            Numero:<br>
            <input type="number" name="numero">
            <br>
            <input type="submit" value="enviar">
        </form>
    </body>
</html>

<?php
$resto=$_POST["numero"]%12;
switch ($resto){
    case 0:
        echo "division exacta";
        break;
    case 1:
        echo"uno";
        break;
    case 2:
        echo "dos";
        break;
    case 3:
        echo "tres";
        break;
    case 4:
        echo "cuatro";
        break;
    case 5:
        echo "cinco";
        break;
    case 6:
        echo "seis";
        break;
    case 7:
        echo "siete";
        break;
    case 8:
        echo "ocho";
        break;
    case 9:
        echo "nueve";
        break;
    case 10:
        echo "diez";
        break;
    case 11:
        echo "once";
        break;
    default:
        break;
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

