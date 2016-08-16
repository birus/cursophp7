<?php
$conexion= new mysqli("localhost", "birus", "birus", "birus"); /*servidor,user,pass,bd*/

/* comprueba la conexión */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* devuelve el nombre de la base de datos actualmente seleccionada
if ($result = $conexion->query("SELECT DATABASE()")) {
    $row = $result->fetch_row();
    printf("Default database is %s.\n", $row[0]);
    $result->close();
} */

if ($conexion->query("CREATE TABLE Agenda
	(
	Id int Not null Auto_increment,
	PRIMARY KEY(Id),
	Nombre varchar(15),
	Apellido varchar(15),
	Edad int,
	Telefono int)
	")===TRUE)
	{printf("Se creó correctamente la tabla Agenda.\n");}
else{printf("error");}

	# code...


/*PREPARO PETICION
$sql="CREATE db2_tables Agenda
(
	Nombre varchar(15),
	Apellido varchar(15),
	Edad int,
	Telefono int
)";
//EJECUTO PETICION
mysql_query($sql,$conexion);
*/
?>
