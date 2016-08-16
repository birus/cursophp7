<?php
//Funcion para obtener la fecha actual en españosl
function tiempoEsp()
	{	
		switch (date("l")) 
		{
			case 'Monday':
				$dia="Lunes";
				break;
			case 'Tuesday':
				$dia="Martes";
				break;
			case 'Wednesday':
				$dia="Miercoles";
				break;
			case 'Thursday':
				$dia="Jueves";
				break;
			case 'Friday':
				$dia="Viernes";
			case 'Saturday':
				$dia="Sabado";
				break;
			case 'Sunday':
				$dia="Domingo";
				break;
			
		}

		echo "Hoy es ".$dia.", ".date("j")." de ".date("F")." del ".date("Y");
	}
?>