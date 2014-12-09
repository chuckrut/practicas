<?php

if ($c = mysql_connect("localhost", "carmen", "carmen")) {
    echo "CONEXION ESTABLECIDA<BR>";
    if (mysql_query("CREATE DATABASE IF NOT EXISTS concurso", $c)) {
        echo "BD CREADA<BR>";
        if (mysql_select_db("concurso", $c)) {
            echo "BASE DE DATOS SELECCIONADA<BR>";
            if (mysql_query("CREATE TABLE IF NOT EXISTS usuarios (
                usuario VARCHAR (10) PRIMARY KEY,
                clave VARCHAR (10)
            )", $c)) {
                echo "TABLA CREADA<BR>";
                if (mysql_query("INSERT usuarios (usuario, clave) VALUES ('carmen','carmen')", $c)) {
                    echo "<h2> Se ha insertado correctamente</h2><br>";
                } else {
                    echo "<h2> No se ha insertado</h2><br>";
                }
            } else {
                echo "NO SE A PODIDO CREAR LA TABLA";
            }
        } else {
            echo "NO SE A PODIDO SELECCIONAR LA BD<BR>";
        }
    } else {
        echo "NO SE A PODIDO CREAR LA BD<BR>";
    }
} else {
    echo "NO SE A PODIDO ESTABLECER LA CONEXION<BR>";
}
?>