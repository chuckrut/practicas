<?php
    session_name('datos');
    session_start();
    $bool = $_GET["Pregunta"] == "wow";
        if ($_GET["Enviar"] != null) {
            if (!$bool) {
                $_SESSION["error"] = $_SESSION["error"] + 1;
            } else {
                $_SESSION["acierto"] = $_SESSION["acierto"] + 1;
                header('Location: pregunta4.php');
            }
        }
        echo "<h1>Bienvenido " . $_SESSION["usuario"] . "</h1>";
        echo "Aciertos: " . $_SESSION['acierto'] . "<br>";
        echo "Errores: " . $_SESSION['error'] . "<br>";
        echo "<img src=\"imagenes/img3.jpg\"><br>";
        echo "<p>Nombre del juego:</p>";
        if ($_GET["Enviar"] != null) {
            if (!$bool) {
                echo "Si";
            } else {
                echo "No";
            }
        }
        echo "<form action='pregunta3.php'>
        Skyrim:<input type='radio' name='respuesta' value='skyrim'><br>
        Old Republic:<input type='radio' name='respuesta' value='oldrepublic'><br>
        World of Warcraft:<input type='radio' name='respuesta' value='wow'><br>
        Starcraft II:<input type='radio' name='respuesta' value='starcraft'><br>
        Arsenico por compasion:<input type='radio' name='respuesta' value='arsenico'><br>
        <br>
        <input type='submit' name='Enviar'>
    </form>";
?>