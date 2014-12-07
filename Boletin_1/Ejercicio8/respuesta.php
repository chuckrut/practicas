<?php

    session_cache_limiter('nocache,private');
    session_name('datos');
    session_start();

    $usuario = $_SESSION["usuario"];
    $aciertos = $_SESSION['acierto'];
    $errores = $_SESSION['error'];
    $sql = "";

    echo "<h1>FIN</h1><br>";
    echo $usuario . "<br>";
    echo "Aciertos: " . $aciertos . "<br>";
    echo "Errores: " . $errores . "<br>";
    $primer_tiempo = $_SESSION["tiempo"];
    $segundo_tiempo = time();
    $tiempo = $segundo_tiempo - $primer_tiempo;
    if ($conexion = mysql_connect("localhost", "root", "")) {
        if (mysql_select_db("usuarios")) {
            mysql_query("INSERT INTO datos VALUES('" . $usuario . "', '" . $aciertos . "', '" . $errores . "', '" . $tiempo . "');");
            $consulta = "SELECT * FROM datos ORDER BY aciertos DESC, errores ASC, tiempo ASC LIMIT 5";
            echo "<br>";
            echo "<table>";
            echo "<tr><td>Usuario</td><td>Aciertos</td><td>Errores</td><td>Tiempo</td></tr>";
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
            }
            echo "</table>";
        } else {
        }
    } else {
    }
    mysql_close($conexion);
    ?>