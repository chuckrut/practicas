<?php
function conexiones($usuario, $clave) {
	$conectar = mysql_connect('localhost','root','');
	mysql_select_db('usuarios',$conectar);
	$sql = "SELECT * FROM `usuarios` WHERE `email`='$usuario' AND `clave`='$clave'";
	$ejecutar_sql=mysql_query($sql,$conectar);
	if (mysql_num_rows($ejecutar_sql)!=0){
		session_start();
		$_SESSION['usuario']=$usuario;
		return true;
	} else {
		return false;}
}
function verificar_usuario(){
	session_start();
	if ($_SESSION['usuario']){
		return true;
	}
}
function registrar($usuario, $clave) {
	$conectar = mysql_connect('localhost','root','');
	mysql_select_db('usuarios',$conectar);
	$sql = "INSERT INTO `usuarios` VALUES ('$usuario','$clave')";
	$ejecutar_sql=mysql_query($sql,$conectar);
	if (mysql_num_rows($ejecutar_sql)!=0){
		session_start();
		$_SESSION['usuario']=$usuario;
		return true;
	} else {
		return false;}
}
function guardar_cupon($usuario,$numeros,$fecha){
	$conectar = mysql_connect('localhost','root','');
	mysql_select_db('usuarios',$conectar);
	$sql = "INSERT INTO `bonoloto` VALUES ('$usuario','$numeros','$fecha')";
	$ejecutar_sql=mysql_query($sql,$conectar);
	if (mysql_num_rows($ejecutar_sql)!=0){
		session_start();
		$_SESSION['usuario']=$usuario;
		return true;
	} else {
		return false;}
}
function ver_cupones($usuario) {
//	$conectar = mysql_connect('localhost','root','');
//	mysql_select_db('usuarios',$conectar);
//	$sql = "SELECT * FROM `bonoloto` WHERE `usuario`='$usuario'";
//	$ejecutar_sql=mysql_query($sql,$conectar);
//	if (mysql_num_rows($ejecutar_sql)!=0){
//		session_start();
//		$_SESSION['usuario']=$usuario;
//		return true;
//	} else {
//		return false;}
        if ($conexion = mysql_connect("localhost", "root", "")) {
            if (mysql_select_db("usuarios")) {
                $consulta = "SELECT * FROM `bonoloto` WHERE `usuario`='$usuario'";
                echo "<br>";
                echo "<table style='border:solid'>";
                echo "<tr><td>Usuario</td><td>Numeros</td><td>Fecha</td></tr>";
                if($sql = mysql_query($consulta, $conexion)){
                    if(mysql_affected_rows($conexion)>0){
                        while ($registro = mysql_fetch_row($sql)) {
                            echo "<tr>";
                            foreach ($registro as $usuario) {
                                echo "<td>", $usuario, "</td>";
                            }
                            echo "</tr>";
                        }
                    }
                }else{
                }
                echo "</table>";
            } else {
            }
        } else {
        }
        mysql_close($conexion);
}