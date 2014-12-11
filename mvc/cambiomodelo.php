<?php
//mio
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
//original
//function conexion_mysql() {
//    $server_mysql = "localhost";
//    $usuario_mysql = "pepe";
//    $contraseña_mysql = "pepa";
//    $c = mysql_connect($server_mysql, $usuario_mysql, $contraseña_mysql);
//    return $c;
//}
//
//function conexion_database($c) {
//    $database_mysql = "concursoQuiz";
//    mysql_select_db($database_mysql, $c);
//    return $c;
//}