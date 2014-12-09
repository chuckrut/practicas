<?php
        session_start();
        session_name('ej36');
        session_id();
        $_SESSION['p1']=$_GET['p1'];
?>
<html>
    <head>
    </head>
    <body>
        <img src="p2.jpg" height="400" width="400"/><br>
        PREGUNTA 2: &#191;Donde se encuentra este monumento&#63;<br>
        <form action="p3.php" method="get">
            <select name="p2">
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