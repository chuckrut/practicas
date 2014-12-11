<?php
// Si el usuario no está autenticado entonces lo mandamos a la página de autenticación(login.php)
function userIsAuth(){
  // Si no hay una sesión iniciada, lo hacemos
  if ( !isset($_SESSION) ){
    session_start();
  }
 
  // If existe la variable de sesión "user" entonces es que un usuario ha iniciado sesión
  if ( isset($_SESSION['user']) ){
    return true;
  } else {
    return false;
  }
}
if ( !userIsAuth() ){
header('Location: login.php'); // Cuidado con esta función. Debe ser llamada antes de MOSTRAR NADA por pantalla, incluidos espacios en blanco.
}
// Si no, significa que está autenticado y podemos cargar el contenido de la página.
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
[...]
</html>