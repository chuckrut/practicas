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
            <h3 class="horizontal">RESULTADOS</h3>
            <p>correctas: <?php echo $_SESSION['aciertos'] ?></p>
            <p>incorrectas: <?php echo $_SESSION['fallos'] ?></p>
            <p class="horizontal">usuario: <?php echo $_SESSION['usuario'] ?></p>
            <p>PREGUNTA 1, RESPUESTA <?php echo $_SESSION['p1'] ?> C/I: <?php echo $_SESSION['r1'] ?></p>
            <p>PREGUNTA 2, RESPUESTA <?php echo $_SESSION['p2'] ?> C/I: <?php echo $_SESSION['r2'] ?></p>
            <p>PREGUNTA 3, RESPUESTA <?php echo $_SESSION['p3'] ?> C/I: <?php echo $_SESSION['r3'] ?></p>
            <p>PREGUNTA 4, RESPUESTA <?php echo $_SESSION['p4'] ?> C/I: <?php echo $_SESSION['r4'] ?></p>
            <p>PREGUNTA 5, RESPUESTA <?php echo $_SESSION['p5'] ?> C/I: <?php echo $_SESSION['r5'] ?></p>
            <p class="horizontal">-----------------------------------</p>
            <?php saberMejores()?>
        </div>
    </body>
</html>
<!--<
echo "RESULTADOS";
echo "<br>usuario: " . $_SESSION['usuario'];
$usuario = $_SESSION['usuario'];
echo "<br>correctas: " . $correctas;
echo "<br>incorrectas: " . $incorrectas;
echo "<br>PREGUNTA 1, RESPUESTA ".$_SESSION['p1']." C/I: ". $p1;
echo "<br>PREGUNTA 2, RESPUESTA ".$_SESSION['p2']." C/I: ". $p2;
echo "<br>PREGUNTA 3, RESPUESTA ".$_SESSION['p3']." C/I: ". $p3;
echo "<br>PREGUNTA 4, RESPUESTA ".$_SESSION['p4']." C/I: ". $p4;
echo "<br>PREGUNTA 5, RESPUESTA ".$_SESSION['p5']." C/I: ". $p5;
echo "<br>-----------<br>";
>-->


<!--poner lo de arriba en html y hacer referencia a las variables de  $_SESSION['p1'] x ej, prA ello hay
q crear una sesion con 
session_start();
session_name('concurso');
session_id();

luego de mostrar eso llamar a la funcion saberMejores para ello hay q hacer un require de controlador.

¿Así? No hace falta un required, con el include va que chuta, ademas esas variables "session_start()"
y tal, con el include las copia tambien.
-->