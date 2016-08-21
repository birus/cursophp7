<?php
include('conexion.php');
session_start();

echo "Login -> ".$_SESSION['usuario']."<br/>Password-> ".$_SESSION['pass'];

//Crear Conexion
//$Conexion=new PDO('sqlite:favoritos.db') or die('No se pudo conectar');
$user=$_SESSION['usuario'];
$clave=$_SESSION['pass'];

//Establecer Consulta
$ConsulUsuario="SELECT * from favoritos where usuario='$user' AND pass='$clave'";

//Ejecutar Consulta
$Resultado=$conexion->query($ConsulUsuario);

//Imprimir Consulta
echo 
"
<table borde=1 width=100%>
	<tr>
		<td>Titulo</td>
		<td>Direccion</td>
		<td>Categoria</td>
		<td>Comentario</td>
		<td>Valoracion</td>
	</tr>
";

while ($fila=$Resultado->fetch(PDO::FETCH_ASSOC))
{
	echo 
	"<tr>
		<td>".$fila['titulo']."</td>
		<td>".$fila['direccion']."</td>
		<td>".$fila['categoria']."</td>
		<td>".$fila['comentario']."</td>
		<td>".$fila['valoracion']."</td>
	</tr>";
}
echo 
"
<tr>
	<form action='crearfavorito.php' method='POST'>
	<td><input type='text' name='titulo'></td>
	<td><input type='text' name='direccion'></td>
	<td><select name='categoria'>
		<option value='salud'>Salud</option>
		<option value='trabajo'>trabajo</option>
		<option value='hobby'>Hobby</option>
		<option value='personal'>personal</option>
		<option value='otros'>otros</option>
	</td>
	<td><input type='text' name='comentario'></td>
	<td><input type='text' name='valoracion'></td>
	<td><input type='submit'></td>
</tr>
";


echo "</table>";

?>
