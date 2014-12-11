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
            <h1><?php echo $titulo ?></h1>
            <h3>RESULTADOS</h3>
            <p>correctas: <?php echo $_SESSION['aciertos'] ?></p>
            <p>incorrectas: <?php echo $_SESSION['fallos'] ?></p>
            <p class="derecha">usuario: <?php echo $_SESSION['usuario'] ?></p>
            <p class="horizontal">PREGUNTA 1, RESPUESTA <?php echo $_SESSION['p1'] ?> C/I: <?php echo $_SESSION['r1'] ?></p>
            <p class="horizontal">PREGUNTA 2, RESPUESTA <?php echo $_SESSION['p2'] ?> C/I: <?php echo $_SESSION['r2'] ?></p>
            <p class="horizontal">PREGUNTA 3, RESPUESTA <?php echo $_SESSION['p3'] ?> C/I: <?php echo $_SESSION['r3'] ?></p>
            <p class="horizontal">PREGUNTA 4, RESPUESTA <?php echo $_SESSION['p4'] ?> C/I: <?php echo $_SESSION['r4'] ?></p>
            <p class="horizontal">PREGUNTA 5, RESPUESTA <?php echo $_SESSION['p5'] ?> C/I: <?php echo $_SESSION['r5'] ?></p>
            <p class="horizontal">-----------------------------------</p>
            <?php saberMejores()?>
        </div>
    </body>
</html>