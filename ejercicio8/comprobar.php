<?php

session_start();
session_name('ej36');
session_id();
$_SESSION['p5'] = $_GET['p5'];
$correctas = 0;
$incorrectas = 0;
$p1 = 'i';
$p2 = 'i';
$p3 = 'i';
$p4 = 'i';
$p5 = 'i';
if ($_SESSION['p1'] == "MADRID") {
    $correctas++;
    $p1 = 'c';
} else {
    $incorrectas++;
}
if ($_SESSION['p2'] == "NAVARRA") {
    $correctas++;
    $p2 = 'c';
} else {
    $incorrectas++;
}
if ($_SESSION['p3'] == "GALICIA") {
    $correctas++;
    $p3 = 'c';
} else {
    $incorrectas++;
}
if ($_SESSION['p4'] == "MURCIA") {
    $correctas++;
    $p4 = 'c';
} else {
    $incorrectas++;
}
if ($_SESSION['p5'] == "ANDALUCIA") {
    $correctas++;
    $p5 = 'c';
} else {
    $incorrectas++;
}


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

if ($c = mysql_connect("localhost", "root", "")) {
    echo "CONEXION ESTABLECIDA<BR>";
    if (mysql_select_db("concurso", $c)) {
        echo "BASE DE DATOS SELECCIONADA<BR>";
        if (mysql_query("INSERT respuestas (id,usuario, p1, p2, p3, p4, p5, correctas, incorrectas) VALUES ('null','" . $usuario . "','" . $p1 . "','" . $p2 . "','".$p3."','".$p4."','".$p5."', $correctas,$incorrectas)", $c)) {
            echo "<h2> Partida Guardada</h2><br>";
        } else {
            echo "<h2> No se ha podido guardar la partida</h2><br>";
            echo mysql_errno($c) . ": " . mysql_error($c) . "\n";
        }
    } else {
        echo "NO SE A PODIDO SELECCIONAR LA BD<BR>";
    }
} else {
    echo "NO SE A PODIDO ESTABLECER LA CONEXION<BR>";
}

/*GUARDANDO EN FICHERO*/
$f7 = fopen("carman.txt", "a");
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

/*MOSTRAR LOS MEJORES*/
$q1 = mysql_query("SELECT distinct(usuario), correctas
FROM respuestas
ORDER BY correctas DESC
LIMIT 5;", $c);
echo "<br><h1>LOS MEJORES RESULTADOS SON:</h1>";
echo "<table align=center border=2>";
while ($registro = mysql_fetch_row($q1)){
       echo "<tr>";
       foreach($registro  as $clave){
       echo "<td>",$clave,"</td>";
 }
}

?>
