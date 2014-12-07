<?php
    session_cache_limiter('nocache,private');
    session_name('datos');
    session_start();
    $bool = $_GET["Pregunta"] == "skyrim";
        if ($_GET["Enviar"] == null) {
            $_SESSION["time"] = time();
            $_SESSION['acierto'] = 0;
            $_SESSION['error'] = 0;
        } else {
            if (!$bool) {
                $_SESSION["error"] = $_SESSION["error"] + 1;
            } else {
                $_SESSION["acierto"] = $_SESSION["acierto"] + 1;
                header('Location: pregunta2.php');
            }
        }
        print "<h1>Hola " . $_SESSION["usuario"] . "</h1>";
        print "Aciertos: " . $_SESSION['acierto'] . "<br>";
        print "Errores: " . $_SESSION['error'] . "<br>";
        print "<img src=\"imagenes/img1.jpg\"><br>";
        print "<p>Nombre del juego:</p>";
        if ($_GET["Enviar"] != null) {
            if (!$bool) {
                print "No";
            } else {
                print "Si";
            }
        }
        print "<form action='pregunta1.php'>
        Skyrim:<input type='radio' name='q1' value='skyrim'><br>
        Old Republic:<input type='radio' name='q1' value='oldrepublic'><br>
        World of Warcraft:<input type='radio' name='q1' value='wow'><br>
        Starcraft II:<input type='radio' name='q1' value='starcraft'><br>
        Arsenico por compasion:<input type='radio' name='q1' value='arsenico'><br>
        <br>
        <input type='submit' name='Enviar'>
        </form>";
?>