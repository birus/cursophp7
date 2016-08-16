<?php
include("conectdb.php");

$SqlQuery=("DELETE FROM agenda Where Nombre='David' and Apellido='Castillo'");

if ($conexion->query($SqlQuery)===true)
{
	printf("Registro borrado");
}

mysql_close($conexion);

?>
