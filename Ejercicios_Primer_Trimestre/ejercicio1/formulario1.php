<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio9</title>
    </head>
    <body>
        <form action="visor1">			
            <fieldset class="cuestionario">
                <legend>Datos personales:</legend>
                <input id="mujer" type="radio" name="genero" value="m">
                <label for="mujer">Mujer</label>
                <br />
                <input id="varon" type="radio" name="genero" value="v">
                <label for="varon">Varón</label>
                <br />
                <label>Edad:<br />
                <input type="text" name="edad"/></label>
                <br />
                <label>Fecha de nacimiento:<br />
                <input type="date" name="fechanac">
                <br />
                <label>Movil:<br />
                <input type="te" name="movil"/></label><br />
                <label>Email:<br />
                <input type="text" name="email"/></label><br />
                <label>Pagina Web:<br />
                <input type="url" name="web">
                <br />

            <input class="boton" type="submit" value="enviar encuesta">
        </form>
    </body>
</html>