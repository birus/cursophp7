<?php

include("conectdb.php");
/*$conexion=new mysqli("localhost","birus","birus","birus");

if (mysqli_connect_errno())
{
	printf("Conneect error: %s\n", mysqli_connect_errno());
}
*/
if ($conexion->query("INSERT INTO Agenda
	(Nombre, Apellido, Edad, Telefono) VALUES
	('David','Castillo','34','0987782638')
	")===TRUE)
	{printf("Registro creado\n");} 


?>