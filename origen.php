<?php

//Llamar código de otra página
echo "Yo soy el contenido Original<br>";
include "incluido.php";
echo "<br>";

//require llama a código de otro archivo pero si hay un error corta la ejecución
require "incluido.php";
echo "Hola Soy un Mensaje";

?>