<?php
printf("%'*12.2f euros",$_POST["numero"]);
print "<br>";
print strtoupper(substr($_POST["texto"],0,10));
print strtolower(substr($_POST["texto"],10));