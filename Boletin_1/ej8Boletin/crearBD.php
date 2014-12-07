<?php

if($c = mysql_connect("localhost", "pepe", "pepa")){
    echo "Conexion correcta<br>";
    if (mysql_query("CREATE DATABASE IF NOT EXISTS usuarios;", $c)) {
        echo "Creacion de bd correcto<br>";
        if (mysql_select_db("usuarios")){
            echo "Conexion con la bd correcta<br>";
            $query = "CREATE TABLE IF NOT EXISTS puntuacion("
                    . "usuario VARCHAR(15),"
                    . "aciertos INTEGER(3) NOT NULL,"
                    . "fallos INTEGER(3) NOT NULL,"
                    . "tiempo INTEGER"
                    . ")";
            if (mysql_query($query, $c)) {
                echo "Se ha creado correctamente la tabla<br>";
            }else{
                echo "No se ha podido crear la tabla<br>";
            }
            $query = "CREATE TABLE IF NOT EXISTS usuarios("
                    . "usuario VARCHAR(15) PRIMARY KEY,"
                    . "contra VARCHAR(20) NOT NULL"
                    . ")";
            if (mysql_query($query, $c)) {
                echo "Se ha creado correctamente la tabla<br>";
                //Añadimos algunos datos
                mysql_query("INSERT INTO usuarios VALUES(\"juan\", \"juan1\");");
                mysql_query("INSERT INTO usuarios VALUES(\"luisa\", \"luisa1\");");
                mysql_query("INSERT INTO usuarios VALUES(\"pepe\", \"pepe\");");//Esta hecho asi a posta
                mysql_query("INSERT INTO usuarios VALUES(\"ana\", \"ana1\");");
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
mysql_close($c);

?>