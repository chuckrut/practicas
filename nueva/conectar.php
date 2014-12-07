<?php

    $conexion = mysql_connect("localhost", "root", "");
    mysql_select_db("usuarios", $conexion);
    $queEmp = "SELECT * FROM usuarios ORDER BY n ASC";
    $resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
    $totEmp = mysql_num_rows($resEmp);
    if ($totEmp > 0) {
        while ($rowEmp = mysql_fetch_assoc($resEmp)) {
            echo "<strong>" . $rowEmp['usuario'] . "</strong><br>";
            echo "Nombre: " . $rowEmp['nombre'] . "<br>";
            echo "Email: " . $rowEmp['mail'] . "<br><br>";
        }
    }