<?php
function conexiones($usuario, $clave) {
	$conectar = mysql_connect('localhost','root','');
	mysql_select_db('usuarios',$conectar);
	$sql = "SELECT * FROM `usuarios` WHERE `nombre`='$usuario' AND `clave`='$clave'";
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