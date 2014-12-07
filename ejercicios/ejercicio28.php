<?php
    include("adodb-time.inc.php");
    if(file_exists("fecha.txt")){
       $f1=fopen("fecha.txt","a+");
       fwrite($f1, adodb_getdate());
    }else{
       $f1=fopen("fecha.txt","w+");
       fwrite($f1, adodb_getdate());
}
/* escribimos el número de visitas en el fichero. En cualquiera
   de los casos el puntero estará al comienzo del fichero, por tanto
   cuando existan valores serán sobreescritos */
 fclose($f1);
?>