< ?
    $folder = "archivos_para_descargar";
    $nombre = $_GET[‘archivo’]; // Nombre del archivo
    $contenido = ‘Texto del archivo’; // Contenido del archivo
    $enlace = $folder."/".$_GET[‘archivo’];
    header ("Content-Disposition: attachment; filename=".$nombre."");
    header ("Content-Type: application/octet-stream");
    header ("Content-Length: ".filesize($enlace));
    readfile($enlace);
?>