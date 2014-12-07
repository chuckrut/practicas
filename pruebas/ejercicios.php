<html>
    <head>
        <title>Ejercicios</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Ejercicios</h1>
        <div style="overflow-style: auto">
            <?php
                $f = opendir("./ejercicios");
                while($fichero=readdir($f)) {
                    $contenido = "<?php include ('./ejercicios/".$fichero."');?>";
                    if ($fichero!="." && $fichero!=".."){
                        if ($fichero){
                        $archivo=fopen("ejercicio.php", "w"); 
                        ?><a href='' onclick="<?=fwrite($archivo, $contenido)?>"><?=$fichero?></a><br><?php
                        fclose($archivo);
                        }else{
                            
                        }
                    }
                }
                closedir($f);
            ?>
        </div>
    </body>
</html>