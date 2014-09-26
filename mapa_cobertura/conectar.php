<?php 
function Conectarse() 
{ 
	if (!($link=mysql_connect("127.0.0.1","root","colage"))) //infoguest
	{ 
	  echo "Error conectando a la base de datos."; 
	  exit(); 
	} 
	if (!mysql_select_db("bd_almanaque",$link))
	{ 
	  echo "Error seleccionando la base de datos."; 
	  exit(); 
	} 
	mysql_set_charset('utf8',$link); 
	return $link; 
} 
?>
