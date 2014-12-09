<?php
if (isset($_GET['usuario'])) {
    $c = mysql_connect("localhost", "root", "");
    mysql_select_db("concurso", $c);
    $q1 = mysql_query("select * from usuarios where usuario='" . $_GET['usuario'] . "'", $c);

    if (mysql_affected_rows($c) == 0) {
        if (mysql_query("INSERT usuarios (usuario, clave) VALUES ('".$_GET['usuario']."', '".$_GET['clave']."')", $c)) {
            echo "<h2> Usuario registrado</h2><br>";
            echo "<a href='index.php'>VOLVER</a>";
        } else {
            echo "<h2> No se ha podido registrar</h2><br>";
            echo mysql_errno($c) . ": " . mysql_error($c) . "\n";
        }
    } else {
        echo "El usuario ya existe";
        echo "<a href='".$_SERVER['HTTP_REFERER'] ."'> VOLVER</a>";
    }
} else {
    ?>
    <html>
        <head>
        </head>
        <body>
            <form action="registro.php" method="get">
                Usuario: <BR>
                <input type="text" name="usuario" required/><br>
                CLAVE: <br>
                <input type="clave" name='clave' required/><br><br>
                <input type="submit" value="Registrar"/>
            </form>
        </body>
    </html>
    <?php
}
?>