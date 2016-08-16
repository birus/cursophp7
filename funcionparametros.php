<?php
//Funcion Una Tabla de Multiplicar
function miTabla($numero)
{
	for ($multiplicador=0; $multiplicador <=10; $multiplicador++) 
	{ 
		echo $numero."x".$multiplicador."=".$numero*$multiplicador."<br>";
	}
}

//Función todas las tablas de multiplicar

for ($otronumero=0; $otronumero <=10; $otronumero++) 
{ 
	echo "Tabla del :".$otronumero."<br>" ;
	miTabla($otronumero);
}




?>