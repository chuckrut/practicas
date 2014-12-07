<?php
    
    if ($_POST['numero1']!=null && $_POST['numero2']!=null && $_POST['calculo']!=null){
        switch ($_POST['calculo']){
            case "suma":
                $resultado = $_POST['numero1']+$_POST['numero2'];
                break;
            case "resta":
                $resultado = $_POST['numero1']-$_POST['numero2'];
                break;
            case "multiplica":
                $resultado = $_POST['numero1']*$_POST['numero2'];
                break;
            case "divide":
                $resultado = $_POST['numero1']/$_POST['numero2'];
                break;
            default:
                $resultado = "";
                break;
        }
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio11</title>
    </head>
    <body>
        <form action="ejercicio11.php" method="post">
            <input type="number" name="numero1">
            <select name="calculo">
                <option value="suma">+</option>
                <option value="resta">-</option>
                <option value="multiplica">x</option>
                <option value="divide">/</option>
            </select>
            <input type="number" name="numero2">
            <input type="submit" value="calcular">
            <input type="text" name="resultado" value=<?php echo $resultado ?>>
        </form>
    </body>
</html>