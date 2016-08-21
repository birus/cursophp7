<?php 
//include("conexion.php");
session_start();

$conexion =new PDO('sqlite:favoritos.db') or die('Ha Sido Imposible Conectar');
//VARIABLES

$usuario=$_SESSION['usuario'];
$pass=$_SESSION['pass'];
$addtitulo=$_POST['titulo'];
$addireccion=$_POST['direccion'];
$addcategoria=$_POST['categoria'];
$addcomentario=$_POST['comentario'];
$addvaloracion=$_POST['valoracion'];
//CONEXION
try
{
$queryInsertar="INSERT INTO favoritos 
	(usuario,pass,titulo,direccion,categoria,comentario,valoracion)
	VALUES
	('$usuario','$pass','$addtitulo','$addireccion','$addcategoria','$addcomentario','$addvaloracion')";

if ($conexion->exec($queryInsertar)===false)
	{printf("error al guardar");}
}
catch (PDOException $e)	
{
	echo $e->getMessage();
	echo "Error";
}




echo
'
<!DOCTYPE html>
<html>
<head>
	<title>GUARDAR</title>
	<meta http-equiv="REFRESH" content="0;url=principal.php"
</head>
<body>

</body>
</html>

';

 ?>