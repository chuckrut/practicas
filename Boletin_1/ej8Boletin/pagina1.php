<?php

session_cache_limiter('nocache,private');
session_name('fallosyAciertos');
session_start();



$correcto = $_GET["pregunta1"] == "coche";

    if ($_GET["enviar1"] == null) {
        $_SESSION["tiempo"] = time();
        $_SESSION['positivo'] = 0;
        $_SESSION['negativo'] = 0;
    } else {
        if (!$correcto) {
            $_SESSION["negativo"] = $_SESSION["negativo"] + 1;
        } else {
            $_SESSION["positivo"] = $_SESSION["positivo"] + 1;
            header('Location: pagina2.php');
        }
    }

    echo "<h1>Bienvenido " . $_SESSION["usuario"] . "</h1>";
    echo "Positivo: " . $_SESSION['positivo'] . "<br>";
    echo "Negativo: " . $_SESSION['negativo'] . "<br>";
    echo "<img src=\"imagenes/coche.jpg\"><br>";
    echo "<p>&iquest;Que aparece en la imagen?</p>";
    if ($_GET["enviar1"] != null) {
        if (!$correcto) {
            echo "<p style=\"color:red\">Incorrecto, se ha sumado un punto negativo a su puntuacion</p>";
        } else {
            echo "<p style=\"color:green\">Correcto, se ha sumado un punto positivo a su puntuacion</p>";
        }
    }
    echo "<form action=\"pagina1.php\">
    <input type=\"radio\" name=\"pregunta1\" value=\"coche\">Coche<br>
    <input type=\"radio\" name=\"pregunta1\" value=\"moto\">Moto<br>
    <input type=\"radio\" name=\"pregunta1\" value=\"autobus\">Autobus<br>
    <input type=\"radio\" name=\"pregunta1\" value=\"avion\">Avion<br>
    <input type=\"radio\" name=\"pregunta1\" value=\"barco\">Barco<br>
    <br>
    <input type=\"submit\" name=\"enviar1\">
</form>";
?>