<?php
include('funciones.php');
if (verificar_usuario()){
	echo "TODO write content";
} else {
	header('Location:index.html');
}