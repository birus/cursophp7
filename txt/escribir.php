<?php
$archivo="text.txt";  
$contenido="VICTOR OLALLA";

$manejador=fopen($archivo, 'a+'); /*a+ escribe a continuación, w+ sobre escribe*/
fwrite($manejador, $contenido);

?>


