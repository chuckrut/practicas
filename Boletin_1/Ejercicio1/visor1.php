<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php
        $iva=8;
        $preciojyq=0;
        $preciomoz=0;
        $precionap=0;
        $archivo = fopen("pedidos.txt", "a+");
        fwrite($archivo, chr(10) . chr(10) . "Nombre: " . $_POST["nombre"] . chr(10));
        fwrite($archivo, "Direccion: " . $_POST["direccion"] . chr(10));
        fclose($archivo);
        if (isset($_POST["jamonyqueso"])) {
            $preciojyq = $_POST["cantidadjyq"] * $_POST["jamonyqueso"];
            $archivo = fopen("pedidos.txt", "a+");
            fwrite($archivo, "Jamón y Queso: " . $_POST["cantidadjyq"] . chr(10));
            fwrite($archivo, "  Precio: " . $preciojyq . "€" . chr(10));
            fclose($archivo);
        }
        if (isset($_POST["napolitana"])) {
            $precionap = $_POST["cantidadnap"] * $_POST["napolitana"];
            $archivo = fopen("pedidos.txt", "a+");
            fwrite($archivo, "Napolitana: " . $_POST["cantidadnap"] . chr(10));
            fwrite($archivo, "  Precio: " . $precionap . "€" . chr(10));
            fclose($archivo);
        }
        if (isset($_POST["mozzarella"])) {
            $preciomoz = $_POST["cantidadmoz"] * $_POST["mozzarella"];
            $archivo = fopen("pedidos.txt", "a+");
            fwrite($archivo, "Mozzarella: " . $_POST["cantidadmoz"] . chr(10));
            fwrite($archivo, "  Precio: " . $preciomoz . "€" . chr(10));
            fclose($archivo);
        }
        $precio=$preciojyq + $preciomoz + $precionap;
        $ivadeprecio=$precio*($iva/100);
        $archivo = fopen("pedidos.txt", "a+");
        fwrite($archivo, chr(10) . chr(10) . "  Precio: " . $precio . "€" . chr(10));
        fwrite($archivo, "IVA: ".$iva."%");
        fwrite($archivo, chr(10) . "  Precio Total: " . ($ivadeprecio+$precio) . "€" . chr(10) . chr(10));
        fwrite($archivo, chr(10) . date("j-n-Y ") . date(" h : i : s") . chr(10) . "...............................................");
        fclose($archivo);
        $conexion++;
        $archivo = fopen("pedidos.txt", "r");
        $mensaje="";
        while (!feof($archivo)) {
            $mensaje.= fgets($archivo) . "<br />";
        }
        fclose($archivo);
        echo get_string_between($mensaje, "Nombre: " . $_POST["nombre"], "  Precio Total: " . ($ivadeprecio+$precio) . "€");
        ?>
    </body>
</html>
<?php
function get_string_between($string, $start, $end){
    $string = " ".$string;
    $ini = strpos($string,$start);
    if ($ini == 0) return "";
    $ini += strlen($start);
    $len = strpos($string,$end,$ini) - $ini;
    return substr($string,$ini,$len);
}
?>