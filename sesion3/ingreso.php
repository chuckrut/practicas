<html>
    <head>
        <title>Inicio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
<?php
include ('funciones.php');
if (verificar_usuario()){
	print "Hola $_SESSION[usuario]<br/>"
                . "Para subir archivos PDF: <a href='pdf.php'>clic aqui</a><br/>"
                . "Para subir archivos JPG: <a href='jpg.php'>clic aqui</a><br/>";
	print "Desconectarse <a href='salir.php'/>aqui</a>";
} else {
	header('Location:index.html');
}
?>
    </body>
</html>
