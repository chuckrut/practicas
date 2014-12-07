<?php

$usuario=$_GET["usuario"];
$sentencia="SELECT * FROM usuarios where usuario='$usuario'"; 

if($conexion=mysql_connect ("localhost","pepe","pepa")){
    echo "SE HA ESTABLECIO LA CONEXION<BR>";
    if (mysql_select_db ("usuarios", $conexion)) {
        echo "Use bd correcto<br>";
        if($resultado=mysql_query($sentencia,$conexion)){
            echo "SE HA REALIZADO LA CONSULTA<br>";
            if(mysql_num_rows($conexion)==1){
                echo "LA CONSULTA TIENE ".mysql_affected_rows($conexion)." RESULTADOS <BR>";
            }else{
                echo "LA CONSULTA NO HA PRODUCIDO RESULTADOS<br>";
            }
        }else{
            echo "NO SE HA PODIDO REALIZAR LA CONSULTA<br>";
        }
    }else{
        echo "USE bd incorrecto<br>";
    }
}else{
    echo "NO SE HA PODIDO ESTABLECER LA CONEXION<br>";
}

?>