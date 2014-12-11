<?php
include ('funciones.php');
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
if (conexiones($usuario, $clave)){
	header('Location:inicio.php');
} else {
	header('Location: registro.html');
}