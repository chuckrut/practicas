<?php
        session_start();
        session_name('ej36');
        session_id();
        $_SESSION['p3']=$_GET['p3'];
?>
<html>
    <head>
    </head>
    <body>
        <img src="p4.jpg" height="400" width="400"/><br>
        PREGUNTA 4: &#191;Donde se encuentra este monumento&#63;<br>
        <form action="p5.php" method="get">
            <select name="p4">
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