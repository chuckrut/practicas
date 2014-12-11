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
            <h1 class="horizontal"><?php echo $titulo ?></h1>
            <img src="images/p<?php echo $pagina ?>.jpg"/>
            <p class="horizontal">PREGUNTA <?php echo $pagina ?>: <?php echo $pregunta ?></p>
            <form class="horizontal" action="controlador.php" method="get">
                <select name="p<?php echo $pagina ?>">
                    <?php
                    for ($i = 0; $i < sizeof($opciones); $i++) {
                        ?><option><?php echo $opciones[$i] ?></option><?php
                    }
                    ?>
                </select>
                <input type="submit" value="Siguiente"/>
            </form>
        </div>
    </body>
</html>