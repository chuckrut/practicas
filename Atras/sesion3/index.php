<?php
include ('funciones.php');
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
if (conexiones($usuario, $clave)){
	header('Location:ingreso.php');
} else {
	header('Location: index.html');
}