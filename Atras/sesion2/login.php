<?php
// Comprobamos si hemos iniciado sesión con anterioridad
if (userIsAuth()) {
  echo 'Ya has iniciado una sesión. ¿Quieres irte? <a href="logout.php">Sí</a> | <a href="http://disney.com">No</a>';
  exit;
// Comprobamos si hemos recibido algo del formulario de login y que estos datos no sean vacios
} else if ($_POST) {
  if (!empty($_POST['username']) && !empty($_POST['passwd']) ) {
 
    $username = $_POST['username'];
    $passwd = $_POST['passwd'];
 
    if ( login($username, $passwd) ) {
      'Enhorabuena ' . htmlentities($username) . '. Te has autenticado correctamente.';
      exit;
    } else {
      echo 'No hemos encontrado nada que coincida con este nombre de usuario y contraseña en nuestra base de datos';
    }
 
  } else {
    echo 'Tienes que rellenar todos los campos';
  }
}
 function db_connect(){
  $result = new mysqli($host, $username, $password, $dbname);
  if( !$result ){
    throw new Exception('No se ha podido conectar a la base de datos');
  } else {
    return $result;
  }
}
/*
 * Si no habíamos iniciado sesión o lo hemos intentado pero ha fallado el proceso entonces mostrará el formulario de login.
 * No voy a implementar la función do_html_form_login(), lo podéis hacer vosotros. Es un simple formulario en html.
 */
do_html_form_login();