<?php include("controlador.php") ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo ?></title>
        <link href="./css/estilo.css" type="text/css" title="css" rel="stylesheet" />
    </head>
    <body>
        <div class="centrado">
            <h1 class="horizontal">Login</h1>
            <form action="controlador.php" method="get">
                <p class="derecha"><label for="Usuario">Usuario:</label> <input type="text" name="usuario" id="Usuario"/></p>
                <p class="derecha"><label for="Contraseña">Contraseña:</label> <input type="text" id="Contraseña" name="clave"/></p>
                <p class="horizontal"><input type="submit"/></p>
            </form>
        </div>
    </body>
</html>