<?php
session_cache_limiter('nocache,private');
session_name('fallosyAciertos');
session_start();
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];
$mensaje = "<p style='color: red'>";
$bool = false;

if ($conexion = mysql_connect("localhost", "root", "", "usuarios")) {
    if (mysql_select_db("usuarios", $conexion)) {
        if ($result = mysql_query('SELECT * FROM usuarios WHERE usuario = "' . $usuario . '" AND contraseña = "' . $contraseña . '";', $conexion)) {
            if (mysql_num_rows($result) == 1) {
                $bool = true;
            } else {
                $mensaje .= "No se identifica el usuario o contraseña.<br>";
            }
        } else {
            $mensaje .= "Consulta no ejecutada.<br>";
        }
    } else {
        $mensaje .= "Fallo de conexion con la Base de Datos.<br>";
    }
} else {
    $mensaje .= "Fallo de conexion MYSQL.<br>";
}

mysql_close($conexion);

echo $mensaje."</p>";
if ($bool) {
    $_SESSION["usuario"] = $usuario;
    echo "<form action='p1.php'>";
    echo "  <input type='submit' value='Concursar'>";
    echo "</form>";
}
?>