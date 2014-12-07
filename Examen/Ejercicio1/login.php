<?php
    session_name('datos');
    session_start();
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    $bool = false;
    if ($conexion = mysql_connect("localhost", "root", "")) {
        if (mysql_select_db("usuarios", $conexion)) {
            if ($result = mysql_query('SELECT * FROM usuario WHERE usuario = "' . $usuario . '" AND contraseña = "' . $contraseña . '";', $conexion)) {
                if (mysql_num_rows($result) == 1) {
                    $bool = true;
                } else {
                }
            } else {
            }
        } else {
        }
    } else {
    }
    mysql_close($conexion);
    if ($bool) {
        $_SESSION["usuario"] = $usuario;
        echo "<form action='p1.php'>";
        echo "  <input type='submit' value='Concursar'>";
        echo "</form>";
    }
?>