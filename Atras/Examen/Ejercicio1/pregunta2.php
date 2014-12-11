<?php
    session_name('datos');
    session_start();
    $bool = $_GET["Pregunta"] == "oldrepublic";
        if ($_GET["Enviar"] != null) {
            if (!$bool) {
                $_SESSION["error"] = $_SESSION["error"] + 1;
            } else {
                $_SESSION["acierto"] = $_SESSION["acierto"] + 1;
                header('Location: pregunta3.php');
            }
        }
        echo "<h1>Bienvenido " . $_SESSION["usuario"] . "</h1>";
        echo "Aciertos: " . $_SESSION['acierto'] . "<br>";
        echo "Errores: " . $_SESSION['error'] . "<br>";
        echo "<img src=\"imagenes/img2.jpg\"><br>";
        echo "<p>Nombre del juego:</p>";
        if ($_GET["Enviar"] != null) {
            if (!$bool) {
                echo "No";
            } else {
                echo "Si";
            }
        }
        echo "<form action='pregunta2.php'>
        Skyrim:<input type='radio' name='q1' value='skyrim'><br>
        Old Republic:<input type='radio' name='q1' value='oldrepublic'><br>
        World of Warcraft:<input type='radio' name='q1' value='wow'><br>
        Starcraft II:<input type='radio' name='q1' value='starcraft'><br>
        Arsenico por compasion:<input type='radio' name='q1' value='arsenico'><br>
        <br>
        <input type='submit' name='Enviar'>
    </form>";
?>