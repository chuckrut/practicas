<html>
    <head>
        <title>Titulo</title>
    </head>
    <body>
        <?php
//            if ($dir = @opendir("ejercicios" ) {
//                while (($file = readdir($dir)) !== false) {
//                    if($file != ".." && $file != "." {
//                        $filelist[] = $file;
//                    }
//                }
//                closedir($dir);
//            }
        ?>
        <form>
            <select name="selected_dir" >
                <?php
                asort($filelist);
                while (list ($key, $val) = each($filelist)) {
                    echo "<option value='$val'>$val</option>";
                }
                ?>
            </select>
        </form>
    </body>
</html>