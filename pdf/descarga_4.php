< ?
    $filename = "ruta-archivo" . $archivo;
    header("Expires: -1");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Content-type: application/zip;\n"); //or yours?
    header("Content-Transfer-Encoding: binary");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0");
    header("Pragma: no-cache");
    $len = filesize($filename);
    //header("Content-Length: $len;\n");
    $outname=$archivo;
    header("Content-Disposition: attachment; filename=".$outname.";\n\n");
    readfile($filename);
?>