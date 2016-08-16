<?php
include("conectdb.php");

$SqlQuery=("UPDATE Agenda SET Edad='80' WHERE Nombre='Linus' AND Apellido='Torvals'");

if ($conexion->query($SqlQuery)===TRUE) 
{
	printf("Registro Actualizado");
}



?>