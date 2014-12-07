<?php
if ($_SERVER[REQUEST_METHOD]="GET") {
    echo  $_GET['nombre'],"<br>";
    echo  $_GET['apellidos'],"<br>";
    if ($_GET['ingles']!="") {
        echo  $_GET['ingles'],"<br>";
    }
    if ($_GET['titulos']) {
        echo  $_GET['titulos'],"<br>";
    }
}elseif ($_SERVER[REQUEST_METHOD]="POST") {
    echo  $_POST['nombre'],"<br>";
    echo  $_POST['apellidos'],"<br>";
    if (empty($_POST['ingles'])) {
        $_POST['ingles']="ninguno";
        echo  $_POST['ingles'],"<br>";
    }else{
        echo  $_POST['ingles'],"<br>";
        
    }
    if ($_POST['titulos']) {
        $_POST['titulos']="ninguno";
        echo  $_POST['titulos'],"<br>";
    }else{
        echo  $_POST['titulos'],"<br>";
        
    }
}