<?php
printf("%'*12.2f euros",$_POST["numero"]);
print "<br />";
$texto=strtoupper(substr($_POST["texto"],0,10)).strtolower(substr($_POST["texto"],10));
print nl2br($texto); 