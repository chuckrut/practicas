<?php
include('funciones.php');
if (verificar_usuario()){
	header('Location:jpg/form.html');
} else {
	header('Location:index.html');
}