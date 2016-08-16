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
	('Linus','Torvals','38','0980082638')
	")===TRUE)
	{printf("Registro creado\n");} 


?>