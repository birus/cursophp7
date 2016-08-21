<?php
$archivologs="logs.dat";
$manejador=fopen($archivologs,"r");

echo 
'<table width=100% border="1">
	<td>Año</td>
	<td>Mes</td>
	<td>Dia</td>
	<td>hora</td>
	<td>Minuto</td>
	<td>Segundo</td>
	<td>Navegador</td>
	<td>IP</td>
';

while ($datos=fgetcsv($manejador,1000000,"|")) 
{
	$anio=$datos[0];
	$mes=$datos[1];
	$dia=$datos[2];
	$hora=$datos[3];
	$minuto=$datos[4];
	$segundo=$datos[5];
	$navegador=$datos[6];
	$ip=$datos[7];

echo'
<tr>
	<td border="1">'.$anio.'</td>
	<td border="1">'.$mes.'	</td>
	<td border="1">'.$dia.'</td>
	<td border="1">'.$hora.'</td>
	<td border="1">'.$minuto.'</td>
	<td border="1">'.$segundo.'</td>
	<td border="1">'.$navegador.'</td>
	<td border="1">'.$ip.'</td>
</tr>';


}
echo '</table>';
fclose($manejador);

?>
