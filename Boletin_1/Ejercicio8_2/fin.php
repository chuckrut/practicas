
<?php

session_cache_limiter('nocache,private');
session_name('fallosyAciertos');
session_start();

$usuario = $_SESSION["usuario"];
$aciertos = $_SESSION['positivo'];
$errores = $_SESSION['negativo'];
$sql = "";

echo "<h1>Ha concluido el concurso</h1><br>";
echo "Resultados de " . $usuario . "<br>";
echo "Positivo: " . $aciertos . "<br>";
echo "Negativo: " . $errores . "<br>";

$primer_tiempo = $_SESSION["tiempo"];
$segundo_tiempo = time();

$tiempo = $segundo_tiempo - $primer_tiempo;

if ($conexion = mysql_connect("localhost", "pepe", "pepa")) {
    echo "Conexion correcta<br>";
    if (mysql_select_db("usuarios")) {
        echo "Conexion con la bd correcta<br>";
        mysql_query("INSERT INTO puntuacion VALUES('" . $usuario . "', '" . $aciertos . "', '" . $errores . "', '" . $tiempo . "');");
        $consulta = "SELECT * FROM puntuacion ORDER BY aciertos DESC, fallos ASC, tiempo ASC LIMIT 5";
        echo "<br>";
        echo "<table>";
        echo "<tr><td>Usuario</td><td>Aciertos</td><td>Fallos</td><td>Tiempo</td></tr>";
        if($sql = mysql_query($consulta, $conexion)){
            if(mysql_affected_rows($conexion)>0){
                while ($registro = mysql_fetch_row($sql)) {
                    echo "<tr>";
                    foreach ($registro as $clave) {
                        echo "<td>", $clave, "</td>";
                    }
                    echo "</tr>";
                }
            }
        }else{
            echo "No se ha producido ningun resultado";
        }
        echo "</table>";
    } else {
        echo "Conexion con la bd incorrecta<br>";
    }
} else {
    echo "Conexion incorrecta<br>";
}

mysql_close($conexion);
?>