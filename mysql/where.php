<?php
include("conectdb.php");

$ConsultaSql=("SELECT * FROM Agenda WHERE Apellido='Torvals' ORDER BY Nombre");
$Resultado=$conexion->query($ConsultaSql);

if ($Resultado->num_rows>0) 
{
	while ($fila=$Resultado->fetch_assoc()) 
	{
		echo "ID: ". $fila["Id"]. " - Name: ". $fila["Nombre"]. " ". $fila["Apellido"]." - Telefono: ". $fila["Telefono"]. "<br>";
	}
}

?>