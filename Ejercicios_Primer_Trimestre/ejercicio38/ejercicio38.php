<?php

$conexion=mysql_connect ("localhost","root","") or die ("Imposible conectar."); 

mysql_select_db ("practicas", $conexion); 

$crear="CREATE TABLE IF NOT EXISTS 
        tabla1 ( 
        DNI VARCHAR(9) , 
        nombre VARCHAR(45),  
        apellidos VARCHAR(45),  
        fecha DATE,  
        repetidor ENUM('Si','No')  )";

if(mysql_query($crear,$conexion)){
	print "Se ha creado la base de datos.<br>";
}else{
    print "Se ha producido un error al crear la tabla.";
}
?>
