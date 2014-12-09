<?php

if ($c = mysql_connect("localhost", "root", "")) {
    echo "CONEXION ESTABLECIDA<BR>";
    if (mysql_query("CREATE DATABASE IF NOT EXISTS concurso", $c)) {
        echo "BD CREADA<BR>";
        if (mysql_select_db("concurso", $c)) {
            echo "BASE DE DATOS SELECCIONADA<BR>";
            if (mysql_query("CREATE TABLE IF NOT EXISTS respuestas (
                id int (10) NOT NULL AUTO_INCREMENT,
                usuario varchar (10),
                p1 varchar (1),
                p2 varchar (2),
                correctas int (5),
                incorrectas int (5),
                PRIMARY KEY (id, usuario),
                FOREIGN KEY (usuario) REFERENCES usuarios(usuario)
            )", $c)) {
                echo "TABLA CREADA<BR>";
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