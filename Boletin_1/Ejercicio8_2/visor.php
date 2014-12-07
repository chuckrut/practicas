<?php
session_cache_limiter('nocache,private');
session_name('fallosyAciertos');
session_start();
$usuario = $_GET["usuario"];
$contraseña = $_GET["contraseña"];
$mensaje = "";
$bool = false;

if ($conexion = mysql_connect("localhost", "root", "","login")) {
    $mensaje .= "Conectado.<br>";
    if (mysql_select_db("login", $conexion)) {
        $mensaje .= "Conectado con la Base de Datos.<br>";
        if ($result = mysql_query('SELECT * FROM usuarios WHERE usuario = "' . $usuario . '" AND contraseña = "' . $contraseña . '";', $conexion)) {
            $mensaje .= "Consulta ejecutada.<br>";
            if (mysql_num_rows($result) == 1) {
                $mensaje .= "Usuario localizado.<br>";
                $bool = true;
            } else {
                $mensaje .= "No se identifica el usuario o contrase&ntilde;a.<br>";
            }
        } else {
            $mensaje .= "Consulta no ejecutada.<br>";
        }
    } else {
        $mensaje .= "Fallo de conexion con la Base de Datos.<br>";
    }
} else {
    $mensaje .= "Fallo de conexion.<br>";
}

mysql_close($conexion);

echo $mensaje;
if ($bool) {
    $_SESSION["usuario"] = $usuario;
    echo "<form action=\"pagina1.php\">";
    echo "  <input type=\"submit\" value=\"Comenzar concurso\">";
    echo "</form>";
}
?>


