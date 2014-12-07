<?php
session_cache_limiter('nocache,private');
session_name('fallosyAciertos');
session_start();
$usuario = $_GET["usu"];
$contra = $_GET["contra"];
$concat = "";
$correcto = false;

if ($c = mysql_connect("localhost", "pepe", "pepa")) {
    $concat = concatenar($concat, "Conexion correcta");
    if (mysql_select_db("usuarios", $c)) {
        $concat = concatenar($concat, "Conexion con la bd correcta");
        if ($result = mysql_query('SELECT * FROM usuarios WHERE usuario = "' . $usuario . '" AND contra = "' . $contra . '";', $c)) {
            $concat = concatenar($concat, "Sentencia Correcta");
            if (mysql_num_rows($result) == 1) {
                $concat = concatenar($concat, "Usuario identificado");
                $correcto = true;
            } else {
                $concat = concatenar($concat, "Usuario o contrase&ntilde;a no validos");
            }
        } else {
            $concat = concatenar($concat, "Query no correcta");
        }
    } else {
        $concat = concatenar($concat, "Conexion con la bd incorrecta");
    }
} else {
    $concat = concatenar($concat, "Conexion incorrecta");
}

mysql_close($c);

echo $concat;
if ($correcto) {
    $_SESSION["usuario"] = $usuario;
    echo "<form action=\"pagina1.php\">";
    echo "  <input type=\"submit\" value=\"Comenzar concurso\">";
    echo "</form>";
}

function concatenar($cadena, $cadenaAgregar){
    $cadena = $cadena." <br> ".$cadenaAgregar;
    return $cadena;
}
?>


