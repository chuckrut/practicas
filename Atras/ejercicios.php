<html>
    <head>
        <title>Ejercicios</title>
        <meta charset="UTF-8">
        <link href="ejercicios/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="ejercicios/css/centrado.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>Ejercicios</h1>
        <div id="menu" style="overflow-style: auto">
            <?php
                $f = opendir("./ejercicios/");
                while($fichero=readdir($f)) {
                    if (is_dir($fichero) && $fichero!="." && $fichero!="..") {
                        ?>
                            </div>
                            <div id="menu">
                                <ul>
                                  <li><span><?php echo $fichero?></span>
                                    <?php
                                        $f2 = opendir("./ejercicios/".$fichero);
                                        while($fichero2=readdir($f2)) {
                                    ?>
                                    <ul>
                                      <li><span><a href="./ejercicios/<?php echo $fichero?>/<?php echo $fichero2?>"><?php echo $fichero2?></a></span></li>
                                      <?php
                                        }
                                      ?>
                                    </ul>
                                  </li>
                                </ul>
                        <?php
                    }else
                        if (!is_dir($fichero) && $fichero!="." && $fichero!=".."){
                        ?><ul>
                            <li>
                                <span>
                                    <a class="centrado" href="./ejercicios/<?php echo $fichero?>"><?php echo $fichero?></a>
                                </span>
                            </li>
                        </ul>
                        <br><?php
                    }
                }
                closedir($f);
            ?>
        </div>
    </body>
</html>