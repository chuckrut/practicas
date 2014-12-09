<?php
function existe($usuario) {
    $existe = false;
    $c = mysql_connect("localhost", "root", "");
    mysql_select_db("concurso", $c);
    $q1 = mysql_query("select * from usuarios where usuario='" . $usuario . "'", $c);

    if (mysql_affected_rows($c) == 1) {
        $existe = true;
    }
    return $existe;
}

function claveCorrecta($usu, $contra) {
    $correcto = false;
    $c = mysql_connect("localhost", "root", "");
    mysql_select_db("concurso", $c);
    $q1 = mysql_query("select * from usuarios where usuario='" . $usu . "' AND clave='" . $contra . "'", $c);
    if (mysql_affected_rows($c) == 1) {
        $correcto = true;
    }
    return $correcto;
}
?>
