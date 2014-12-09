<?php

$c = mysql_connect("localhost", "carmen", "carmen");
mysql_select_db("concurso", $c);
$q1 = mysql_query("select * from usuarios where usuario='".$_GET['usuario']."'", $c);

if (mysql_affected_rows($c) == 1) {
    $q2 = mysql_query("select * from usuarios where usuario='".$_GET['usuario']."' AND clave='".$_GET['clave']."'", $c);
    if (mysql_affected_rows($c) == 1) {
        session_start();
        session_name('concurso');
        session_id();
        $_SESSION['usuario']=$_GET['usuario'];
        $_SESSION['clave']=$_GET['clave'];
?>
<a href='p1.php?<?echo session_name()."=".session_id()?>'>
                  COMENZAR CONCURSO</A>
<?php
        }else{
        echo "EL USUARIO EXISTE PERO LA CLAVE ES INCORRECTA<BR>";
        echo "<a href='".$_SERVER['HTTP_REFERER'] ."'>VOLVER</a>";
    }
} else {
    echo "EL USUARIO NO EXISTE<br>";
    echo "<a href='".$_SERVER['HTTP_REFERER'] ."'>VOLVER</a>";
}
?>