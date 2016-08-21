<?php
//CREAR TABLA DE FAVORITOS

//CONEXION
$conexion =new PDO('sqlite:favoritos.db') or die('Ha Sido Imposible Conectar');

//CREAR TABLA
$CrearTabla=
"CREATE TABLE favoritos(
usuario Char(40) Not Null,
pass Char(40) Not Null,
titulo Char(40) Not Null,
direccion Char (100) not null,
categoria char(40),
comentario char(200),
valoracion int
)";

//INSERTAR CONTENIDO
try{
$conexion->exec($CrearTabla);
}
Catch(Exeption $e)
{
	echo"NO se pudo Crear" ;
}

try {
$queyInsertar="INSERT INTO favoritos(usuario,pass,titulo,direccion,categoria,comentario,valoracion) values('user2','user2','web20','web2.com','diseno web 2.0','detalle sobre diseno','4')";
$conexion->exec($queyInsertar);
	
} catch (PDOException $e) 
{
	echo $e->getMessage();
	echo "Error";
}
echo"<br>";
echo "Datos Ingresados";
echo"<br>";

//CONSULTAR  DATOS =====================================
$queryConsultar="SELECT * FROM favoritos";
foreach ($conexion->query($queryConsultar) as $key)
	{
		echo"<br>";
		echo $key[0];
		echo"<br>";
		echo $key[1];
		echo"<br>";
		echo $key[2];
		echo"<br>";
		echo $key[3];
		echo"<br>";

	}

//CERRAR CONEXION
//$conexion=null;

//CREAR TABLA USUARIOS
$CrearTablaUsuarios=
"CREATE TABLE usuarios(
usuario Char(40) Not Null,
pass Char(40) Not Null,
nombre Char(40) Not Null,
edad Char (2) not null,
permisos int
)"; 

$conexion->exec($CrearTablaUsuarios);

$queyInsertarUsuarios="INSERT INTO usuarios(usuario,pass,nombre,edad,permisos) values('user2','user2','Usuario Nuevo2','40','2')";

$conexion->exec($queyInsertarUsuarios);
echo"<br>";
echo "Usuarios Creados";
echo"<br>";

foreach ($conexion->query("Select * from usuarios") as $key)
{
	echo"<br>";
	echo "Usuario: ".$key[0];
	echo"<br>";
	echo $key[4];

}

//CREAR TABLAS DE LOGS
$CrearTablaLogs=
"CREATE TABLE logs(
utc int,
anio int,
mes int,
dia int,
hora int,
minuto int,
segundo int,
ip char (20),
navegador char(100),
usuario char(40),
pass char(40)
)"; 

$conexion->exec($CrearTablaLogs);
echo"<br>";
echo "LogsCreados ok";
echo"<br>";

?>
