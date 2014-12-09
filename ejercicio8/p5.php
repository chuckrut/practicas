<?php
        session_start();
        session_name('ej36');
        session_id();
        $_SESSION['p4']=$_GET['p4'];
?>
<html>
    <head>
    </head>
    <body>
        <img src="p5.jpg" height="400" width="400"/><br>
        PREGUNTA 5: &#191;Donde se encuentra este monumento&#63;<br>
        <form action="comprobar.php" method="get">
            <select name="p5">
                <option>MADRID</option>
                <option>ANDALUCIA</option>
                <option>NAVARRA</option>
                <option>MURCIA</option>
                <option>GALICIA</option>
            </select>
            <input type="submit" value="Siguiente"/>
        </form>
    </body>
</html>