<!DOCTYPE html>
<html>
	<head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>formu1</title>
	</head>
	<body>
		<?
                    echo "El method  usado fu�: ",$_SERVER['REQUEST_METHOD'],"<br>";
                    echo  $_POST['nombre'],"<br>";
                    echo  $_POST['clave'],"<br>";
                    echo  $_POST['color'],"<br>";
                    if(isset($_POST['acondicionado'])){
                            echo  $_POST['acondicionado'],"<br>";
                    }
                    if(isset($_POST['tapiceria'])){
                    echo  $_POST['tapiceria'],"<br>";
                    }
                    if(isset($_POST['llantas'])){
                    echo  $_POST['llantas'],"<br>";
                    }
                    echo  $_POST['precio'],"<br>";
                    echo  $_POST['texto'],"<br>";
                    echo  $_POST['oculto'],"<br>";
                ?>
	</body>
</html>