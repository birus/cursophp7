<?php 

class saluda
{
	
	function saludo()
	{
		echo "Yo te saludo";
	}
	function adios()
	{
		echo "Yo me despido";
	}
}
$instancia=new saluda();

$ins=$instancia->adios();

 ?>