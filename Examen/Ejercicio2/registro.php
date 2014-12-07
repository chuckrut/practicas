<?php
include ('funciones.php');
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
registrar($usuario, $clave);
header('Location:index.html');