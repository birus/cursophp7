<?php
$agenda[0]['nombre']="Luis";
$agenda[0]['Telefono']="098766";
$agenda[0]['Mail']="Luis@m.com";

$agenda[1]['nombre']="Juan";
$agenda[1]['Telefono']="098766";
$agenda[1]['Mail']="Luis@m.com";

$agenda[2]['nombre']="Marta";
$agenda[2]['Telefono']="098766";
$agenda[2]['Mail']="Luis@m.com";

function dameAgenda()
{
for ($x=0; $x <=2 ; $x++) 

{ 
	echo "
	<table border=1 width=300px>
		<tr>
			<td>
				Nombre:
			</td>
			<td>
				". $agenda[$x]["nombre"]."
			</td>
		</tr>
		<tr>
			<td>
				Telefono:
			</td>
			<td>
				". $agenda[$x]["Telefono"]."
			</td>
		</tr>
		<tr>
			<td>
				Nombre:
			</td>
			<td>
				". $agenda[$x]["Mail"]."
			</td>
		</tr>
	</table>
	";
	/*echo "Nombre: ".$agenda[$x]['nombre']."<br>";		
	echo "Telefono: ".$agenda[$x]['Telefono']."<br>";		
	echo "Mail: ".$agenda[$x]['nombre']."<br>";		
	*/
}
}
dameAgenda();
?>