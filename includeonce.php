<?php
//inlcude_once permite inluir unicamente una vez, si se vuelve a incluir no  se otma en cuenta
include_once("variables.php");
echo $fruta;
$fruta="pera";
echo $fruta;
include_once("variables.php");
echo $fruta;

?>