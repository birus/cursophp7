
<?php
$serverName = "192.168.1.18\gigabyte"; //serverName\instanceName
$connectionInfo = array( "Database"=>"emapa", "UID"=>"sa", "PWD"=>"n8bsklt");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
