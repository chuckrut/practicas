<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario2</title>
    </head>
    <body>
        <form action="visor2.php" method="post" accept-charset="iso-8859-1">
            Nombre:<br>
            <input type="text" name="nombre">
            <br>
            Apellidos:<br>
            <input type="text" name="apellidos"><br>
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
            <input type="submit" value="enviar">
        </form>
    </body>
</html>
