<?php
    session_cache_limiter('nocache,private');
    session_name('datos');
    session_start();
    $bool = $_GET["Pregunta"] == "starcraft";
        if ($_GET["Enviar"] != null) {
            if (!$bool) {
                $_SESSION["error"] = $_SESSION["error"] + 1;
            } else {
                $_SESSION["acierto"] = $_SESSION["acierto"] + 1;
                header('Location: respuesta.php');
            }
        }
        echo "<h1>Bienvenido " . $_SESSION["usuario"] . "</h1>";
        echo "Positivo: " . $_SESSION['positivo'] . "<br>";
        echo "Negativo: " . $_SESSION['negativo'] . "<br>";
        echo "<img src=\"imagenes/img4.jpg\"><br>";
        echo "<p>Nombre del juego:</p>";
        if ($_GET["Enviar"] != null) {
            if (!$bool) {
                echo "No";
            } else {
                echo "Si";
            }
        }
        echo "<form action='pregunta4.php'>
        Skyrim:<input type='radio' name='respuesta' value='skyrim'><br>
        Old Republic:<input type='radio' name='respuesta' value='oldrepublic'><br>
        World of Warcraft:<input type='radio' name='respuesta' value='wow'><br>
        Starcraft II:<input type='radio' name='respuesta' value='starcraft'><br>
        Arsenico por compasion:<input type='radio' name='respuesta' value='arsenico'><br>
        <br>
        <input type='submit' name='Enviar'>
    </form>";
?>