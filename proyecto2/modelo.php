<?php

session_start();
session_name("concurso");
session_id();

function conexion_mysql() {
    $server_mysql = "localhost";
    $usuario_mysql = "root";
    $contraseña_mysql = "";
    $c = mysql_connect($server_mysql, $usuario_mysql, $contraseña_mysql);
    return $c;
}

function conexion_database($c) {
    $database_mysql = "concurso";
    mysql_select_db($database_mysql, $c);
    return $c;
}

function existe($usuario) {
    $existe = 'false';
    mysql_select_db(conexion_database(conexion_mysql()), conexion_mysql());
    $q1 = mysql_query("SELECT * FROM usuarios WHERE usuario='" . $usuario . "'", conexion_mysql());

    if (mysql_affected_rows(conexion_mysql()) == 1) {
        $existe = 'true';
    }
    return $existe;
}

function claveCorrecta($usu, $contra) {
    $correcto = 'false';
    mysql_select_db(conexion_database(conexion_mysql()), conexion_mysql());
    $q1 = mysql_query("SELECT * FROM usuarios WHERE usuario='" . $usu . "' AND clave='" . $contra . "'", conexion_mysql());
    if (mysql_affected_rows(conexion_mysql()) == 1) {
        $correcto = 'true';
    }
    return $correcto;
}

function insertar() {
    $insertado = "false";
    if (conexion_mysql()) {
        if (mysql_select_db(conexion_database(conexion_mysql()), conexion_mysql())) {
            if (mysql_query("INSERT respuestas (id,usuario, p1, p2, p3, p4, p5, tiempo, correctas, incorrectas) VALUES ('null','" . $usuario . "','" . $_SESSION['r1'] . "','" . $_SESSION['r2'] . "','" . $_SESSION['r3'] . "','" . $_SESSION['r4'] . "','" . $_SESSION['r5'] . "','" . $tiempoTotal . "', $correctas,$incorrectas)", conexion_mysql())) {
                $insertado = "true";
                echo "hola";
            }
        }
    }
    return $insertado;
}

function mejores() {
    if (conexion_mysql()) {
        if (mysql_select_db(conexion_database(conexion_mysql()), conexion_mysql())) {
            $q1 = mysql_query("SELECT distinct(usuario), correctas FROM respuestas
            ORDER BY correctas DESC, tiempo ASC
            LIMIT 5;", conexion_mysql());
        }
    }
}

?>