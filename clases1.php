<?php 

class dimeAlgo #Clase
{
	
	function dimeAlgo($algo) #Constructor, debe tener el mismo nombre de la clase
	{
		$algo=4*$algo;
		echo "Lo que te voy a decir es esto:".$algo;
	}
}

$decir=new dimeAlgo("4"); #Nueva instancia del objeto dimeAlgo
 ?>