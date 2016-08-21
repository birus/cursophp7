<?php
session_start();
$_SESSION['usuario']="birus";
$_SESSION['pass']="clave";

echo 
'
<!DOCTYPE html>
<html>
<head>
	<title>INDEX</title>
	<meta http-equiv="REFRESH" content="0;url=principal.php"> 
</head>
<body>

</body>
</html>
'

?>