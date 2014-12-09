<?php include ('controlador.php'); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo ?></title>
        <link href="./css/centrado.css" type="text/css" title="centrado" rel="stylesheet" />
    </head>
    <body>
        <form action="vista.php" class="centrado" method="post" accept-charset="iso-8859-1">
            Nombre:<br>
            <input type="text" name="nombre">
            <br>
            Direccion:<br>
            <input type="text" name="direccion">
            <br>
            Telefono:<br>
            <input type="text" name="telefono">
            <br>
            Edad:<br>
            <input type="number" name="edad">
            <br>
            Sexo:<br>
            <input type="radio" name="sexo" value="hombre">Hombre<br>
            <input type="radio" name="sexo" value="mujer">Mujer
            <br>
            Titulos academicos:<br>
            <input type="checkbox" name="titulos" value="bachiller">Bachillerato<br>
            <input type="checkbox" name="titulos" value="medio">Modulo Medio<br>
            <input type="checkbox" name="titulos" value="superior">Modulo Superior<br>
            <input type="checkbox" name="titulos" value="carrera">Grado o Licenciatura
            <br>
            Nivel de Inglés:<br>
            <select name="ingles">
                <option value="iniciacion" selected>A1</option>
                <option value="basico">A2</option>
                <option value="intermedio">B1</option>
                <option value="alto">B2</option>
                <option value="avanzado">C1</option>
            </select><br>
            Otros datos de interés:<br>
            <textarea rows="5" cols="30" name="datos"></textarea><br>
            <input type="submit" value="enviar">
        </form>
    </body>
</html>
<?php 
echo  $_REQUEST['nombre'],"<br>";
echo  $_REQUEST['direccion'],"<br>";
echo  $_REQUEST['telefono'],"<br>";
echo  $_REQUEST['edad'],"<br>";
echo  $_REQUEST['sexo'],"<br>";
echo  $_REQUEST['titulos'],"<br>";
echo  $_REQUEST['ingles'],"<br>";
echo  $_REQUEST['datos'],"<br>";
inicio();