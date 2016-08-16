<?php
$variable = "hola soy una Variable Global";
function hola()
{
	global $variable;
	echo $variable;
}
hola();
?>