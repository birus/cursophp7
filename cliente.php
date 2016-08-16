<?php
@$tuip=getenv(REMOTE_ADDR);
echo $tuip;
echo "<br>";
$tuNavegador=$_SERVER["HTTP_USER_AGENT"];
echo "Tu navegador y Sistema es ".$tuNavegador;
?>