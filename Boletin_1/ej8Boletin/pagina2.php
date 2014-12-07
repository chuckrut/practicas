<?php

session_cache_limiter('nocache,private');
session_name('fallosyAciertos');
session_start();

$correcto = $_GET["pregunta1"] == "moto";

    if ($_GET["enviar1"] != null) {
        if (!$correcto) {
            $_SESSION["negativo"] = $_SESSION["negativo"] + 1;
        } else {
            $_SESSION["positivo"] = $_SESSION["positivo"] + 1;
            header('Location: pagina3.php');
        }
    }

    echo "<h1>Bienvenido " . $_SESSION["usuario"] . "</h1>";
    echo "Positivo: " . $_SESSION['positivo'] . "<br>";
    echo "Negativo: " . $_SESSION['negativo'] . "<br>";
    echo "<img src=\"imagenes/moto.jpg\"><br>";
    echo "<p>&iquest;Que aparece en la imagen?</p>";
    if ($_GET["enviar1"] != null) {
        if (!$correcto) {
            echo "<p style=\"color:red\">Incorrecto, se ha sumado un punto negativo a su puntuacion</p>";
        } else {
            echo "<p style=\"color:green\">Correcto, se ha sumado un punto positivo a su puntuacion</p>";
        }
    }
    echo "<form action=\"pagina2.php\">
    <input type=\"radio\" name=\"pregunta1\" value=\"coche\">Coche<br>
    <input type=\"radio\" name=\"pregunta1\" value=\"moto\">Moto<br>
    <input type=\"radio\" name=\"pregunta1\" value=\"autobus\">Autobus<br>
    <input type=\"radio\" name=\"pregunta1\" value=\"avion\">Avion<br>
    <input type=\"radio\" name=\"pregunta1\" value=\"barco\">Barco<br>
    <br>
    <input type=\"submit\" name=\"enviar1\">
</form>";
?>