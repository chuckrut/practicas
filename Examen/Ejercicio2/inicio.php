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
	print "Hola $_SESSION[usuario].<br/>";
        print "Los numeros de la bonoloto de hoy son:<br>";
        srand((double)microtime()*1000000);
        $numeros="";
        for ($i=0;$i<6;$i++){
            $numero=rand(1,50);
            if ($i==5) {
                $numeros.=$numero;
            }else{
                $numeros.=$numero." - ";
            }
        }
        print $numeros;
        $fecha=date("j-n-Y ") . date(" h : i : s");
        guardar_cupon($usuario, $numeros, $fecha);
        ver_cupones($usuario);
	print "<br>Desconectarse <a href='salir.php'/>aqui</a>.";
} else {
	header('Location:index.html');
}
?>
    </body>
</html>
