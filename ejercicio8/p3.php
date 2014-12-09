<?php
        session_start();
        session_name('ej36');
        session_id();
        $_SESSION['p2']=$_GET['p2'];
?>
<html>
    <head>
    </head>
    <body>
        <img src="p3.jpg" height="400" width="400"/><br>
        PREGUNTA 3: &#191;Donde se encuentra este monumento&#63;<br>
        <form action="p4.php" method="get">
            <select name="p3">
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