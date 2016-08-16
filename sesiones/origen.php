<?php 
session_start();
$primeravariable="hola";
$_SESSION['segundavariable']="2da Variable";

echo $primeravariable;
echo "<a href='destino.php'>Voy al destino</a>";
 ?>