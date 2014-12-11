<?php
include ('funciones.php');
if (verificar_usuario()){
	session_unset();
	session_destroy();
	header ('Location:index.html');
} else {
	header ('Location:index.html');
}