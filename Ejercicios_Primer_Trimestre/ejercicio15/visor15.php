<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo $_GET['valor']."<br />";
            echo $_GET['texto']."<br />";
            $numero=$_GET['valor'];
            echo 'Numero: ';
            printf("%'*12.2f euros",$numero);
            echo "<br/>Diez primeras letras en mayusculas<br/>";
            $mensaje=strtolower($_GET['texto']);
            $subcad1=substr($mensaje,0,10);
            $subcad2=substr($mensaje,10);
            echo (strtoupper($subcad1)+$subcad2);
        ?>
    </body>
</html>
