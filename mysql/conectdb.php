<?php
$ServerName="localhost";
$UserName="birus";
$Pass="birus";
$DbName="birus";
$conexion= new mysqli($ServerName,$UserName,$Pass,$DbName);

/* comprueba la conexión */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>