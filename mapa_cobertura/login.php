<?php
include "conectar.php";
$link = Conectarse();
$usuario = $_REQUEST['usuario'];
$pass	 = $_REQUEST['pass'];

$esta_usuario = mysql_query("select * from tbl_usuarios where user = '$usuario' and password = '$pass' ", $link);
$ejecutando = mysql_fetch_object($esta_usuario);
if(isset($ejecutando->user)){
	session_start();
	$_SESSION['usuario'] = $usuario;
	echo "mapas_cobertura.php";
}else{
	echo "FALLO";
}




?>