<?php

if($conexion = mysql_connect("localhost", "root", "")){
    echo "Conexion correcta<br>";
    if (mysql_query("CREATE DATABASE IF NOT EXISTS usuarios;", $conexion)) {
        echo "Creacion de bd correcto<br>";
        if (mysql_select_db("usuarios")){
            echo "Conexion con la bd correcta<br>";
            $consulta = "CREATE TABLE IF NOT EXISTS puntuacion("
                    . "usuario VARCHAR(15) PRIMARY KEY,"
                    . "aciertos INTEGER(3) NOT NULL,"
                    . "fallos INTEGER(3) NOT NULL,"
                    . "tiempo INTEGER"
                    . ")";
            if (mysql_query($consulta, $conexion)) {
                echo "Se ha creado correctamente la tabla<br>";
            }else{
                echo "No se ha podido crear la tabla<br>";
            }
        }else{
            echo "Conexion con la bd incorrecta<br>";
        }
    }else{
        echo "Creacion de bd incorrecta<br>";
    }
}else{
    echo "Conexion incorrecta<br>";
}

?>