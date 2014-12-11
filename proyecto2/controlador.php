<?php

require('modelo.php');

$titulo="Concurso de preguntas";

if (isset($_GET['usuario']) == 'true' && isset($_GET['clave']) == 'true') {
    $u = existe($_GET['usuario']);
    $c = claveCorrecta($_GET['usuario'], $_GET['clave']);
    if ($u == 'true' && $c == 'true') {
        $_SESSION['usuario'] = $_GET['usuario'];
        $_SESSION['clave'] = $_GET['clave'];
        $_SESSION['fallos'] = 0;
        $_SESSION['aciertos'] = 0;
        $_SESSION['tiempo1']=time();
        header('Location: vista_p1.php');
    }else if ($u == 'false'){
        header('Location: registro.php');
    }else if($u == 'true' && $c == 'false'){
        header('Location: index.php');
    }
}

if (isset($_GET['p1']) == 'true'){
    $_SESSION['p1'] = $_GET['p1'];
$_SESSION['r1']='i';
if ($_SESSION['p1'] == "MADRID") {
    $_SESSION['aciertos']++;
    $_SESSION['r1']='c';
} else {
    $_SESSION['fallos']++;
}
header('Location: vista_p2.php');
}

if (isset($_GET['p2']) == 'true'){
$_SESSION['p2'] = $_GET['p2'];
$_SESSION['r2']='i';
if ($_SESSION['p2'] == "NAVARRA") {
    $_SESSION['aciertos']++;
    $_SESSION['r2']='c';
} else {
    $_SESSION['fallos']++;
}
header('Location: vista_p3.php');
}

if (isset($_GET['p3']) == 'true'){
    $_SESSION['p3'] = $_GET['p3'];
$_SESSION['r3']='i';
if ($_SESSION['p3'] == "GALICIA") {
    $_SESSION['aciertos']++;
    $_SESSION['r3']='c';
} else {
    $_SESSION['fallos']++;
}
header('Location: vista_p4.php');
}

if (isset($_GET['p4']) == 'true'){
    $_SESSION['p4'] = $_GET['p4'];
$_SESSION['r4']='i';
if ($_SESSION['p4'] == "MURCIA") {
    $_SESSION['aciertos']++;
    $_SESSION['r4']='c';
} else {
    $_SESSION['fallos']++;
}
header('Location: vista_p5.php');
}

if (isset($_GET['p5']) == 'true'){
    $_SESSION['p5'] = $_GET['p5'];
$_SESSION['r5']='i';
if ($_SESSION['p5'] == "ANDALUCIA") {
    $_SESSION['aciertos']++;
    $_SESSION['r5']='c';
    $_SESSION['tiempo2']=time();
    $tiempoTotal=$_SESSION['tiempo2']-$_SESSION['tiempo1'];

    $p=insertar();
    echo $p;
    if($p=='true'){
        guardaFichero();
        echo "<h1> SE HA GUARDADO LA PARTIDA</h1>";
    }else{
         echo "<h1> ERROR: NO SE HA GUARDADO LA PARTIDA</h1>";
    }
} else {
    $_SESSION['fallos']++;
}
header('Location: vista_final.php');
}


function guardaFichero(){
    $f7 = fopen("partidas.txt", "a");
fwrite($f7, "usuario: " . $_SESSION['usuario']."<br>");
fwrite($f7,"correctas: " . $correctas."<br>");
fwrite($f7,"incorrectas: " . $incorrectas."<br>");
fwrite($f7,"PREGUNTA 1, RESPUESTA ".$_SESSION['p1']." C/I: ". $p1."<br>");
fwrite($f7,"PREGUNTA 2, RESPUESTA ".$_SESSION['p2']." C/I: ". $p2."<br>");
fwrite($f7,"PREGUNTA 3, RESPUESTA ".$_SESSION['p3']." C/I: ". $p3."<br>");
fwrite($f7,"PREGUNTA 4, RESPUESTA ".$_SESSION['p4']." C/I: ". $p4."<br>");
fwrite($f7,"PREGUNTA 5, RESPUESTA ".$_SESSION['p5']." C/I: ". $p5."<br>");
fwrite($f7,"----------------------------------------------"."<br>");
fclose($f7);
}

function saberMejores(){
    $mejor=mejores();
    echo "<br><h1>LOS MEJORES RESULTADOS SON:</h1>";
echo "<table align=center border=2>";
while ($registro = mysql_fetch_row($mejor)){
       echo "<tr>";
       foreach($registro  as $clave){
       echo "<td>",$clave,"</td>";
 }
}
}

?>
